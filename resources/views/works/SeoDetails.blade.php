@extends('../layout')
@section('content')
       
       
      {{-- banner_part start  --}}
      <section class="banner_part">
        <div class="container mt-5 mb-5 pt-5 pb-5">
          <div class="row pt-5">
             <div class="mt-5 pt-5 text-center" data-aos="fade-right">
                  <h1 class='white'>{{ trans('messages.SEO') }}</h1> 
              </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="sv">
              <path fill="rgb(224, 218, 218)" fill-opacity="555555.55"
                d="M0,64L40,74.7C80,85,160,107,240,144C320,181,400,235,480,218.7C560,203,640,117,720,96C800,75,880,117,960,138.7C1040,160,1120,160,1200,138.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
      </section>
      
       {{--  banner_part ends  --}}
          
           {{-- seo_part starts  --}}
      
           <section class="feature_part  pt-5 pb-5 ">
      
          <div class="works my-5" id="works">
            <div class="container">
              <h1 class="text-center mb-4"> <span class="textColor">{{ trans('messages.SEO') }}</span></h1>
              <div class="row g-5 mt-5">
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/one.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://alsharq-parts.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://alsharq-parts.com/</h5>
                          <p class="text-dark px-2">{{trans('messages.This is Alsharq Website')}} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/two.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://MATGRONE.COM/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://MATGRONE.COM/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is MATGRONE Website') }}</p>
                        </div>
                      </a>
                    </div>
                </div>
      
      
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/three.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://lqtah.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://lqtah.com/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is lqtah Website') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/four.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://berushshop.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://berushshop.com/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is berushshop Website') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/five.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://falakz.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://falakz.com/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is falakz Website') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/six.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://fratozstore.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://fratozstore.com/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is fratozstore Website') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/seven.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://jolyexpress.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://jolyexpress.com/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is jolyexpress Website') }} </p>
                        </div>
                    </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/eight.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://roo7med.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://roo7med.com/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is roo7med Website') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/seo/nine.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://dahlizdesign.com/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">https://dahlizdesign.com/</h5>
                          <p class="text-dark px-2">{{ trans('messages.This is dahlizdesign Website') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
            </div>
            </div>
          </div>
            {{--  seo_part ends  --}}
      
      
          </section>
          
@endsection
