<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Product;
use App\Models\Price;
use App\Models\Booking;

class ClientController extends Controller
{
    public function index(){
        $services = Service::all();
        $testimonials = Testimonial::all();
        $price = Price::all();
        $products = Product::all();
        return view('index',compact('services','testimonials','price','products'));
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
        $price = Price::get();
        return view('product',compact('products','price'));
    }

    public function submitQuery(){
        return redirect('/contact');
    }

    public function productDetail(){
       return view('product_detail');
    }

    public function storeDetail(Request $request){
        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'size' => $request->size,
            'address' => $request->address,
            'status' => "Unpaid"
        ]);
        return redirect()->back();
    }

    public function myOrders(){
        $bookings = Booking::all();
        return view('my_orders',compact('bookings'));
    }
}
