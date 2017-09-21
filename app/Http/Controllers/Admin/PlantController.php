<?php

namespace Tesis\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Tesis\Http\Controllers\Controller;
use Tesis\Http\Requests\PlantRequest;
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
        $plants = Plant::orderBy('number', 'desc')->paginate(10);
        return view('admin.plant.index')->with('plants', $plants);
    }

    /**
     * @param PlantRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PlantRequest $request)
    {
        $plant = new Plant;
        $length = $plant->number=$request->number;
//        dd($plant);
        for ($i=0; $i<=$length; $i++) {
            $i->save();
//            dd($i);
        }
//        alert('Las plantas fueron registradas correctamente');
//        return redirect('admin/plantas/listar');
//        $i->save();
//        $plant->number = $request->number;
//        Plant::create($request->all());
//            return redirect('admin/plantas/listar');
//        var_dump($request->number);
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

        $plant = Plant::findOrFail($id);

        return view('admin.plant.edit')->with('plant', $plant);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
