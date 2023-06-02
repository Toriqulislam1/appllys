<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Session;
use App\Models\customerLogin;

use Illuminate\Support\Facades\Auth;


class customerloginController extends Controller
{
    public function signup(){


        return view('frontend.customer.signup');
    }//end

    public function login(){
        return view('frontend.customer.login');
    }//end

    public function userStore(Request $request){

        // $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',
        //     'location' => 'required',
        //     'institute_name' => 'required',
        //     'password' => 'required|min:8',
        // ]);

        //  [
        //     'name.required' => 'Full name is required',
        //     'phone.required' => 'Phone number is required',
        //     'email.required' => 'Email is required',
        //     'location.required' => 'Location is required',
        //     'institute_name.required' => 'Institute name is required',
        //     'password' => 'Password is required',
        // ];



            if($request->password==$request->confirm_password){

                customerLogin::insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->phone,
                    'location' => $request->location,
                    'institute_name' => $request->institute_name,
                    'password' => bcrypt($request->confirm_password),
                      'created_at' => Carbon::now(),
                ]);

            }else{
                return back()->with('error_pass','your password does not match');
            }

        if(Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return view('frontend.customer.dashboard');
        }

    }//end

    public function loginCustomer(Request $request){

        if(Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password])){

            return view('frontend.customer.dashboard');
        }else{

            return view('frontend.customer.login');
        }

  }//end


public function deshboardUser(){

 return view('frontend.customer.dashboard');

}

public function logoutCustomer(){

    Session::flush();

    Auth::guard('customer')->logout();

    return redirect()->route('login.customer');


}





















}
