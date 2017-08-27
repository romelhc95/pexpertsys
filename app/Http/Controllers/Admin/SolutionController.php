<?php

namespace Tesis\Http\Controllers\Admin;

use Nicolaslopezj\Searchable\SearchableTrait;
use Tesis\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tesis\Http\Requests\SearchRequest;
use Tesis\Http\Requests\SolutionRequest;
use Tesis\Models\Disease;
use Tesis\Models\Solution;
use Tesis\Models\Step;
use Tesis\Traits\HashTrait;

class SolutionController extends Controller
{
    use HashTrait;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$diseases = Disease::pluck('name', 'id');
        $steps = Step::pluck('number', 'id')->toArray();
        $solutions = Solution::orderBy('id', 'desc')->with('solu_diseas', 'step')->paginate(10);

        return view('admin.solution.index')
            ->with('steps', $steps)
            ->with('solutions', $solutions);
          //  ->with('diseases', $diseases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|SolutionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolutionRequest $request)
    {
        //$form = collect_clean($request->all());
        Solution::create($request->toArray());

        alert('La solución se registró correctamente');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $hash_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit($hash_id)
    {
        $id = $this->decode($hash_id);

        $step = Step::pluck('number', 'id')->toArray();
        $solution = Solution::findOrFail($id);

        return view('admin.solution.edit')
            ->with(('step'), $step)
            ->with('solution', $solution);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $hash_id
     * @param Request|SolutionRequest $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update($hash_id, SolutionRequest $request)
    {
        $id = $this->decode($hash_id);

        $solution = Solution::findOrFail($id);
        $solution->update($request->all());

        alert('La solución se modificó con éxito');
        return redirect()->route('admin::soluciones::create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $hash_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function delete($hash_id)
    {
        $id = $this->decode($hash_id);

        $solution = Solution::findOrFail($id);

        if ($solution->soludiseas->count() > 0){
            alert('No se puede eliminar una solución con enfermedad', 'danger');
            return redirect()->back();
        }
        $solution->delete();

        alert('La Solución se eliminó con éxito');
        return redirect()->route('admin::soluciones::create');
    }

    public function search(SearchRequest $request)
    {
        if (!$request->has('search')){
            return redirect()->route('admin::soluciones::create');
        }

        $solutions = Solution::search($request->search)->get();

        return view('admin.solution.result')->with('solutions', $solutions);
    }
}
