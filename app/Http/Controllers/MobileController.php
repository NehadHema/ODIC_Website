<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function mobile(){
        return view('services.Mobile');
    }
}
