<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Auth;

class readysoftwareController extends Controller
{
    public function readysoftware(){

        $products = product::all();

        return view('frontend.software.software_view',compact('products'));
    }//end

    public function softwarePreview($id){

         $previews = product::find($id)->first();



        return view('frontend.software.software_preview',compact('previews'));
    }
    //end
     public function cartView(){
        return view('frontend.software.cart.cart_view');
     }//end

     function checkout($id){

        if (Auth::guard('customer')->check()){

            return view('frontend.software.cart.checkout',['productId'=>$id,]);
        }else{
            return redirect()->back()->with('buy','first login');
        }



     }//end



}
