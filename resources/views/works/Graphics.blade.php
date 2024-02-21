@extends('layout')
@section('content')
       
       
      {{-- banner_part start  --}}

      <section class="banner_part">
        <div class="container mt-5 mb-5 pt-5 pb-5">
        <div class="row pt-5">
         <div class="mt-5 pt-5 text-center" data-aos="fade-right">
              <h1 class='white'>{{trans('messages.Graphic Design')}}</h1> 
          </div>
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="sv">
          <path fill="rgb(224, 218, 218)" fill-opacity="555555.55"
            d="M0,64L40,74.7C80,85,160,107,240,144C320,181,400,235,480,218.7C560,203,640,117,720,96C800,75,880,117,960,138.7C1040,160,1120,160,1200,138.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
        </section>
        
         {{-- banner_part ends --}}
        
         {{-- seo_part starts  --}}
        
        <section class="feature_part  pt-5 pb-5 ">
        
        <div class="works mb-5" id="works">
        <div class="container">
          <h1 class="text-center mb-4"> <span class="textColor">{{trans('messages.Graphic Design')}}</span></h1>
          <div class="row g-5 mt-5">
          
            <div class="col-md-4 col-sm-12 g-4 mb-3">
                <div class="item bg-white text-left p-3 rounded-4">
                  <div class="image">
                    <img src={{asset('assets/images/photoshop/forager.png')}} class="w-100 rounded" alt="" srcset=""/>
                  </div>
                  <a style="text-decoration: none;" href="https://drive.google.com/file/d/1OTBE8-Jk9mZr7Fxf46wI9mZ4pDzLNx66/view?usp=drive_link" target="_blank">
                    <div class="content">
                      <h5 class="p-2 textColor">{{trans('messages.Forager Logos')}}</h5>
                    </div>
                  </a>
        
                 
                </div>
            </div>
        
        
            <div class="col-md-4 col-sm-12 g-4 mb-3">
                <div class="item bg-white text-left p-3 rounded-4">
                  <div class="image">
                    <img src={{asset('assets/images/photoshop/kait.png')}} class="w-100 rounded" alt="" srcset=""/>
                  </div>
                  <a style="text-decoration: none;" href="https://drive.google.com/file/d/1aOhuOq_NS-WKfE5U6Iratz6GYoxosi2A/view?usp=drive_link" target="_blank">
                    <div class="content">
                      <h5 class="p-2 textColor">{{trans('messages.Kait Logos')}}</h5>
                    </div>
                  </a>
                </div>
            </div>
        
        
            <div class="col-md-4 col-sm-12 g-4 mb-3">
                <div class="item bg-white text-left p-3 rounded-4">
                  <div class="image">
                    <img src={{asset('assets/images/photoshop/qau.png')}} class="w-100 rounded" alt="" srcset=""/>
                  </div>
                  <a style="text-decoration: none;" href="https://drive.google.com/file/d/1KCb859yla9tStpKng039FFH8KUibje4t/view?usp=drive_link" target="_blank">
                    <div class="content">
                      <h5 class="p-2 textColor">{{trans('messages.Qau Logos')}}</h5>
                    </div>
                  </a>
                </div>
            </div>
            
        
        
        
            <div class="col-md-4 col-sm-12 g-4 mb-3">
                <div class="item bg-white text-left p-3 rounded-4">
                  <div class="image">
                    <img src={{asset('assets/images/photoshop/proad.png')}} class="w-100 rounded" alt="" srcset=""/>
                  </div>
                  <a style="text-decoration: none;" href="https://drive.google.com/file/d/1JHb6vFLN199H-A4Sm307chxdxMLAqjZ4/view?usp=drive_link" target="_blank">
                    <div class="content">
                      <h5 class="p-2 textColor">{{trans('messages.ProadCast Logos')}}</h5>
                    </div>
                  </a>
                </div>
            </div>
        
            
        
            <div class="col-md-4 col-sm-12 g-4 mb-3">
                <div class="item bg-white text-left p-3 rounded-4">
                  <div class="image">
                    <img src={{asset('assets/images/photoshop/remotly.png')}} class="w-100 rounded" alt="" srcset=""/>
                  </div>
                  <a style="text-decoration: none;" href="https://drive.google.com/file/d/1ooIQQBwXxQNNKK9KcrBHtAI-hY2drhej/view?usp=drive_link" target="_blank">
                    <div class="content">
                      <h5 class="p-2 textColor">{{trans('messages.Remotly Logos')}}</h5>
                    </div>
                  </a>
                </div>
            </div>
        
            <div class="col-md-4 col-sm-12 g-4 mb-3">
                <div class="item bg-white text-left p-3 rounded-4">
                    <br />
                  <div class="image">
                    <img src={{asset('assets/images/photoshop/concept.png')}} class="w-100 rounded" alt="" srcset=""/>
                  </div>
                  <a style="text-decoration: none;" href="https://drive.google.com/file/d/1gnQPZSZnQ659ITdSPUGTd-faahnvZjg-/view?usp=drive_link" target="_blank">
                    <div class="content">
                      <h5 class="p-2 textColor">{{trans('messages.Apex Logos')}}</h5>
                    </div>
                  </a>
                </div>
            </div>
        
        
        </div>
        </div>
        </div>
         {{-- seo_part ends  --}}
        
        
        </section>
        
@endsection
