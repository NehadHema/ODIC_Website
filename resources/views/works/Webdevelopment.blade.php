@extends('layout')
@section('content')
 {{-- banner_part start  --}}
 <section class="banner_part">
    <div class="container mt-5 mb-5 pt-5 pb-5">
      <div class="row pt-5">
         <div class="mt-5 pt-5 text-center" data-aos="fade-right">
              <h1 class='white'>{{trans('messages.Website Development')}}</h1>           
          </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="sv">
          <path fill="rgb(224, 218, 218)" fill-opacity="555555.55"
            d="M0,64L40,74.7C80,85,160,107,240,144C320,181,400,235,480,218.7C560,203,640,117,720,96C800,75,880,117,960,138.7C1040,160,1120,160,1200,138.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
  </section>
    {{-- banner_part ends --}}
   {{-- works_part start  --}}
   <section class="feature_part  pt-5 pb-5 ">
        <div class="container mb-5 pb-5">
            <h1 class="text-center mb-4"> <span class="textColor">{{trans('messages.Website Development')}}</span></h1>
          <div class="row mt-5 pt-5 d-flex justify-content-center">
      <div class="col-sm-6 col-xl-5">
      <div class="single_feature">
      <div class="single_feature_part">
        @if (session('lang')=='ar')
          <span class="single_feature_icon mb-5"><i class='fa-solid fa-desktop'></i></span>
          @else
          <span class="single_feature_icon"><i class='fa-solid fa-desktop'></i></span>
          @endif
         
          <a class='text-center fs-5 text-decoration-none' href={{url('/works/web/frontend')}}><h5>{{trans('messages.Frontend')}}</h5></a>
          </div>
      </div>
  </div>
  <div class="col-sm-6 col-xl-5">
      <div class="single_feature">
          <div class="single_feature_part">
            @if (session('lang')=='ar')
            <span class="single_feature_icon mb-5"><i class='fa-solid fa-magnifying-glass'></i></span>
            @else
            <span class="single_feature_icon"><i class='fa-solid fa-magnifying-glass'></i></span>
            @endif
    <a class='text-center fs-5 text-decoration-none' href="#" ><h5>{{trans('messages.Backend')}}</h5></a>

              {{-- <a class='text-center fs-5 text-decoration-none' href={{url('/works/web/backend')}} ><h5>{{trans('messages.Backend')}}</h5></a> --}}
          </div>
      </div>
  </div>
  
  </div>
  
        </div>
      </section>

@endsection