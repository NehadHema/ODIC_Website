@extends('layout')
@section('content')

{{--  banner_part start  --}}
<section class="banner_part">
  <div class="container mt-5 mb-5 pt-5 pb-5">
    <div class="row pt-5">
      <div class="mt-5 pt-5 text-center" data-aos="fade-right">
      <h1 class='white'>{{trans('messages.SEO')}}</h1> 
      <p class='white'>{{trans('messages.Just Say The Word, We Can Do It All!')}}</p>          
      </div>
    </div>
  </div>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 1440 320"
    class="sv"
  >
    <path
      fill="rgb(224, 218, 218)"
      fill-opacity="555555.55"
      d="M0,64L40,74.7C80,85,160,107,240,144C320,181,400,235,480,218.7C560,203,640,117,720,96C800,75,880,117,960,138.7C1040,160,1120,160,1200,138.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
    ></path>
  </svg>
</section>
 {{-- banner_part ends  --}}

 {{-- seo_part start  --}}
<section class="feature_part  pt-2 pb-5 ">
  <div class="container mb-5">
    <div class=" align-self-center">
      <div class="single_feature_text  mt-5 p-5">
        <h2 class="color">{{trans('messages.SEO')}}</h2>
        <p class="text-dark">{{trans('messages.Our services are dedicated to enhancing a website\'s visibility and its organic (unpaid) positioning within search engine results pages. SEO endeavors to augment both the volume and quality of website traffic by refining multiple factors that search engines take into account during website ranking. Below, you\'ll find a selection of typical SEO services.')}}
        </p>
      </div>
    </div>

    <section class="feature_part pb-1 ">
<div class="container mb-5 pt-5 pb-5">
<div class="row pt-5">
 <div class="col-lg-6 col-xl-6 mt-5" data-aos="fade-right">
      <h1 class='color'>{{trans('messages.Keyword Research')}}</h1>
      <p>{{trans('messages.Pinpointing pertinent keywords and phrases that align with what target audiences are actively searching for, aiming to enhance website content and elevate search engine rankings. This process encompasses in-depth analysis of factors such as search volume, competition, and user intent, in order to zero in on the most impactful keywords.')}}</p>      
  </div>
  <div class="col-lg-6 col-xl-6 pt-2 mt-2" data-aos="fade-left">
  <img src={{asset('assets/images/services/seo/research.jpg')}} alt="" srcset="" class='aboutimage rounded-3' width='90%' />
  </div>
</div>
</div>
    </section>

    <section class="feature_part  pt-3 pb-1 ">
<div class="container mb-5 pb-5">
  <div class="row pt-5">
    <div class="col-lg-6 col-xl-6 pt-5 mt-3" data-aos="fade-right">
     <img src={{asset('assets/images/services/seo/enhance.jpg')}} alt="" srcset="" class='aboutimage rounded' width='90%' height='95%' />
    </div>

    <div class="col-lg-6 col-xl-6 mt-5 pt-5" data-aos="fade-left">
    <h1 class='color'>{{trans('messages.Enhancing On-Page Elements')}}</h1>
      <p>{{trans('messages.Enhancing several website elements to increase its search engine friendliness. This encompasses the optimization of meta tags (such as title tags and meta descriptions), headings, URLs, and content structure. Additionally, it involves refining keyword utilization, internal linking, optimizing images, and enhancing website loading speed.')}}</p>           
    </div>
  </div>
</div>
</section>

<section class="feature_part pb-1 ">
<div class="container mt-5 mb-5 pt-2 pb-5">
<div class="row pt-5">
 <div class="col-lg-6 col-xl-6 mt-5" data-aos="fade-right">
      <h1 class='color'>{{trans('messages.Technical SEO')}}</h1>
      <p>{{trans('messages.Enhancing the technical facets of a website to enhance search engine crawling and indexing. This encompasses optimizing website structure, XML sitemaps, robots.txt files, integrating schema markup, ensuring mobile compatibility, and rectifying issues like broken links or duplicate content.')}}</p>      
  </div>
  <div class="col-lg-6 col-xl-6 " data-aos="fade-left">
     <img src={{asset('assets/images/services/seo/technical.jpg')}} alt="" srcset="" class='aboutimage rounded' width='90%' height='90%'/>
  </div>
</div>
</div>
</section>
  </div>
</section>
{{-- seo_part ends  --}}
@endsection