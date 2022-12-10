<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function main(){
        return view('website.index');
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
