<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\MovingService;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function settings(){

        $setting =  Setting::first();
        return view('admin.settings',compact('setting'));
    }


    public function settings_store(Request $request){



        $is_exist  = Setting::first();
        if($is_exist){
            $setting = Setting::first();

            if($request->file('logo')){
                $file= $request->file('logo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('Image'), $filename);
                $setting['logo']= $filename;
            }

            // $setting->logo = $request->logo;
            $setting->address = $request->address;
            $setting->contact = $request->contact;
            $setting->email = $request->email;
            $setting->social_facebook = $request->social_facebook;
            $setting->social_instagram = $request->social_instagram;
            $setting->social_linkedin = $request->social_linkedin;
            $setting->save();

        }else{

            $setting = new Setting;
            if($request->file('logo')){
                $file= $request->file('logo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('Image'), $filename);
                $setting['logo']= $filename;
            }
            // $setting->logo = $request->logo;
            $setting->address = $request->address;
            $setting->contact = $request->contact;
            $setting->email = $request->email;
            $setting->social_facebook = $request->social_facebook;
            $setting->social_instagram = $request->social_instagram;
            $setting->social_linkedin = $request->social_linkedin;
            $setting->save();
        }
        return redirect()->back();
    }

    public function moving_index() {
        $moving_service = MovingService::get();
        return view('admin.moving_services.index',compact('moving_service'));
    }

    public function moving_create() {
        return view('admin.moving_services.create');
    }

    public function moving_store(Request $request) {

        $moving_service             = new MovingService;
        $moving_service->name       = $request->name;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $moving_service['image']= $filename;
        }
        // $moving_service->image       = $request->image;
        $moving_service->description     = $request->description;
        $moving_service->save();
        return redirect()->route('moving')->with('success','moving_service Create Successfully');

    }

    public function moving_edit($id) {

        $moving_service = MovingService::where('id',$id)->first();
        return view('admin.moving_services.edit',compact('moving_service'));
    }

    public function moving_update(Request $request,$id) {

        $moving_service             = MovingService::where('id',$id)->first();
        $moving_service->name       = $request->name;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $moving_service['image']= $filename;
        }
        $moving_service->description     = $request->description;
        $moving_service->save();

        return redirect()->route('moving')->with('success','moving_service Update Successfully');
    }

    public function moving_delete($id) {

        $moving_service = MovingService::where('id',$id)->delete();
        return redirect()->back();
    }
}
