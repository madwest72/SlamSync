<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showSignUp(){
        if(Auth::check()){
            return redirect()->route('dashbord');
        }
        return view('auth.register');

    }
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'L\'adresse email ou le mot de passe est incorrect.', ])->onlyInput('email');
    }
    public function SignUp(Request $request){
        $request->validate([
            'name'=>'required|string|max:14',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
        Mail::to($user->email)->send(new WelcomeMail($user));
        return back()->with('success', 'Votre compte a bien été créé !');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}