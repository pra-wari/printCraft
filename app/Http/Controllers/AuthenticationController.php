<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthenticationController extends Controller
{
    public function index(){
        return view('register');
    }

    public function registerUser(Request $request){
       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client',
       ]);
    }

    public function login(){
        return view('login');
    }

    public function loginUser(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            $pass = $user->password;
            if($request->password == $pass){
                return redirect('/home');
            }
            else{
                return redirect('/login');
            }
        }
        else{
            return redirect('/login');
        }

    }
}
