<?php
namespace App\Http\Controllers;
use App\Models\Competition;
use App\Models\Lieu;
use App\Models\Spectateur;
use App\Models\Sport;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    public function createForm(){
        return view('register');
    }

    public function create(Request $request){
        /*$request->validate([
            'name' => 'required|alpha|max:40',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|alpha_num|min:4'
            
        ]);*/

            /*User::create([
            'name' => $request->input['name'],
            'email' => $request->input['email'],
            'password' => $request->input['password']]);*/

            $user = new User();
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = $request->get('mdp');
            $user->save();
            

            // $request->session()->flash('status', 'Inscription réussie !');

            //return redirect()->route('account');
           return "ok";
    }
    public function account(){
        return view('account');
    }

    public function formLogin(){
        return view('login');
    }
        public function connecter(Request $request){
        $request->validate([
        'email' => 'required|email',
        'password' => 'required|alpha_num'
        ]);
        $credentials = ['email' => $request->get('email'),
        'password' => $request->get('mdp')];

        if (Auth::attempt($credentials)) {
            //$request->session()->regenerate();
            //return redirect()->route('account');
            return "ok";
        }
        /*return back()->withErrors([
        'login' => 'Identifiants incorrects.',
        ]);*/
        
    }

    public function logout(Request $request){ Auth::logout();
        /*$request->session()->invalidate();
        $request->session()->regenerateToken()*/; 
        return redirect('/');
        }


    

    public function places(){
        $lieux = Lieu::all();
        return view('venues', ['lieux'=>$lieux]);
    }

    public function reservation(Request $request){
        $spectateur = new Spectateur();
        $spectateur->prenom = $request->get('prenom');
        $spectateur->nom = $request->get('nom');
        $spectateur->email = $request->get('email');
        $spectateur->telephone = $request->get('tel');
        $spectateur->save();
    }

    public function view(Request $request, $id) { 
        $c = Competition::findOrFail($id);
        $this->authorize('view',$c);
        return view('produits.single',['produit'=>$c]); 
    }
    public function delete(Request $request, $id){ $c = Competition::findOrFail($id);
        $this->authorize('delete',$c); $c->delete();
        return redirect('/'); 
    }

    public function aff_billets(){
        
            $sports = Sport::all();     
            return view('billets', ['sports'=>$sports]); 
    }

    public function competForm(){}
}
