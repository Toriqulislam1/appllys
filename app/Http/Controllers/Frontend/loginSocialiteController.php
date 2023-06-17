<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\customerLogin;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class loginSocialiteController extends Controller
{


    function redirect_provider(){
        return Socialite::driver('google')->redirect();
    }
    function provider_to_application(){
        $user = Socialite::driver('google')->user();

        if(customerLogin::where('email', $user->getEmail())->exists()){
            if(Auth::guard('customer')->attempt(['email'=>$user->getEmail(), 'password'=>'abc@123'])){
                return redirect('/');
            }
        }
        else{
            customerLogin::insert([
                'name'=>$user->getName(),
                'email'=>$user->getEmail(),
                'password'=>bcrypt('abc@123'),
                'created_at'=>Carbon::now(),
            ]);

            if(Auth::guard('customer')->attempt(['email'=>$user->getEmail(), 'password'=>'abc@123'])){
                return redirect('/');
            }
        }
    }

    function redirect_provider_facebook(){
        return Socialite::driver('facebook')->redirect();
    }
    function provider_to_application_facebook(){
        $user = Socialite::driver('facebook')->user();

        if(User::where('email', $user->getEmail())->exists()){
            if(Auth::attempt(['email'=>$user->getEmail(), 'password'=>'abc@123'])){
                return redirect('/');
            }
        }
        else{
            user::insert([
                'name'=>$user->getName(),
                'email'=>$user->getEmail(),
                'password'=>bcrypt('abc@123'),
                'created_at'=>Carbon::now(),
            ]);

            if(Auth::attempt(['email'=>$user->getEmail(), 'password'=>'abc@123'])){
                return redirect('/');
            }
        }
    }









}
