<?php

namespace Tesis\Http\Controllers\Admin;

use DB;
use Illuminate\Support\Facades\Hash;
use Tesis\Http\Controllers\Controller;
use Tesis\Http\Requests\PasswordRequest;
use Tesis\Http\Requests\ProfileRequest;
use Tesis\Models\Diagnostic;
use Tesis\Models\Disease;
use Tesis\Models\Plant;
use Tesis\Models\Solution;
use Tesis\Models\State;
use Tesis\Models\Symptom;
use Tesis\Models\User;

class HomeController extends Controller
{
    /**
     * @return $this
     */
    public function home()
    {
        $countDiseases   = Disease::count();
        $countSymptom    = Symptom::count();
        $countDiagnostic = Diagnostic::count();
        $countSolution = Solution::count();
        $countPlant = Plant::count();
        $lastRegistered  = User::orderBy('created_at', 'desc')->take(9)->get();

        return view('admin.home')
            ->with('countDiagnostic', $countDiagnostic)
            ->with('countSymptom', $countSymptom)
            ->with('countDiseases', $countDiseases)
            ->with('countSolution', $countSolution)
            ->with('countPlant', $countPlant)
            ->with('lastRegistered', $lastRegistered);
    }

    public function profile()
    {
//        $states = DB::table('states')->orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        //$states = State::orderBy('name', 'asc')->lists('name', 'id')->toArray();

        return view('admin.profile');
    }

    public function profile_update(ProfileRequest $request)
    {
        // Comprobar si el email existe solo si se ha cambiado el email
        if ($request->email != auth()->user()->email) {
            $user = User::whereEmail($request->email)->get();
            if (!empty($user)) {
                flash('<i class="fa fa-info-circle" aria-hidden="true"></i><span> El email ingresado ya existe.</span>')->error();
                return redirect()->back();
            }
        }

//        $state = State::findOrFail($request->state);

        $user = auth()->user();
//        $user->state()->associate($state);
        $user->update($request->all());

        flash('<i class="fa fa-upload" aria-hidden="true"></i><span> Los datos se modificarón correctamente.</span>')->warning();
//        alert('Se modificaron los datos con éxito');
        return redirect()->back();
    }

    public function password_update(PasswordRequest $request)
    {
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            flash('<i class="fa fa-info-circle" aria-hidden="true"></i><span> La contraseña ingresada no coincide con la actual.</span>')->warning()->important();
//            alert('La contraseña ingresada no coincide con la actual', 'danger');
            return redirect()->back();
        }

        $user           = auth()->user();
        $user->password = bcrypt($request->new_password);
        $user->save();

        flash('<i class="fa fa-upload" aria-hidden="true"></i><span> La contraseña se modificó correctamente.</span>')->warning();
//        alert('Se cambió la contraseña con éxito');
        return redirect()->back();
    }
}
