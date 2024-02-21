@extends('layout')
@section('content')
    {{-- banner_part start  --}}
    <div class="banner_part">
        <div class="container mt-5 mb-5 pt-5 pb-5">
            <div class="row pt-5">
                <div class="col-lg-6 col-xl-6" data-aos="fade-right">
                    <h1>{{ trans('messages.Making Your World Better') }}</h1>
                    <p class='white'>
                        {{ trans('messages.We are a company that specializes in E-marketing, website optimization for search engines, website design, application programming and advertising campaign management.') }}
                    </p>
                    <div class="d-flex justify-content-end mt-5 btn1">
                        <a href={{ url('/contactus') }} style="text-decoration: none;"
                            class="btn button m-auto">{{ trans('messages.Contact US') }}</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6" data-aos="fade-left">
                    <img src={{ asset('assets/images/company.jpg') }} alt="" srcset="" class='imgs img2' />
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="sv">
            <path fill="rgb(224, 218, 218)" fill-opacity="555555.55"
                d="M0,64L40,74.7C80,85,160,107,240,144C320,181,400,235,480,218.7C560,203,640,117,720,96C800,75,880,117,960,138.7C1040,160,1120,160,1200,138.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
        </section>
        {{-- banner_part ends  --}}



        {{-- feature_part start  --}}
        <section class="feature_part mb-5 pt-5 pb-5 ">
            <div class="container mb-5 pb-5">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>{{ trans('messages.Awesome Feature') }}</h2>
                        <p class='text-dark'>{{ trans('messages.we offer some services') }} </p>
                    </div>
                </div>
                <div class="row mt-5">

                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                @if (session('lang') == 'ar')
                                    <span class="single_feature_icon mb-5"><i
                                            class='fa-solid fa-desktop'></i></span>
                                @else
                                    <span class="single_feature_icon"><i class='fa-solid fa-desktop'></i></span>
                                @endif
                                <h4 class='text-center mt'>{{ trans('messages.Website Development') }}</h4>
                                <p>{{ trans('messages.Website development services involve the creation, design, and implementation of websites. These services encompass a wide range of activities to build and launch functional, visually appealing, and user-friendly websites. Here are some common website development services.') }}
                                </p>
                                <div class='d-flex justify-content-end'>
                                    <a class="color fs-5" style="text-decoration: none;"
                                        href={{ url('/services/website') }}>{{ trans('messages.Learn More') }} <i
                                            class="fa-solid fa-arrow-right fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                @if (session('lang') == 'ar')
                                    <span class="single_feature_icon mb-5"><i class='fa-solid fa-magnifying-glass'></i></span>
                                @else
                                    <span class="single_feature_icon"><i class='fa-solid fa-magnifying-glass'></i></span>
                                @endif
                                <h4 class='text-center'>{{ trans('messages.SEO') }}</h4>
                                <p>{{ trans('messages.Our services are dedicated to enhancing a website\'s visibility and its organic (unpaid) positioning within search engine results pages. SEO endeavors to augment both the volume and quality of website traffic by refining multiple factors that search engines take into account during website ranking. Below, you\'ll find a selection of typical SEO services.') }}
                                </p>
                                <div class='d-flex justify-content-end'>
                                    <a class="color fs-5" style="text-decoration: none;"
                                        href={{ url('/services/seo') }}>{{ trans('messages.Learn More') }} <i
                                            class="fa-solid fa-arrow-right fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                @if (session('lang') == 'ar')
                                    <span class="single_feature_icon ms-5 mb-5 span1"><i
                                            class='fa-regular fa-lightbulb'></i></span>
                                @else
                                    <span class="single_feature_icon ms-5 mb-5 span1"><i
                                            class='fa-regular fa-lightbulb'></i></span>
                                @endif
                                <h4 class='text-center'>{{ trans('messages.Branding') }}</h4>
                                <p>{{ trans('messages.Branding services are dedicated to the development and cultivation of a robust and unified brand identity for businesses or individuals. Branding serves the essential purpose of setting a company or product apart from its competitors, thereby shaping a distinctive perception in the minds of customers. Here are a few typical branding services.') }}
                                </p>
                                <div class='d-flex justify-content-end'>
                                    <a class="color fs-5" style="text-decoration: none;"
                                        href={{ url('/services/brand') }}>{{ trans('messages.Learn More') }} <i
                                            class="fa-solid fa-arrow-right fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                @if (session('lang') == 'ar')
                                    <span class="single_feature_icon ms-5 mb-5 span1"><i
                                            class='fa-solid fa-panorama'></i></span>
                                @else
                                    <span class="single_feature_icon ms-5 mb-5 span1"><i
                                            class='fa-solid fa-panorama'></i></span>
                                @endif
                                <h4 class='text-center'>{{ trans('messages.Social Media Marketing') }}</h4>
                                <p>{{ trans('messages.Social Media Marketing Services encompass a variety of tactics and approaches utilized for the promotion of products, services, or brands on social media platforms. These services are typically offered by marketing agencies or experts who specialize in harnessing the power of social media channels to connect with and captivate a specific audience. Here is a selection of prevalent social media marketing services.') }}
                                </p>
                                <div class='d-flex justify-content-end'>
                                    <a class="color fs-5" style="text-decoration: none;"
                                        href={{ url('/services/social') }}>{{ trans('messages.Learn More') }} <i
                                            class="fa-solid fa-arrow-right fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                @if (session('lang') == 'ar')
                                    <span class="single_feature_icon mb-5"><i
                                            class='fa-solid fa-mobile-screen-button'></i></span>
                                @else
                                    <span class="single_feature_icon"><i
                                            class='fa-solid fa-mobile-screen-button'></i></span>
                                @endif
                                <h4 class='text-center'>{{ trans('messages.Mobile Development') }}</h4>
                                <p>{{ trans('messages.Mobile application programming is the process of creating and developing programs designed to run on mobile devices that run on the Android or iPhone system, and constantly developing the efficiency of these programs to achieve the goal for which they were created, using one of the programming languages.') }}
                                </p>
                                <div class='d-flex justify-content-end'>
                                    <a class="color fs-5" style="text-decoration: none;"
                                        href={{ url('/services/mobile') }}>{{ trans('messages.Learn More') }} <i
                                            class="fa-solid fa-arrow-right fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end mt-5">
                    <a href={{ url('/services') }} style="text-decoration: none;"
                        class="btn button">{{ trans('messages.More Services') }}</a>
                </div>
            </div>
        </section>
        {{-- feature_part ends --}}

        {{-- about_part start  --}}
        <section class="banner_part">
            <div class="container mt-5 mb-5 pt-5 pb-5">
                <div class="row pt-5">
                    <div class="col-lg-6 col-xl-6" data-aos="fade-right">
                        <img src={{ asset('assets/images/home/about.png') }} alt="" srcset=""
                            class='aboutimage' width='90%' />
                    </div>

                    <div class="col-lg-6 col-xl-6" data-aos="fade-left">
                        <h1 class='text1'>{{ trans('messages.ABOUT US') }}</h1>
                        <p class='white'>
                            {{ trans('messages.Managing the digital ecosystem for your brand with a result driven approach! From Digital Media Buying, Campaign Development, Blogger Outreach Programs to Content Development, we do it all in-house.') }}
                        </p>
                        <div class="d-flex justify-content-end mt-5">
                            <a href={{ url('/about') }} class="btn button m-auto">{{ trans('messages.Read More') }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- about_part ends  --}}
    @endsection
