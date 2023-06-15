<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comment;
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
    }
}
