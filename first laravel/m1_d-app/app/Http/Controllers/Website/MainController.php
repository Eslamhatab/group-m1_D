<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //Home Page
    public function home(){
        return view('website.pages.home');
    }

    public function about(){
        return view('website.pages.about');
    }

    public function contact(){
        return view('website.pages.contact');
    }
}
