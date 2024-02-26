<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customerLogin;
class profileController extends Controller
{
    public function index(){
        return view('frontend.customer.user.profile.index');
    } //end
    public function passwordUpdate(Request $request){

        if($request->new_password==$request->confirm_password){


           $id = auth()->guard('customer')->user()->id;

           customerLogin::findOrFail($id)->update([

            'password' => bcrypt($request->confirm_password),

		]);
    }


    return back()->with('success','password update successfully');
}










}
