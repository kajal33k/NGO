<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\About;
use App\Models\Heading;
use App\Models\Sadhguru;
use App\Models\Container;
use App\Models\Video;
use App\Models\Gallery;
use App\Models\Card;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $banners = Banner::all();
        $abouts = About::all();
        $headings = Heading::all();
        $sadhgurus = Sadhguru::all();
        $containers = Container::all();
        $videos = Video::all();
        $galleries = Gallery::all();
        $cards = Card::all();
        $stories = Story::all();
        return view('front.index',compact('banners','abouts','headings','sadhgurus','containers','videos','galleries','cards','stories'));
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
