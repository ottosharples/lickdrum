<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
    	return view('beats');
    }

    public function beat() {
    	return view('beat');
    }

    public function about() {
    	return view('about');
    }
}
