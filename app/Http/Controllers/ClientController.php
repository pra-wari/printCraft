<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Product;
use App\Models\Price;

class ClientController extends Controller
{
    public function index(){
        return redirect('/home');
    }

    public function home(){
        $services = Service::all();
        $testimonials = Testimonial::all();
        $price = Price::all();
        $products = Product::all();
        return view('dashboard',compact('services','testimonials','price','products'));
    }

    public function about(){
        $services = Service::all();
        $testimonials = Testimonial::all();
        return view('about',compact('services','testimonials'));
    }

    public function services(){
        $services = Service::all();
        $price = Price::all();
        return view('services',compact('services','price'));
    }

    public function contact(){
        return view('contact');
    }

    public function product(){
        $products = Product::all();
        $price = Price::find(1)->first();
        return view('product',compact('products','price'));
    }

    public function submitQuery(){
        return redirect('/contact');
    }
}
