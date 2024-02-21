<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandingController extends Controller
{
    public function branding(){
        return view('services.Branding');
    }

    public function graphics(){
        return view('works.Graphics');
    }
}
