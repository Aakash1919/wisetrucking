<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        $active = 'home';
        return view('front.home',compact('active'));
    }

    public function contact() {
        $active = 'contact';
        return view('front.contact',compact('active'));
    }

    public function services() {
        $active = 'services';
        return view('front.service',compact('active'));
    }

    public function about() {
        $active = 'about';
        return view('front.about',compact('active'));
    }

}
