<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\trantion_number;
use Illuminate\Http\Request;
use Image;
class orderController extends Controller
{
    public function orderRequest(Request $request){

        order::insert([
			'product_id' => $request->product_id,
			'customer_id' => auth()->guard('customer')->user()->id,
      		'name' => $request->name,
			'email' => $request->email,
			'mobile' => $request->mobile,
      		'message' => $request->message,


		]);

		return redirect()->route('paymentCheckout');
    }//end

    public function checkoutPayment(){

        return view('admin.order.checkoutpayment');
    }//end

    public function PaymentBikash(){

        return view('admin.payment.bikash');
    }//end
    public function PaymentBikashTrantion(Request $request){



        $image = $request->file('biksah');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/trantion/'.$name_gen);
    	$save_url = 'upload/trantion/'.$name_gen;

        trantion_number::insert([
			'trantion_number' => $save_url,
			'user_id' => auth()->guard('customer')->user()->id,
		]);


        return view('admin.payment.paymentsuccess');
    }//end

    

}
