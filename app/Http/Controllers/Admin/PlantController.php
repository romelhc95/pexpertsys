<?php

namespace Tesis\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Tesis\Http\Controllers\Controller;
use Tesis\Http\Requests\PlantRequest;
use Tesis\Http\Requests\SearchRequest;
use Tesis\Models\Plant;
use Tesis\Traits\HashTrait;

class PlantController extends Controller
{
    use HashTrait;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plants = Plant::with('user', 'diagnostics')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.plant.index')->with('plants', $plants);
    }

    /**
     * @param PlantRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(PlantRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $hash_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy($hash_id)
    {
        //
    }

    public function search(SearchRequest $request)
    {
        if (!$request->has('search')){
            return redirect()->route('admin::plantas::create');
        }

        $plants = Plant::search($request->search)->orderBy('created_at', 'id')->with('user')->paginate(20);

        return view('admin.plant.result')->with('plants', $plants);
    }
}
