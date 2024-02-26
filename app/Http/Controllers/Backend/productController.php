<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Image;

class productController extends Controller
{
    public function productAdd(){

        return view('admin.product.addproduct');
    }//end

public function productStore(Request $request){

    $image = $request->file('main_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(660,450)->save('upload/product/image/'.$name_gen);
    $save_url_main_image = 'upload/product/image/'.$name_gen;

    $image = $request->file('thamble');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(370,190)->save('upload/product/thumbnail/'.$name_gen);
    $save_url_thamble = 'upload/product/thumbnail/'.$name_gen;





    product::insert([

        'name' => $request->name,
        'image' =>  $save_url_main_image,
        'price' => $request->price,
        'purchase' => $request->purchase,
        'demo_link' => $request->demo,
        'create_date' => $request->create_date,
        'Update_date' => $request->Update_date,
        'technology' => $request->technology,
        'tag' =>$request->tag,
        'title' => $request->title,
        'thumbnail' =>  $save_url_thamble,
        'short' => $request->short,
        'long_desp' => $request->long_desp,
        'yearly_charge' => $request->yearly_charge,


    ]);


    $notification = array(
        'message' => 'product Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);


    }//end

    public function productManage(){

        $products = product::latest()->get();
        return view('admin.product.manage',[
            'product'=>$products,
        ]);
    }//end

    public function productDelete($product_id){
      $product=  product::find($product_id);

        unlink($product->image);
        unlink($product->thumbnail);

        product::find($product_id)->delete();

        $notification = array(
			'message' => 'Portfolio Inserted Successfully',
			'alert-type' => 'success'
		);


        return back()->with($notification);
    }


}
