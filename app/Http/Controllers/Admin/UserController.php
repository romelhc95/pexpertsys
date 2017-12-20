<?php

namespace Tesis\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Laracasts\Flash\Flash;
use Nicolaslopezj\Searchable\SearchableTrait;
use Tesis\Http\Controllers\Controller;
use Tesis\Http\Requests\SearchRequest;
use Tesis\Http\Requests\UserRequest;
use Tesis\Models\State;
use Tesis\Models\User;
use Tesis\Traits\HashTrait;

class UserController extends Controller
{
    use SearchableTrait, HashTrait;

    public function create()
    {
//        $states   = State::pluck('name', 'id')->toArray();
//        $usuarios = User::with('state', 'diagnostics')
//        $user = User::all();
            $usuarios = User::with( 'diagnostics')
            ->whereNotIn('id', [1])
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.user.index')
//            ->with('states', $states)
            ->with('usuarios', $usuarios);
    }

    /**
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $form = collect_clean($request->all());

        $password = bcrypt($request['password']);

        if(Hash::needsRehash($password)) {
            $password = bcrypt($password);
        }

        if ($request->has('birthday')) {
            $request['birthday'] = Carbon::createFromFormat('d/m/Y', $request->birthday)->format('Y-m-d');
        }

        User::create($form->toArray());

        flash('<i class="fa fa-floppy-o" aria-hidden="true"></i><span> Usuario registrado correctamente</span>')->success();
        return redirect()->back();
    }

    public function edit($hash_id)
    {
        $id = $this->decode($hash_id);

//        $states  = State::pluck('name', 'id')->toArray();
        $usuario = User::findOrFail($id);

        return view('admin.user.edit')
//            ->with('states', $states)
            ->with('usuario', $usuario);
    }

    public function update($hash_id, UserRequest $request)
    {
        $id   = $this->decode($hash_id);
        $form = collect_clean($request->all());

        $usuario = User::findOrFail($id);

        $usuario->update($form->toArray());

        $usuario->save();
        // actualizando departamento
//        if ($request->has('state')) {
//            if ($request->state != $usuario->state_id) {
//                $state = State::findOrFail($request->state);
//                $usuario->state()->associate($state);
//                $usuario->save();
//            }
//        }

        flash('<i class="fa fa-upload" aria-hidden="true"></i><span> Usuario modificado correctamente.</span>')->warning();
        return redirect()->route('admin::usuarios::create');
    }

    public function delete($hash_id)
    {
        $id = $this->decode($hash_id);

        $user = User::findOrFail($id);
        $user->delete();

        flash('<i class="fa fa-trash" aria-hidden="true"></i><span> Usuario Eliminado correctamente.</span>')->error();
        return redirect()->back();
    }

    /**
     * @param SearchRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function search(SearchRequest $request)
    {
        if (!$request->has('search')) {
            return redirect()->route('admin::usuarios::create');
        }

//        $usuarios = User::search($request->search)->with('state', 'diagnostics')->get();
        $usuarios = User::search($request->search)->with('state', 'diagnostics')->get();

        return view('admin.user.result')->with('usuarios', $usuarios);
    }
}
