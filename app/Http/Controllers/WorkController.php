<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function works(){
        return view('works');
    }

    public function web(){
        return view('works.Webdevelopment');
    }

    public function frontend(){
        return view('works.website.Frontend');
    }

    public function backend(){
        return view('works.website.Backend');
    }
}
