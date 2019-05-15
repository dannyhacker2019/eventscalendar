<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show() 
    {
        return view('frontend.contact');
    }
    public function mail( ContactRequest $request)
    {
    return view('frontend.contact');
    }

}
