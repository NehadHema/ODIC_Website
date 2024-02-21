
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container p-5">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-6 col-xl-6">
                    <div class="single-footer-widget footer_1 pt-5">
                        <h3>
                        <a class="navbar-brand text-white text-italic me-5" to="#"><img src={{asset("assets/images/logo.png")}} width="80px" height="80px" alt="logo"/> ORIGINAL GOAL™ </a>
                        </h3>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-6 col-xl-6">
                    <div class="single-footer-widget footer_2 ps-5">
                        <h2 class='white'>{{trans('messages.Contact US')}}</h2>
                        <div class="contact_info">
                            <p class='white'><span>{{trans('messages.Address')}}  :</span> {{trans('messages.Egypt, Cairo')}} <br/>{{trans('messages.Egypt,Sohag')}} </p>
                            <p class='white'><span>{{trans('messages.Phone')}}  :</span> +201128152821</p>
                            <p class='white'><span> {{trans('messages.Email')}} : </span> info@original-goal.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid copyright pt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">{{trans('messages.Copyright ©2023 All rights reserved')}}</p>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>