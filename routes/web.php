<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GraphicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\SeoDetailsController;
use App\Http\Controllers\MarkettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);

Route::get('/works',[WorkController::class,'works']);
Route::get('/works/web',[WorkController::class,'web']);
Route::get('/works/web/frontend',[WorkController::class,'frontend']);
Route::get('/works/web/backend',[WorkController::class,'backend']);

Route::get('/services',[ServiceController::class,'services']);
Route::get('/services/website',[ServiceController::class,'website']);

Route::get('/services/seo',[SeoController::class,'seo']);
Route::get('/services/seo/seodetails',[SeoController::class,'seodetails']);
Route::get('/services/seo/marketing',[SeoController::class,'marketting']);

Route::get('/services/brand',[BrandingController::class,'branding']);
Route::get('/services/brand/graphics',[BrandingController::class,'graphics']);

Route::get('/services/social',[SocialController::class,'social']);

Route::get('/services/mobile',[MobileController::class,'mobile']);

Route::get('/contactus',[ContactController::class,'contactus']);


Route::get('change/{lang}',function($lang){
    if($lang == 'ar'){
        session()->put("lang","ar");
    }else{
        session()->put("lang","en");
    }
    return redirect()->back();
});


    Route::post('/email',[MailController::class,'sendEmail'])->name('send.email');  

  


