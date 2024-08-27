<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //Home Page
    public function home(){
        return view('website.pages.home');
    }









    // Index
    public function index(){
        return view('parts.index');
    }

    //About Page
    public function about(){
        return view('parts.about');
    }
}
