@extends('layout')
@section('content')
       

{{-- banner_part start  --}}
<section class="banner_part">
<div class="container mt-5 mb-5 pt-5 pb-5">
<div class="row pt-5">
    <div class="mt-5 pt-5 text-center" data-aos="fade-right">
        <h1 class='white'>{{trans('messages.Our Services')}}</h1> 
       <p class='white'>{{trans('messages.Just Say The Word, We Can Do It All!')}}</p>          
   </div>
</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="sv">
   <path fill="rgb(224, 218, 218)" fill-opacity="555555.55"
     d="M0,64L40,74.7C80,85,160,107,240,144C320,181,400,235,480,218.7C560,203,640,117,720,96C800,75,880,117,960,138.7C1040,160,1120,160,1200,138.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
 </svg>
</section>

 {{-- banner_part ends  --}}


 {{-- services_part start  --}}

<section class="feature_part  pt-3 pb-5 ">
 <div class="container mb-5 pb-5">

  <div class=" text-center">
   <h4>{{trans('messages.What We Do')}} </h4> 
   <h2 class='color offerings'>{{trans('messages.Key Offerings')}}</h2>
    <p class='w-50 m-auto'>
        {{trans('messages.Our Key services include Social Media Marketing, Website , Search Engine Optimization & Search Engine Marketing and Content Development – Videography & Photography!')}} 
    </p>

<div class="row mt-5">
<div class="col-sm-6 col-xl-4">
<div class="single_feature">
   <div class="single_feature_part">
   <span class="single_feature_icon m-auto mb-5"><i class='fa-solid fa-desktop'></i></span>
       <h4>{{trans('messages.Website Development')}}</h4>
       <p class='text-start'>{{trans('messages.Website development services involve the creation, design, and implementation of websites. These services encompass a wide range of activities to build and launch functional, visually appealing, and user-friendly websites. Here are some common website development services.')}}</p>                        
       <div class='d-flex justify-content-end'>
       <a class="color fs-5 text-decoration-none" href={{url('/services/website')}}>{{trans('messages.Learn More')}}   <i class="fa-solid fa-arrow-right fs-5"></i></a>
       </div>
   </div>
</div>
</div>
<div class="col-sm-6 col-xl-4">
<div class="single_feature">
   <div class="single_feature_part">
       <span class="single_feature_icon m-auto mb-5"><i class="fa-solid fa-magnifying-glass"></i></span>
       <h4>{{trans('messages.SEO')}}</h4>
       <p class='text-start'>{{trans('messages.Our services are dedicated to enhancing a website\'s visibility and its organic (unpaid) positioning within search engine results pages. SEO endeavors to augment both the volume and quality of website traffic by refining multiple factors that search engines take into account during website ranking. Below, you\'ll find a selection of typical SEO services.')}}</p>
       <div class='d-flex justify-content-end'>
       <a class="color fs-5 text-decoration-none" href={{url('/services/seo')}}>{{trans('messages.Learn More')}}   <i class="fa-solid fa-arrow-right fs-5"></i></a>
       </div>
   </div>
</div>
</div>
<div class="col-sm-6 col-xl-4">
<div class="single_feature">
   <div class="single_feature_part">
       <span class="single_feature_icon m-auto mb-5"><i class="fa-regular fa-lightbulb"></i></span>
       <h4>{{trans('messages.Branding')}}</h4>
       <p class='text-start'>{{trans('messages.Branding services are dedicated to the development and cultivation of a robust and unified brand identity for businesses or individuals. Branding serves the essential purpose of setting a company or product apart from its competitors, thereby shaping a distinctive perception in the minds of customers. Here are a few typical branding services.')}} </p>
       <div class='d-flex justify-content-end'>
       <a class="color fs-5 text-decoration-none" href={{url('/services/brand')}}>{{trans('messages.Learn More')}}   <i class="fa-solid fa-arrow-right fs-5"></i></a>
       </div>
   </div>
</div>
</div>
<div class="col-sm-6 col-xl-4">
<div class="single_feature">
   <div class="single_feature_part">
       <span class="single_feature_icon m-auto mb-5"><i class="fa-solid fa-panorama"></i></span>
       <h4>{{trans('messages.Social Media Marketing')}}</h4>
       <p class='text-start'>{{trans('messages.Social Media Marketing Services encompass a variety of tactics and approaches utilized for the promotion of products, services, or brands on social media platforms. These services are typically offered by marketing agencies or experts who specialize in harnessing the power of social media channels to connect with and captivate a specific audience. Here is a selection of prevalent social media marketing services.')}} </p>
       <div class='d-flex justify-content-end'>
       <a class="color fs-5 text-decoration-none" href={{url('/services/social')}}>{{trans('messages.Learn More')}}   <i class="fa-solid fa-arrow-right fs-5"></i></a>
       </div>
   </div>
</div>
</div>
<div class="col-sm-6 col-xl-4">
<div class="single_feature">
   <div class="single_feature_part">
       <span class="single_feature_icon m-auto mb-5"><i class="fa-solid fa-mobile-screen-button"></i></span>
       <h4>{{trans('messages.Mobile Development')}}</h4>
       <p class='text-start'>{{trans('messages.Mobile application programming is the process of creating and developing programs designed to run on mobile devices that run on the Android or iPhone system, and constantly developing the efficiency of these programs to achieve the goal for which they were created, using one of the programming languages.')}} </p>
       <div class='d-flex justify-content-end'>
       <a class="color fs-5 text-decoration-none" href={{url('/services/mobile')}}>{{trans('messages.Learn More')}}   <i class="fa-solid fa-arrow-right fs-5"></i></a>
       </div>
   </div>
</div>
</div>
</div>
</div>
</div>
</section>
{{-- services_part ends  --}}
@endsection