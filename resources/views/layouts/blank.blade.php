<!DOCTYPE html>
<html class="pixel-ratio-3 retina android android-5 android-5-0">
<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="Gigaland - NFT Marketplace Website Template" name="description"/>
    <meta content="" name="keywords"/>
    <meta content="" name="author"/>
    <!-- CSS Files
    ================================================== -->

    <link id="bootstrap" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link id="bootstrap-grid" href="{{asset('css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css"/>
    <link id="bootstrap-reboot" href="{{asset('css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/jquery.countdown.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <!-- color scheme -->
    <link id="colors" href="{{asset('css/colors/scheme-02.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/coloring.css')}}" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="wrapper">

    <!-- header begin -->
    <header class="transparent @yield('header-class')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="/">
                                        <img alt="" class="logo" src="{{asset('/images/logo-light.png')}}"/>
                                        <img alt="" class="logo-2" src="{{asset('/images/logo.png')}}"/>
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col">
                                <input id="quick_search" class="xs-hide" name="quick_search"
                                       placeholder="search item here..." type="text"/>
                            </div>
                        </div>
                        <div class="de-flex-col header-col-mid">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu">
                                <li>
                                    <a href="index.html">Home<span></span></a>
                                    <ul>
                                        <li><a href="03_grey-index.html">New: Homepage Grey</a></li>
                                        <li><a href="index.html">Homepage 1</a></li>
                                        <li><a href="index-2.html">Homepage 2</a></li>
                                        <li><a href="index-3.html">Homepage 3</a></li>
                                        <li><a href="index-4.html">Homepage 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="explore.html">Explore<span></span></a>
                                    <ul>
                                        <li><a href="explore.html">Explore</a></li>
                                        <li><a href="explore-2.html">Explore 2</a></li>
                                        <li><a href="collection.html">Collections</a></li>
                                        <li><a href="item-details.html">Item Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pages<span></span></a>
                                    <ul>
                                        <li><a href="author.html">Author</a></li>
                                        <li><a href="wallet.html">Wallet</a></li>
                                        <li><a href="create.html">Create</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="login-2.html">Login 2</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/notice/index">Activity<span></span></a>
                                </li>
                                <li>
                                    <a href="#">Elements<span></span></a>
                                    <ul>
                                        <li><a href="icons-elegant.html">Elegant Icons</a></li>
                                        <li><a href="icons-etline.html">Etline Icons</a></li>
                                        <li><a href="icons-font-awesome.html">Font Awesome Icons</a></li>
                                        <li><a href="accordion.html">Accordion</a></li>
                                        <li><a href="alerts.html">Alerts</a></li>
                                        <li><a href="counters.html">Counters</a></li>
                                        <li><a href="modal.html">Modal</a></li>
                                        <li><a href="popover.html">Popover</a></li>
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="progress-bar.html">Progress Bar</a></li>
                                        <li><a href="tabs.html">Tabs</a></li>
                                        <li><a href="tooltips.html">Tooltips</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">{{ config('app.locales')[\Illuminate\Support\Facades\App::getLocale()]}}
                                        <span></span></a>
                                    <ul>
                                        @foreach(config('app.locales') as $lang => $language)
                                            @if($lang != \Illuminate\Support\Facades\App::getLocale())
                                                <li><a href="{{ route('lang.change',$lang) }}">{{$language}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                            <div class="menu_side_area">
                                <a href="wallet.html" class="btn-main"><i class="icon_wallet_alt"></i><span>Connect Wallet</span></a>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
    <!-- content begin -->
    @section('content')

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>General</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Build</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Technology</h5>
                            <ul>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Roadmap</a></li>
                                <li><a href="#">Token</a></li>
                                <li><a href="#">Telemetry</a></li>
                                <li><a href="#">Lightpaper</a></li>
                                <li><a href="#">Whitepaper</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Community</h5>
                            <ul>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Mailing List</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post"
                                  name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe"
                                           placeholder="enter your email" type="text"/> <a href="#"
                                                                                           id="btn-subscribe"><i
                                            class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        <img alt="" class="f-logo" src="{{asset('images/logo.png')}}" /><span class="copy">&copy; Copyright 2021 - Gigaland by Designesia</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    @show
</div>
</body>
<!-- Javascript Files
  ================================================== -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
<script src="{{asset('js/enquire.min.js')}}"></script>
<script src="{{asset('js/jquery.plugin.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/jquery.countdown.js')}}"></script>
<script src="{{asset('js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('js/jquery.lazy.plugins.min.js')}}"></script>
<script src="{{asset('js/particles.js')}}"></script>
<script src="{{asset('js/particles-settings-2.js')}}"></script>

<script src="{{asset('js/designesia.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
@yield('myjs')
</html>
