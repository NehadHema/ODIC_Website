@extends('../layout')
@section('content')
       
       
      {{-- banner_part start  --}}
      <section class="banner_part">
        <div class="container mt-5 mb-5 pt-5 pb-5">
          <div class="row pt-5">
             <div class="mt-5 pt-5 text-center" data-aos="fade-right">
                  <h1 class='white'>{{ trans('messages.Frontend') }}</h1> 
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
              <h1 class="text-center mb-4"> <span class="textColor">{{ trans('messages.Frontend Projects') }}</span></h1>
              <div class="row g-5 mt-5">
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/yummy.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/Reciepe-yummy-Website/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Reciepe-yummy Website')}}</h5>
                          <p class="text-dark px-2">{{trans('messages.This website was made by HTML , CSS ,Bootstrap and JQuery')}} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/coffee.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/Coffee/#home" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Coffee Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }}</p>
                        </div>
                      </a>
                    </div>
                </div>
      
      
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/faridagrocery.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/farida-grocery/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Farida Grocery Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/faridastore.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/e-commerce/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.E-Commerce Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , SCSS and JS') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/smart.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/Smart-System/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Simple Smart Login Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/bookmark.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/Bookmark-/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Site Bookmark Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/quote.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/random-quote/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Random Quotes Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                        </div>
                    </a>
                    </div>
                </div>
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/travel.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/Tour/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Tour Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                        </div>
                      </a>
                    </div>
                </div>
      
      
                <div class="col-md-4 col-sm-12 g-4 mb-3">
                    <div class="item bg-white text-left p-3 rounded-4">
                      <div class="image">
                        <img src={{asset('assets/images/worksdetails/frontend/res.png')}} class="w-100 rounded" alt="" srcset=""/>
                      </div>
                      <a style="text-decoration: none;" href="https://nehadhema.github.io/FaridaRestaurant/" target="_blank">
                        <div class="content">
                          <h5 class="p-2 textColor">{{trans('messages.Farida Restaurant Website')}}</h5>
                          <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                        </div>
                      </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 g-4 mb-3">
                  <div class="item bg-white text-left p-3 rounded-4">
                    <div class="image">
                      <img src={{asset('assets/images/worksdetails/frontend/res1.png')}} class="w-100 rounded" alt="" srcset=""/>
                    </div>
                    <a style="text-decoration: none;" href="https://nehadhema.github.io/Restaurant1/" target="_blank">
                      <div class="content">
                        <h5 class="p-2 textColor">{{trans('messages.Restaurant1 Website')}}</h5>
                        <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                      </div>
                    </a>
                  </div>
              </div>



              <div class="col-md-4 col-sm-12 g-4 mb-3">
                <div class="item bg-white text-left p-3 rounded-4">
                  <div class="image">
                    <img src={{asset('assets/images/worksdetails/frontend/res2.png')}} class="w-100 rounded" alt="" srcset=""/>
                  </div>
                  <a style="text-decoration: none;" href="https://nehadhema.github.io/Restaurant2/" target="_blank">
                    <div class="content">
                      <h5 class="p-2 textColor">{{trans('messages.Restaurant2 Website')}}</h5>
                      <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                    </div>
                  </a>
                </div>
            </div>


            <div class="col-md-4 col-sm-12 g-4 mb-3">
              <div class="item bg-white text-left p-3 rounded-4">
                <div class="image">
                  <img src={{asset('assets/images/worksdetails/frontend/res3.png')}} class="w-100 rounded" alt="" srcset=""/>
                </div>
                <a style="text-decoration: none;" href="https://nehadhema.github.io/Restaurant3/" target="_blank">
                  <div class="content">
                    <h5 class="p-2 textColor">{{trans('messages.Restaurant3 Website')}}</h5>
                    <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                  </div>
                </a>
              </div>
          </div>



          <div class="col-md-4 col-sm-12 g-4 mb-3">
            <div class="item bg-white text-left p-3 rounded-4">
              <div class="image">
                <img src={{asset('assets/images/worksdetails/frontend/grocery.png')}} class="w-100 rounded" alt="" srcset=""/>
              </div>
              <a style="text-decoration: none;" href="https://nehadhema.github.io/Grocery/" target="_blank">
                <div class="content">
                  <h5 class="p-2 textColor">{{trans('messages.Grocery Website')}}</h5>
                  <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and JS') }} </p>
                </div>
              </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 g-4 mb-3">
          <div class="item bg-white text-left p-3 rounded-4">
            <div class="image">
              <img src={{asset('assets/images/worksdetails/frontend/devfolio.png')}} class="w-100 rounded" alt="" srcset=""/>
            </div>
            <a style="text-decoration: none;" href="https://nehadhema.github.io/Bootstrap-Portfolio/" target="_blank">
              <div class="content">
                <h5 class="p-2 textColor">{{trans('messages.Portfolio Website')}}</h5>
                <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and Bootstrap') }} </p>
              </div>
            </a>
          </div>
      </div>


      <div class="col-md-4 col-sm-12 g-4 mb-3">
        <div class="item bg-white text-left p-3 rounded-4">
          <div class="image">
            <img src={{asset('assets/images/worksdetails/frontend/daniels.png')}} class="w-100 rounded" alt="" srcset=""/>
          </div>
          <a style="text-decoration: none;" href="https://nehadhema.github.io/Danils/" target="_blank">
            <div class="content">
              <h5 class="p-2 textColor">{{trans('messages.Danils Website')}}</h5>
              <p class="text-dark px-2">{{ trans('messages.This website was made by HTML , CSS and Bootstrap') }} </p>
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
