<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function seo(){
        return view('services.Seo');
    }

    public function seodetails(){
        return view('works.SeoDetails');
    }


    public function marketting(){
        return view('works.Marketting');
    }
}
