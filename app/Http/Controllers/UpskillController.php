<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpskillController extends Controller
{
    public function index() {
        return view('frontend.home');
    }
    public function about() {
        return view('frontend.about');
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function course() {
        return view('frontend.course');
    }
    public function news() {
        return view('frontend.news');
    }
    public function register() {
        return view('user.register');
    }
    public function singlecourse() {
        return view('frontend.sinlge-course');
    }
}
