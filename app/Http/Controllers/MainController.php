<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Product;
use App\Models\Price;

class MainController extends Controller
{
    
    // Admin dashboard
    public function index(){
       
        return view('backEnd.adminDashboard');
    }

    public function get_content(Request $request){
        $services = Service::all();
        $products = Product::all();
        $testimonials = Testimonial::all();
        $price = Price::get();
       
        $html = view("backEnd.$request->div_id",compact('services','products','testimonials','price'))->render();
        $response = array(
            "success" => true,
            "html" => $html
        );
        return json_encode($response);
    }

    // upload services
    public function uploadService(Request $request){

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ])->validate();

        $title = $request->title;
        $description = $request->description;
        $file = $request->image;
        $fileName = $file->getClientOriginalName();
        $file->storeAs('public/services',$fileName);
        
        
        $service = Service::create([
            'title' => $title,
            'description'=>$description,
            'image'=>$fileName
        ]);
        
        return redirect()->back();
    }

    //Update service
    public function updateService(Request $request){
        $id = $request->id;
      
       if($request->image){
           $file = $request->image;
           $fileName = $file->getClientOriginalName();
           $file->storeAs('public/services',$fileName);
            Service::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $fileName,
            ]);
       }else{
           Service::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
       }
       return redirect()->back();
        
    }

      //delete service
    public function deleteService(Request $request){
        $id = $request->id;
        Service::find($id)->delete();
        return;
    }

    //Upload products
    public function uploadProduct(Request $request){

        $validator = Validator::make($request->all(),[
            'title'=> 'required',
            'price' => 'required',
            'image' => 'required',
        ])->validate();

        $file = $request->image;
        $fileName = $file->getClientOriginalName();
        $file->storeAs('public/products',$fileName);
        $product = Product::create([
            'title' => $request->title,
            'image' => $fileName,
            'price' => $request->price,
            
        ]);

        return redirect()->back();

    }
    
    //Update Product
    public function updateProduct(Request $request){
        
        if($request->image){
            $file = $request->image;
            $fileName = $file->getClientOriginalName();
            $file->storeAs("public/products",$fileName);
            Product::find($request->id)->update([
                'title' => $request->title,
                'image' => $fileName,
                'price' =>$request->price,
            ]);

        }else{
            Product::find($request->id)->update([
                'title' => $request->title,
                'price' =>$request->price,
            ]);
        }
        return redirect()->back();
        
    }

    //Delete Product
    public function deleteProduct(Request $request){
        Product::find($request->id)->delete();
        return ;
    }
    //Update prices
    public function updatePrices(Request $request){
        // $validator = Validator::make($request->all(),[]);
       
        Price::find($request->id)->update([
            'basic' => $request->basic,
            'standard' => $request->standard,
            'premium' => $request->premium,
        ]);
      
        return redirect()->back();
    }

    // upload testimonials
    public function uploadTestimonial(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:20',
            'message' => 'required | max:200',
            'image' => 'required',
        ])->validate();
        
        $file = $request->image;
        $fileName = $file->getClientOriginalName();
       
        $file->storeAs('public/testimonials',$fileName);
        $testi = Testimonial::create([
            "name"=>$request->name,
            "description" => $request->message,
            "image" => $fileName,
        ]);

        return redirect()->back();
    }

    //update testimonial
    public function updateTestimonial(Request $request){
        $id = $request->id;

        if($request->image){
            $file = $request->image;
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/testimonials',$fileName);
            Testimonial::find($id)->update([
                'name' => $request->name,
                'description' => $request->message,
                'image' => $fileName,
            ]);

        }
        else{
            Testimonial::find($id)->update([
                'name' => $request->name,
                'description' => $request->message,
            ]);
        }
        
        return redirect()->back();
        
    }
    //delete testimonial
    public function deleteTestimonial(Request $request){
        $id =  $request->id;
        Testimonial::find($id)->delete();
        return redirect()->back();
    }

  
}
