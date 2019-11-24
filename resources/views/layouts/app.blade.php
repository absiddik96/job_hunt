<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Job Hunt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-grid.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/chosen.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/colors/colors.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('font-awesome/4.5.0/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}">

</head>
<body>

<div class="page-loading">
    <img src="{{ asset('frontend/images/loader.gif') }}" alt=""/>
</div>

<div class="theme-layout" id="scrollup">

    <div class="responsive-header">
        <div class="responsive-menubar">
            <div class="res-logo"><a href="{{ route('frontend.home') }}" title=""><img src="{{ asset('frontend/images/resource/logo.png') }}" alt=""/></a></div>
            <div class="menu-resaction">
                <div class="res-openmenu">
                    <img src="{{ asset('frontend/images/icon.png') }}" alt=""/> Menu
                </div>
                <div class="res-closemenu">
                    <img src="{{ asset('frontend/images/icon2.png') }}" alt=""/> Close
                </div>
            </div>
        </div>
        <div class="responsive-opensec">
            @if (auth()->check())
                @if (auth()->user()->user_role == 'advertiser')
                    @include('include.header._advertiser')
                @elseif (auth()->user()->user_role == 'candidate')
                    @include('include.header._candidate')
                @endif
            @else
                <div class="btn-extars">
                    <a href="{{ route('register.advertiser') }}" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
                    <ul class="account-btns">
                        <li><a href="{{ route('sign-up.candidate') }}" title=""><i class="la la-key"></i> Sign Up</a></li>
                        <li><a href="{{ route('login') }}" title=""><i class="la la-external-link-square"></i> Login</a></li>
                    </ul>
                </div><!-- Btn Extras -->
            @endif
            <div class="responsivemenu">
                @include('include.header._menu')
            </div>
        </div>
    </div>

    <header class="white">
        <div class="menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('frontend.home') }}" title=""><img class="hidesticky" src="{{ asset('frontend/images/resource/logo10.png') }}" alt=""/><img class="showsticky" src="{{ asset('frontend/images/resource/logo10.png') }}" alt=""/></a>
                </div><!-- Logo -->
                @if (auth()->check())
                    @if (auth()->user()->user_role == 'advertiser')
                        @include('include.header._advertiser')
                    @elseif (auth()->user()->user_role == 'candidate')
                        @include('include.header._candidate')
                    @endif
                @else
                    <div class="btn-extars">
                        <a href="{{ route('register.advertiser') }}" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
                        <ul class="account-btns">
                            <li><a href="{{ route('sign-up.candidate') }}" title=""><i class="la la-key"></i> Sign Up</a></li>
                            <li><a href="{{ route('login') }}" title=""><i class="la la-external-link-square"></i> Login</a></li>
                        </ul>
                    </div><!-- Btn Extras -->
                @endif
                <nav>
                    @include('include.header._menu')
                </nav><!-- Menus -->
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="about_widget">
                                <div class="logo">
                                    <a href="" title=""><img src="{{ asset('frontend/images/resource/logo.png') }}" alt=""/></a>
                                </div>
                                <span>Collin Street West, Victor 8007, Australia.</span>
                                <span>+1 246-345-0695</span>
                                <span><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="41282f272e012b2e2329342f356f222e2c">[email&#160;protected]</a></span>
                                <div class="social">
                                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="#" title=""><i class="fa fa-behance"></i></a>
                                </div>
                            </div><!-- About Widget -->
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <h3 class="footer-title">Frequently Asked Questions</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="#" title="">Privacy & Seurty </a>
                                        <a href="#" title="">Terms of Serice</a>
                                        <a href="#" title="">Communications </a>
                                        <a href="#" title="">Referral Terms </a>
                                        <a href="#" title="">Lending Licnses </a>
                                        <a href="#" title="">Disclaimers </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" title="">Support </a>
                                        <a href="#" title="">How It Works </a>
                                        <a href="#" title="">For Employers </a>
                                        <a href="#" title="">Underwriting </a>
                                        <a href="#" title="">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 column">
                        <div class="widget">
                            <h3 class="footer-title">Find Jobs</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="#" title="">US Jobs</a>
                                        <a href="#" title="">Canada Jobs</a>
                                        <a href="#" title="">UK Jobs</a>
                                        <a href="#" title="">Emplois en Fnce</a>
                                        <a href="#" title="">Jobs in Deuts</a>
                                        <a href="#" title="">Vacatures China</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="download_widget">
                                <a href="#" title=""><img src="{{ asset('frontend/images/resource/dw1.png') }}" alt=""/></a>
                                <a href="#" title=""><img src="{{ asset('frontend/images/resource/dw2.png') }}" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
            <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
        </div>
    </footer>

</div>
<script src="{{ asset('frontend/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/parallax.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/select-chosen.js') }}" type="text/javascript"></script>
<!-- Include Date Range Picker -->
<script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script>
    $(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    });
</script>
<script src="{{ asset("sweetalert2/dist/sweetalert2.min.js") }}"></script>
@if(Session::get('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'success',
            title: "{{ Session::get('success') }}"
        })
    </script>
@endif
@if(Session::get('info'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'info',
            title: "{{ Session::get('info') }}"
        })
    </script>
@endif
</body>
</html>

