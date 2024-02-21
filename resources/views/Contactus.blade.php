@extends('layout')
@section('content')

 {{-- banner_part start --}}
<section class="banner_part">
<div class="container mt-5 mb-5 pt-5 pb-5">
<div class="row pt-5">
  <div class="mt-5 pt-5 text-center" data-aos="fade-right">
       <h1 class='white'>{{trans('messages.Contact US')}}</h1>           
   </div>
</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="sv">
   <path fill="rgb(224, 218, 218)" fill-opacity="555555.55"
     d="M0,64L40,74.7C80,85,160,107,240,144C320,181,400,235,480,218.7C560,203,640,117,720,96C800,75,880,117,960,138.7C1040,160,1120,160,1200,138.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
 </svg>
</section>
 {{-- banner_part ends  --}}


 {{-- contact_part start  --}}
<section class="feature_part section_padding">
<div class="container">

<div class="row">
<div class="col-12">
 <h2 class="color">{{trans('messages.Get in Touch')}}</h2>
</div>
<div class="col-lg-8">
  @include('inc.error')

  @include('emails.welcome')
     
</div>
<div class="col-lg-4">
 <div class="media contact-info d-flex">
  @if (session('lang') == 'ar')
  <span class="contact-info__icon ms-5"><i class="fa-solid fa-house"></i></span>
  @else
  <span class="contact-info__icon"><i class="fa-solid fa-house"></i></span>
  @endif
   <div class="media-body">
     <h3>{{trans('messages.Egypt, Cairo')}} <br/>{{trans('messages.Egypt,Sohag')}}</h3>
   </div>
 </div>
 <div class="media contact-info d-flex">
   <span class="contact-info__icon"><i class="fa-solid fa-phone"></i></span>
   <div class="media-body">
     <h3>+201128152821</h3>
     <p></p>
   </div>
 </div>
 <div class="media contact-info d-flex">
   <span class="contact-info__icon"><i class="fa-solid fa-envelope"></i></span>
   <div class="media-body">
     <h3>info@original-goal.com</h3>
     <h5>{{trans('messages.Send us your query anytime!')}}</h5>
   </div>
 </div>
</div>
</div>
</div>
</section>
 {{-- contact_part ends  --}}

     
@endsection