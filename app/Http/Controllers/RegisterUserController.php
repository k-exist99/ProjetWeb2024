<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterUserController extends Controller
{
    public function formRegister(){
        return view('register');
    }

    public function creer(Request $request){
        $request->validate([
            'nom'=>'required|string|max:50',
            'email'=>'required|string|max:30|unique:users',
            'mdp'=>'required|string|confirmed'
        ]);

        $user = new User();
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->mdp = Hash::make($request->mdp);
        $user->save();

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
