<!doctype html>
<html lang="en" dir="{{trans('messages.dir')}}">

<head>
  <meta charset="utf-8" text-align="{{trans('messages.text_align')}}">
  <meta name="keywords" content="website,company,programming,HTML,css.js,bootstrap,react,php,laravel">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ODIC</title>
        <link rel="icon" href="{{asset("assets/images/logo.png")}}">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<!-- style CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
{{-- <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/media.css')}}"> --}}

@if (session('lang')=='ar')
<link rel="stylesheet" href="{{asset('assets/css/indexar.css')}}">
@else
<link rel="stylesheet" href="{{asset('assets/css/indexen.css')}}">
@endif

<link rel="stylesheet" href="{{asset('assets/css/media.css')}}">

</head>

    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <div class="container">
            <a class="navbar-brand text-white text-italic me-5" to="#"><img src={{asset("assets/images/logo.png")}} width="40px" height="40px" alt="logo"/> ORIGINAL GOAL™ </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-white active" aria-current="page" href={{url("/")}}>{{trans('messages.Home')}}</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" href={{url("/about")}}>{{trans('messages.About')}}</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" href={{url("/works")}}>{{trans('messages.Works')}}</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" href={{url("/services")}}>{{trans('messages.Services')}}</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" href={{url("/contactus")}}>{{trans('messages.Contact US')}}</a>
                  </li>
   


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false" aria-expanded="true">
                        {{trans('messages.Languages')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="change/en">{{trans('messages.English')}}</a>
                        <a class="dropdown-item" href="change/ar"> {{trans('messages.Arabic')}}</a>
                    </div>
                </li>

                

                  {{-- <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" to={''}>English</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" to={''}>اللغة العربية</a>
                  </li>  --}}
                </ul>
              
              </div>
            </div>
    </nav>