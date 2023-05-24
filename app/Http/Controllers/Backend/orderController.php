<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

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
    }

}
