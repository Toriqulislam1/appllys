<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\favicon;
use App\Models\Seo;
use Carbon\Carbon;
use Image;

class SettingController extends Controller
{
    public function Setting(){

    	$setting = Setting::find(1);
    	return view('admin.setting.setting_update',compact('setting'));
    }


   public function UpdateSetting(Request $request){
    	
    	$setting_id = $request->id;
    	 

    	if ($request->file('logo')) {

    	 
    	$image = $request->file('logo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(220,80)->save('upload/logo/'.$name_gen);
    	$save_url = 'upload/logo/'.$name_gen;

	Setting::findOrFail($setting_id)->update([
		'phone_one' => $request->phone_one,
		'email' => $request->email,
		'company_name' => $request->company_name,
		'company_address' => $request->company_address,
		'facebook' => $request->facebook,
		'twitter' => $request->twitter,
		'linkedin' => $request->linkedin,
		'youtube' => $request->youtube,
		'instragram' => $request->instragram,
		'logo' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Setting Updated with Image Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    	}else{

    	Setting::findOrFail($setting_id)->update([
			'phone_one' => $request->phone_one,
			'email' => $request->email,
			'company_name' => $request->company_name,
			'company_address' => $request->company_address,
			'facebook' => $request->facebook,
			'twitter' => $request->twitter,
			'linkedin' => $request->linkedin,
			'youtube' => $request->youtube,
			'instragram' => $request->instragram,
		

    	]);

	    $notification = array(
			'message' => 'Setting Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    	} // end else 
    } // end method
	public function Favicon(){

    	$favicon = favicon::find(1);
    	return view('admin.setting.fav',compact('favicon'));
    }

	public function FavSetting(Request $request){
    	
    	$fav_id = $request->id;
    	 

    	$image = $request->file('fav');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(24,24)->save('upload/favicon/'.$name_gen);
    	$save_url = 'upload/favicon/'.$name_gen;

	favicon::findOrFail($fav_id)->update([
		'fav' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Favicon Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
	} // end

	public function SeoSetting(){

    	$seo = Seo::find(1);
    	return view('admin.setting.seo',compact('seo'));
    } //end

	public function SeoSettingUpdate(Request $request){

    	$seo_id = $request->id;

    	Seo::findOrFail($seo_id)->update([
		'meta_title' => $request->meta_title,
		'meta_author' => $request->meta_author,
		'meta_keyword' => $request->meta_keyword,
		'meta_description' => $request->meta_description,
		'google_analytics' => $request->google_analytics,		 

    	]);

	    $notification = array(
			'message' => 'Seo Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end mehtod 

}
