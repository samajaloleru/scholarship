<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel !!!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $data = array(
            'title' => 'About Us',
            'about' => ['We want to know you', 'We want you to know us', 'let know eachother']
        );
        return view('pages.about')->with($data);
    }
    
    public function services() {
        $title = 'Service We Offer';
        return view('pages.services')->with('title', $title);
    }
}
