<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "This is a home page";
    }

    public function aboutus(){
        $name = "niraj";
        $job = "teacher";
        return view('pages.about',compact('name','job'));
    }
}
