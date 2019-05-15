<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
   public function index() {
       return view('frontend.home');
   }
   public function about() {
       return view('frontend.about');
    }
    public function course() {
        return view('frontend.course');
     }
     public function blog() {
        return view('frontend.blog');
     }
     public function blogsingle() {
        return view('frontend.blog-single');
     }
     public function contact() {
        return view('frontend.contact');
     }
     public function coursesingle() {
        return view('frontend.course-single');
     }
     public function events() {
      return view('frontend.events');
   }
}
