<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\review;
use Carbon\Carbon;
class commentcontroller extends Controller
{
    public function commentStore(Request $request){

        comment::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),

        ]);

        return redirect()->back()->with('comment','your comment successfully post');
    }//end

    public function reviewStore(Request $request){
        
        review::insert([
            'product_id'=>$request->product_id,
            'review'=>$request->rating,
            'message'=>$request->comment,
            'user_id'=> auth()->guard('customer')->user()->id,
            'created_at'=>Carbon::now(),

        ]);

        return redirect()->back()->with('review','review successfully added');

    }//end
}
