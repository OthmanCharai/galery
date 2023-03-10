<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Full Gallery - Whizz</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css" integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    @vite('resources/js/app.js')
</head>
<body class="page-template-default page page-id-332 wpb-js-composer js-comp-ver-5.4.5 vc_responsive">

<div class="preloader-svg">
    <svg id="loaderSvg" class="loader__svg" xmlns="http://www.w3.org/2000/svg" height="300" viewBox="0 0 1024 300">
        <defs>
            <pattern x="0" y="0" width="1024" height="686" patternUnits="userSpaceOnUse" id="pattern1"
                     viewBox="0 0 1024 300">
                <image xmlns:xlink="http://www.w3.org/1999/xlink"
                       xlink:href="./assets/images/stock-photo-189411801-1024x682.jpg"
                       preserveAspectRatio="none" x="0" y="-200" width="1024" height="686"></image>
            </pattern>
            <pattern x="0" y="0" width="1024" height="686" patternUnits="userSpaceOnUse" id="pattern2"
                     viewBox="0 0 1024 300">
                <image xmlns:xlink="http://www.w3.org/1999/xlink"
                       xlink:href="./assets/images/stock-photo-123105215-1024x682.jpg"
                       preserveAspectRatio="none" x="0" y="-200" width="1024" height="686"></image>
            </pattern>
            <pattern x="0" y="0" width="1024" height="686" patternUnits="userSpaceOnUse" id="pattern3"
                     viewBox="0 0 1024 300">
                <image xmlns:xlink="http://www.w3.org/1999/xlink"
                       xlink:href="./assets/images/stock-photo-138439815-1024x682.jpg"
                       preserveAspectRatio="none" x="0" y="-200" width="1024" height="686"></image>
            </pattern>
            <pattern x="0" y="0" width="1024" height="686" patternUnits="userSpaceOnUse" id="pattern4"
                     viewBox="0 0 1024 300">
                <image xmlns:xlink="http://www.w3.org/1999/xlink"
                       xlink:href="./assets/images/stock-photo-159062461-e1509005459415-1024x670.jpg"
                       preserveAspectRatio="none" x="0" y="-200" width="1024" height="686"></image>
            </pattern>
            <pattern x="0" y="0" width="1024" height="686" patternUnits="userSpaceOnUse" id="pattern5"
                     viewBox="0 0 1024 300">
                <image xmlns:xlink="http://www.w3.org/1999/xlink"
                       xlink:href="./assets/images/stock-photo-201395315-1024x682.jpg"
                       preserveAspectRatio="none" x="0" y="-200" width="1024" height="686"></image>
            </pattern>
        </defs>
        <text x="50%" y="20%" id="letter" dy="150"
              fill="url('#pattern1')">
            WHIZZ
        </text>
    </svg>
</div>

<div class="main-wrapper   padding-desc  padding-mob ">
    <div class="header_top_bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- HEADER -->
                    <header class="right-menu ">
                        <!-- LOGO -->
                        <a href="{{route('welcome')}}" class="logo">

                            <span>Gallery</span> </a>
                        <!-- /LOGO -->

                        <!-- MOB MENU ICON -->
                        <a href="#" class="mob-nav">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- /MOB MENU ICON -->

                        <!-- ASIDE MENU ICON -->
                        <a href="#" class="aside-nav">
                            <span class="aside-nav-line line-1"></span>
                            <span class="aside-nav-line line-2"></span>
                            <span class="aside-nav-line line-3"></span>
                        </a>
                        <!-- /ASIDE MOB MENU ICON -->

                        <!-- NAVIGATION -->
                        <nav id="topmenu" class="topmenu">
                            <ul class="menu">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mega-menu">
                                    <a href="{{route('welcome')}}">HOME</a>

                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu">
                                    <a href="{{route('wedding')}}">WEDDING</a>

                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="{{route('portfolio')}}">PORTFOLIO</a>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu">
                                    <a href="{{route('album')}}">PHOTOS</a>

                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="#">VIDEOS</a>
                                </li>
                                @guest
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="{{route('filament.auth.login')}}">Login</a>
                                    </li>
                                @endguest
                                @auth
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="{{route('filament.pages.dashboard')}}">Dashboard</a>
                                    </li>
                                @endauth
                            </ul>
                            <div class="f-right">
                                <div class="whizz-top-social">
                                    <span class="social-icon fa fa-share-alt"></span>
                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                    class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="mini-cart-wrapper">
                                    <a class="whizz-shop-icon fa fa-shopping-bag"
                                       title="View your shopping cart"></a>
                                    <div class="whizz_mini_cart">
                                        <ul class="cart_list product_list_widget">
                                            <li class="empty">No products in the cart.</li>
                                        </ul><!-- end product list -->
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- NAVIGATION -->
                        <a href="#" class="socials-mob-but">
                            <i class="fa fa-share-alt"></i>
                        </a>
                    </header>
                </div>
            </div>

        </div>
    </div>
    @yield('content')
</div>


    @yield('js')
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/anime.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/idangerous.swiper.min_.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flipster.min.js') }}"></script>
    <script src="{{ asset('assets/js/foxlazy.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easings.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.multiscroll.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="{{ asset('assets/js/kenburning.min.js') }}"></script>
    <script src="{{ asset('assets/js/equalHeightsPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fitvids.min.js') }}"></script>
    <script src="{{ asset('assets/js/zepto.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper3.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/fragment.js') }}"></script>
    <script src="{{ asset('assets/js/scrollMonitor.min.js') }}"></script>
    <script src="{{ asset('assets/js/slider-transition.min.js') }}"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="{{ asset('assets/lib/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/js/jquery.justifiedGallery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sliphover.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/thumbnails-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/pixi.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'7a04533e1bb82fa1',m:'kO3Tr2LR1vqut7.IO7x4ssqfqlTMEWRoTqLNtjUEeTQ-1677536609-0-AW/iyaSzNgzlPXeE77LJ5fUE2XDWiiKcJjC51t+exzUIlSSAHT7dvLfP4fGL1+DYKt26fXlsTIO3Qs2dLWE6+Awcwb3z5a5rTF0zULWbLc6AqHrSR5hLMwMbFM9R8vQKDNcGMZZDS1Lew5IGRsPgSOM=',s:[0x21089506ff,0xe45d97f963],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>
</html>
