<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDashboard(){
    return view('dashboard');
    }

    public function postSignUp(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:users', //vérifie que dans le champ email l'adresse mail rentrée n'existe pas déjà dans la bdd
            'first_name'=> 'required|max:120',
            'password' => 'required|min:4',
            ]);
             
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']); //password cripté lors de l'envoi

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();
        
        Auth::login($user);
        
        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request){
        $this->validate($request, [
            'email' => 'required|email', //vérifie que dans le champ email l'adresse mail rentrée n'existe pas déjà dans la bdd
            'password' => 'required',
            ]);
        
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}