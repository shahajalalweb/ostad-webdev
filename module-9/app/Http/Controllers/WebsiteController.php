<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        return view('home');
    }
    public function aboutMe(){
        return view('about_me');
    }
    public function project(){
        return view('project');
    }
    public function contact(){
        return view('contact');
    }
}
