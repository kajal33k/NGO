<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function contactform(Request $request){
        // dd(request());
        Mail::to('2005050100024kajal@gmail.com')->send(new ContactMail(request()));
        return redirect('contact');
    }
}
