<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        return view('front.home');
    }

    public function contact() {
        return view('front.contact');
    }

    public function services() {

    }
}
