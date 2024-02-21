<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services(){
        return view('Services');
    }

    public function website(){
        return view('services.Website');
    }
}
