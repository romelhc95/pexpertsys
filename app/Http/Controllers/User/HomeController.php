<?php

namespace Tesis\Http\Controllers\User;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tesis\Http\Controllers\Controller;
use Tesis\Http\Requests\PasswordRequest;
use Tesis\Http\Requests\ProfileRequest;
use Tesis\Models\Diagnostic;
use Tesis\Models\Disease;
use Tesis\Models\State;
use Tesis\Models\Symptom;
use Tesis\Models\User;


class HomeController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRole(['Agricultor', 'Administrador']);
        $countDiagnostic = count(auth()->user()->diagnostics);
        $countDiseases   = Disease::count();
        $countSymptom    = Symptom::count();
        $diagnostics     = Diagnostic::with('disease')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('user.home')
            ->with('countSymptom', $countSymptom)
            ->with('countDiseases', $countDiseases)
            ->with('countDiagnostic', $countDiagnostic)
            ->with('diagnostics', $diagnostics);
    }

    public function profile()
    {
        //$states = State::orderBy('name', 'asc')->lists('name', 'id')->toArray();
        $states = DB::table('states')->orderBy('name', 'asc')->pluck('name', 'id')->toArray();

        return view('user.profile')->with('states', $states);
    }

    public function profile_update(ProfileRequest $request)
    {
        // Comprobar si el email existe solo si se ha cambiado el email
        if ($request->email != auth()->user()->email) {
            $user = User::whereEmail($request->email)->get();
            if (!empty($user)) {
                alert('El email ingresado ya existe', 'danger');
                return redirect()->back();
            }
        }

        $state = State::findOrFail($request->state);

        $user = auth()->user();
        $user->state()->associate($state);
        $user->update($request->all());

        alert('Se modificaron los datos con éxito');
        return redirect()->back();
    }

    public function password_update(PasswordRequest $request)
    {
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            alert('La contraseña ingresada no coincide con la actual', 'danger');
            return redirect()->back();
        }

        $user           = auth()->user();
        $user->password = bcrypt($request->new_password);
        $user->save();

        alert('Se cambió la contraseña con éxito');
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function someUserStuff(Request $request){
        $request->user()->authorizeRoles('Agricultor');
        return view('user.home');
    }
}
