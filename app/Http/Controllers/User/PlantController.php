<?php

namespace Tesis\Http\Controllers\User;

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
        $plants = Plant::orderBy('created_at', 'desc')->where('user_id', auth()->id())->paginate(20);
        return view('user.plant.index')->with('plants', $plants);
    }

    /**
     * @param PlantRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(PlantRequest $request)
    {
        $total=$request->codeplant;
        for($i=0; $i<$total; $i++) {
            $plant = new Plant();
            $plant->user_id = $request->user()->id;
            $plant->codeplant = $i+1;
            $plant->area = $request->area;
            $plant->save();
        }
        alert('Las plantas fueron registradas correctamente');
        return redirect('user/plantas/listar');
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

        return view('user.plant.edit')->with('plant', $plant);

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
    public function delete($hash_id)
    {
        $id = $this->decode($hash_id);

        $plant = Plant::findOrFail($id);
        $plant->delete();

        flash('<i class="fa fa-trash" aria-hidden="true"></i><span> La planta fue eliminada correctamente.</span>')->error();
        return redirect()->back();
    }
}
