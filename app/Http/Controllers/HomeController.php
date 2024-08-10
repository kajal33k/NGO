<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view('front.index');
    }
    public function about (){
        return view('front.about');
    }
    public function blog(){
        return view('front.blog');
    }
    public function gallery(){
        return view('front.gallery');
    }
    public function contact(){
        return view('front.contact');
    }
    public function food(){
        return view('front.food');
    }
    public function registration(){
        return view('front.registration');
    }
    public function read(){
        return view('front.read');
    }
    public function view(){
        return view('front.view');
    }
    public function login(){
        return view('front.login');
    }
    
    public function learn(){
        return view('front.learn');
    }

}
