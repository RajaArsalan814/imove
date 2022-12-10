<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\MovingService;

class websiteController extends Controller
{
    public function main(){

        $setting = Setting::first();
        $moving_service = MovingService::get();
        return view('website.index',compact('setting','moving_service'));
    }
    public function about(){
        return view('website.about');
    }

    public function contact(){
        return view('website.contact');
    }

    public function locations(){
        return view('website.locations');
    }

    public function moving_services(){
        return view('website.moving-services');
    }

    public function testimonials(){
        return view('website.testimonials');
    }

}
