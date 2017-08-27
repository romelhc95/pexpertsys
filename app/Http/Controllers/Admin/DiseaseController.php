<?php

namespace Tesis\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tesis\Http\Controllers\Controller;
use Tesis\Http\Requests\DiseaseRequest;
use Tesis\Http\Requests\SearchRequest;
use Tesis\Models\Disease;
use Tesis\Models\Rule;
use Tesis\Models\Solution;
use Tesis\Models\Symptom;
use Tesis\Models\SoluDisea;
use Tesis\Traits\HashTrait;
use Tesis\Models\Type;

class DiseaseController extends Controller
{
    use HashTrait;

    /**
     * @return $this
     */
    public function create()
    {
        $types   = Type::pluck('description', 'id')->toArray();
        $enfermedades = Disease::with('rules', 'diagnostics', 'solu_diseas', 'type')->orderBy('name', 'asc')->paginate(10);

        return view('admin.disease.index')
            ->with('types', $types)
            ->with('enfermedades', $enfermedades);
    }

    public function store(DiseaseRequest $request)
    {
        $enfermedad = Disease::create($request->all());

        alert('Se ingresó la enfermedad correctamente');
        return redirect()->back();
    }

    public function edit($hash_id)
    {
        $id         = $this->decode($hash_id);
        $enfermedad = Disease::findOrFail($id);

        $e_sintomas = $enfermedad->rules->pluck('id')->toArray();
        $e_solutions = $enfermedad->solu_diseas->pluck('id')->toArray();

        return view('admin.disease.edit')
            ->with('e_sintomas', $e_sintomas)
            ->with('e_solutions', $e_solutions)
            ->with('enfermedad', $enfermedad);
    }

    public function update($hash_id, DiseaseRequest $request)
    {
        $id = $this->decode($hash_id);

        $enfermedad = Disease::findOrFail($id);

        $enfermedad->update($request->all());

        alert('Se actualizó la enfermedad correctamente');
        return redirect()->route('admin::enfermedades::create');
    }

    /**
     * @param $hash_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($hash_id)
    {
        $id = $this->decode($hash_id);

        $enfermedad = Disease::findOrFail($id);

        if ($enfermedad->diagnostics->count() > 0) {
            alert('No se puede eliminar una enfermedad con diagnósticos', 'danger');
            return redirect()->back();
        }

        $rules = Rule::whereDiseaseId($enfermedad->id)->orderBy('number', 'desc')->get();

        if (!$rules->isEmpty()) {
            $rulesForDecrease = Rule::where('number', '>', $rules->first()->number)->decrement('number');
            $rules->each(function ($rule) {
                $rule->delete();
            });
        }

        $soludiseas = SoluDisea::whereDiseaseId($enfermedad->id)->orderBy('number', 'desc')->get();

        if (!$soludiseas->isEmpty()){
            $soludiseasForDecrease = SoluDisea::where('number', '>', $soludiseas->first()->number->decrement('number'));
            $soludiseas->each(function ($soludisea){
                $soludisea->delete();
            });
        }

        $enfermedad->delete();

        alert('Se eliminó la enfermedad y/o sus reglas y soluciones correctamente');
        return redirect()->back();
    }

    public function search(SearchRequest $request)
    {
        if (!$request->has('search')) {
            return redirect()->route('admin::enfermedades::create');
        }

        $enfermedades = Disease::search($request->search)->get();

        return view('admin.disease.result')->with('enfermedades', $enfermedades);
    }

    public function add_rule($hash_id, Request $request)
    {
        $enfermedad = Disease::findOrFail($this->decode($hash_id));
        //$sintomas   = Symptom::orderBy('name', 'asc')->lists('name', 'id')->toArray();
        //$sintomas = DB::table('symptoms')->orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $sintomas = DB::table('symptoms')->orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $reglas     = Rule::with('symptom')
            ->where('disease_id', $enfermedad->id)
            ->get()
            ->groupBy('number');

        if ($request->isMethod('post')) {

            $this->validate($request, ['sintomas' => 'required']);

            if ($this->checkIfRuleExists($request->sintomas)) {
                alert('La regla ya existe, por favor ingrese otros síntomas', 'danger');
                return redirect()->back();
            }

            $lastRule = Rule::orderBy('id', 'desc')->first();

            if (is_null($lastRule)) {
                $numberRule = 1;
            } else {
                $numberRule = intval($lastRule->number) + 1;
            }

            $symptoms = Symptom::findOrFail($request->sintomas);
            foreach ($symptoms as $symptom) {
                $rule         = new Rule;
                $rule->number = $numberRule;
                $rule->disease()->associate($enfermedad);
                $rule->symptom()->associate($symptom);
                $rule->save();
            }

            alert('Se registró la regla con éxito');
            return redirect()->back();
        }

        return view('admin.disease.add_rule')
            ->with('enfermedad', $enfermedad)
            ->with('reglas', $reglas)
            ->with('sintomas', $sintomas);
    }

    /**
     * Delete the rule by the number and the rules with a greather number
     * decrease in one their number attribute
     * @param integer $ruleNumber
     */
    public function delete_rule($ruleNumber)
    {
        $rules = Rule::whereNumber($ruleNumber)->delete();

        $rulesForDecrease = Rule::where('number', '>', $ruleNumber)->decrement('number');

        alert('Se eliminó la regla con éxito');
        return redirect()->back();
    }

    private function checkIfRuleExists($symptomsArray)
    {
        $rules = Rule::with('symptom')->whereIn('symptom_id', $symptomsArray)->get()->groupBy('number');

        list($rulesKeys) = array_divide($rules->toArray());

        $rules = Rule::with('symptom')->whereIn('number', $rulesKeys)->get()->groupBy('number');

        $rules = $rules->map(function ($symptoms, $key) {
            return $symptoms->groupBy('symptom_id');
        });

        $rules = $rules->filter(function ($rule) use ($symptomsArray) {
            list($symptomKeys) = array_divide($rule->toArray());
            $intersect         = array_intersect($symptomsArray, $symptomKeys);

            if (($rule->count() >= count($symptomsArray)) && ($intersect == $symptomsArray)) {
                return true;
            }
        });

        $maxSymptomKey = 0;

        foreach ($rules as $key => $ruleNumber) {

            list($symptomKeys) = array_divide($ruleNumber->toArray());

            $difference = array_diff($symptomKeys, $symptomsArray);

            if (empty($difference)) {
                return true;
            } elseif ($symptomKeys == $difference) {
                return false;
            }

        }
    }

    /**
     * @param $hash_id
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function add_solution($hash_id, Request $request)
    {
        $enfermedad = Disease::findOrFail($this->decode($hash_id));
        $solutions = DB::table('solutions')->orderBy('description', 'asc')->pluck('description', 'id')->toArray();
        $soludiseas = SoluDisea::with('solution')
            ->where('disease_id', $enfermedad->id)
            ->get()
            ->groupBy('number');

        if ($request->isMethod('post')) {

            $this->validate($request, ['solutions' => 'required']);

            if ($this->checkIfSoluDiseaExists($request->solutions)) {
                alert('La Solución ya existe, por favor ingrese otra', 'danger');
                return redirect()->back();
            }

            $lastSoludisea = SoluDisea::orderBy('id', 'desc')->first();

            if (is_null($lastSoludisea)) {
                $numberSoludisea = 1;
            } else {
                $numberSoludisea = intval($lastSoludisea->number) + 1;
            }

            $soluciones = Solution::findOrFail($request->solutions);
            foreach ($soluciones as $solucion) {
                $soludisea         = new SoluDisea;
                $soludisea->number = $numberSoludisea;
                $soludisea->disease()->associate($enfermedad);
                $soludisea->solution()->associate($solucion);
                $soludisea->save();
            }

            alert('La solución se registro con éxito');
            return redirect()->back();
        }

        return view('admin.disease.add_solution')
            ->with('enfermedad', $enfermedad)
            ->with('solutions', $solutions)
            ->with('soludiseas', $soludiseas);
    }

    public function delete_solution($soludiseaNumber)
    {
        $soludiseas = SoluDisea::whereNumber($soludiseaNumber)->delete();

        $soludiseasForDecrease = SoluDisea::where('number', '>', $soludiseaNumber)->decrement('number');

        alert('La Solución se eliminó con éxito');
        return redirect()->back();
    }

    private function checkIfSoluDiseaExists($solutionsArray)
    {
        $soludiseas = SoluDisea::with('Solution')->whereIn('solution_id', $solutionsArray)->get()->groupBy('number');

        list($soludiseasKeys) = array_divide($soludiseas->toArray());

        $soludiseas = SoluDisea::with('Solution')->whereIn('number', $soludiseasKeys)->get()->groupBy('number');

        $soludiseas = $soludiseas->map(function ($solutions, $key) {
            return $solutions->groupBy('solution_id');
        });

        $soludiseas = $soludiseas->filter(function ($soludisea) use ($solutionsArray) {
            list($soludiseasKeys) = array_divide($soludisea->toArray());
            $intersect         = array_intersect($solutionsArray, $soludiseasKeys);

            if (($soludisea->count() >= count($solutionsArray)) && ($intersect == $solutionsArray)) {
                return true;
            }
        });

        $maxSolutionKey = 0;

        foreach ($soludiseas as $key => $soludiseaNumber) {

            list($solutionKeys) = array_divide($soludiseaNumber->toArray());

            $difference = array_diff($solutionKeys, $solutionsArray);

            if (empty($difference)) {
                return true;
            } elseif ($solutionKeys == $difference) {
                return false;
            }

        }
    }
}
