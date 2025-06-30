<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function doLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'mdp'=>'required|min:4'
        ]);
        $infosperso = ['email'=>$request->input('email'),
            'mdp'=>$request->input('mdp')];
        if(Auth::attempt($infosperso)) {
            $request->session()->regenerate();
            return redirect()->route('auth.compte');
        }
        return to_route('login')->withErrors([
            'email'=> "Email non valide"
        ])->onlyInput(('email'));
    }
    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}
