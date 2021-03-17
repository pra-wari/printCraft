<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Product;
use App\Models\Price;

class AuthenticationController extends Controller
{
    public function index(){
        $user = Auth::user();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $price = Price::all();
        $products = Product::all();
        return view('dashboard',compact('services','testimonials','price','products'));
    }

    // public function registerUser(Request $request){
    //    $user = User::create([
    //        'name' => $request->name,
    //        'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'role' => 'client',
    //    ]);
    // }

    // public function login(){
    //     return view('login');
    // }

    // public function loginUser(Request $request){
    //     $user = User::where('email',$request->email)->first();
    //     if($user){
    //         $pass = $user->password;
    //         if($request->password == $pass){
    //             return redirect('/home');
    //         }
    //         else{
    //             return redirect('/login');
    //         }
    //     }
    //     else{
    //         return redirect('/login');
    //     }

    // }
}
