<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Full Gallery - Whizz</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css" integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

    #context-menu {
        position: absolute;
        display: none;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        z-index: 1;
    }

    #context-menu ul {

    }

    #context-menu ul li {
        padding: 5px;
    }

    #context-menu ul li:hover {
        background-color: #f0f0f0;
    }

</style>


    @vite('resources/js/app.js')
</head>
<body class="page-template-default page page-id-332 wpb-js-composer js-comp-ver-5.4.5 vc_responsive">


<!-- Context menu -->
<div id="context-menu" class="col-1">
    <ul style=" list-style: none;
        margin: 0;
        padding: 0;">
        <li style=" padding: 5px;"><a id="like" style="text-decoration: none"  href=""><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 19.7501C11.8012 19.7499 11.6105 19.6708 11.47 19.5301L4.70001 12.7401C3.78387 11.8054 3.27072 10.5488 3.27072 9.24006C3.27072 7.9313 3.78387 6.6747 4.70001 5.74006C5.6283 4.81186 6.88727 4.29042 8.20001 4.29042C9.51274 4.29042 10.7717 4.81186 11.7 5.74006L12 6.00006L12.28 5.72006C12.739 5.25606 13.2857 4.88801 13.8883 4.63736C14.4909 4.3867 15.1374 4.25845 15.79 4.26006C16.442 4.25714 17.088 4.38382 17.6906 4.63274C18.2931 4.88167 18.8402 5.24786 19.3 5.71006C20.2161 6.6447 20.7293 7.9013 20.7293 9.21006C20.7293 10.5188 20.2161 11.7754 19.3 12.7101L12.53 19.5001C12.463 19.5752 12.3815 19.636 12.2904 19.679C12.1994 19.7219 12.1006 19.7461 12 19.7501ZM8.21001 5.75006C7.75584 5.74675 7.30551 5.83342 6.885 6.00505C6.4645 6.17669 6.08215 6.42989 5.76001 6.75006C5.11088 7.40221 4.74646 8.28491 4.74646 9.20506C4.74646 10.1252 5.11088 11.0079 5.76001 11.6601L12 17.9401L18.23 11.6801C18.5526 11.3578 18.8086 10.9751 18.9832 10.5538C19.1578 10.1326 19.2477 9.68107 19.2477 9.22506C19.2477 8.76905 19.1578 8.31752 18.9832 7.89627C18.8086 7.47503 18.5526 7.09233 18.23 6.77006C17.9104 6.44929 17.5299 6.1956 17.1109 6.02387C16.6919 5.85215 16.2428 5.76586 15.79 5.77006C15.3358 5.76675 14.8855 5.85342 14.465 6.02505C14.0445 6.19669 13.6621 6.44989 13.34 6.77006L12.53 7.58006C12.3869 7.71581 12.1972 7.79149 12 7.79149C11.8028 7.79149 11.6131 7.71581 11.47 7.58006L10.66 6.77006C10.3395 6.44628 9.95791 6.18939 9.53733 6.01429C9.11675 5.83919 8.66558 5.74937 8.21001 5.75006Z" fill="#000000"></path> </g></svg></a></li>
        <li style=" padding: 5px;"><a id="collection" style="text-decoration: none" href="#"><svg width="30px" height="30px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="0" y="0" width="24.00" height="24.00" rx="12" fill="" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.1" d="M3 9.312C3 4.93757 3.93757 4 8.312 4H9.92963C10.5983 4 11.2228 4.3342 11.5937 4.8906L12.4063 6.1094C12.7772 6.6658 13.4017 7 14.0704 7C15.9647 7 17.8145 7 19.1258 7C20.1807 7 21.0128 7.82095 21.0029 8.8758C21.0013 9.05376 21 9.20638 21 9.312V14.688C21 19.0624 20.0624 20 15.688 20H8.312C3.93757 20 3 19.0624 3 14.688V9.312Z" fill="#323232"></path> <path d="M3 9.312C3 4.93757 3.93757 4 8.312 4H9.92963C10.5983 4 11.2228 4.3342 11.5937 4.8906L12.4063 6.1094C12.7772 6.6658 13.4017 7 14.0704 7C15.9647 7 17.8145 7 19.1258 7C20.1807 7 21.0128 7.82095 21.0029 8.8758C21.0013 9.05376 21 9.20638 21 9.312V14.688C21 19.0624 20.0624 20 15.688 20H8.312C3.93757 20 3 19.0624 3 14.688V9.312Z" stroke="#323232" stroke-width="2"></path> <path d="M12 11L12 16" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14.5 13.5L9.5 13.5" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a></li>

    </ul>
</div>

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
