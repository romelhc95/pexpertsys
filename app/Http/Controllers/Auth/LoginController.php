<?php

namespace Tesis\Http\Controllers\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//use Illuminate\Routing\Redirector;
//use Illuminate\Support\Facades\Redirect;
//use Redirect;
use Session;
use Tesis\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
//        $this->middleware('guest', ['except' => 'logout']);
    }

    public function authenticated(Request $request, $user)
    {
        if ($request->user()->hasRole('agricultor')) {
            return redirect()->intended(route('user::home'))->with('message', 'Bienvenido al Sistema');
        }
        if ($request->user()->hasRole('admin')) {
            return redirect()->intended(route('admin::home'))->with('message', 'Bienvenido al Sistema');
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLogoutUser(){
        Auth::logout();
        Session::flush();
        flash('<i class="fa fa-sign-out" aria-hidden="true"></i><span> Cierre de sesión satisfactorio</span>')->error()->important();
        return redirect()->route('login');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLogoutAdmin(){
        Auth::logout();
        Session::flush();
        flash('<i class="fa fa-sign-out" aria-hidden="true"></i><span> Cierre de sesión satisfactorio</span>')->error()->important();
        return redirect()->route('login');
    }
}