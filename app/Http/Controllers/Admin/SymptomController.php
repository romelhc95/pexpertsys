<?php

namespace Tesis\Http\Controllers\Admin;

use Tesis\Http\Controllers\Controller;
use Tesis\Http\Requests\SearchRequest;
use Tesis\Http\Requests\SymptomRequest;
use Tesis\Models\Symptom;
use Tesis\Traits\HashTrait;

class SymptomController extends Controller
{
    use HashTrait;

    public function create()
    {
        $sintomas = Symptom::orderBy('id', 'desc')->with('rules')->paginate(10);

        return view('admin.symptom.index')
            ->with('sintomas', $sintomas);
    }

    public function store(SymptomRequest $request)
    {
        Symptom::create($request->all());

        flash('<i class="fa fa-floppy-o" aria-hidden="true"></i><span> Sintoma se registro correctamente</span>')->success();
        return redirect()->back();
    }

    public function edit($hash_id)
    {
        $id = $this->decode($hash_id);

        $sintoma = Symptom::findOrFail($id);

        return view('admin.symptom.edit')->with('sintoma', $sintoma);
    }

    public function update($hash_id, SymptomRequest $request)
    {
        $id = $this->decode($hash_id);

        $sintoma = Symptom::findOrFail($id);
        $sintoma->update($request->all());

        flash('<i class="fa fa-upload" aria-hidden="true"></i><span> El síntoma se modificó correctamente.</span>')->warning();
        return redirect()->route('admin::sintomas::create');
    }

    public function delete($hash_id)
    {
        $id = $this->decode($hash_id);

        $sintoma = Symptom::findOrFail($id);

        if ($sintoma->rules->count() > 0) {
            alert('No se puede eliminar un síntoma con reglas', 'danger');
            return redirect()->back();
        }

        $sintoma->delete();

        flash('<i class="fa fa-trash" aria-hidden="true"></i><span> Se Elimino el síntoma correctamente.</span>')->error();
        return redirect()->route('admin::sintomas::create');
    }

    public function search(SearchRequest $request)
    {
        if (!$request->has('search')) {
            return redirect()->route('admin::sintoma::create');
        }

        $sintomas = Symptom::search($request->search)->get();

        return view('admin.symptom.result')->with('sintomas', $sintomas);
    }
}
