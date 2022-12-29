<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return view('about');
    }
    public function index1(){
        return view('contact');
    }
}
