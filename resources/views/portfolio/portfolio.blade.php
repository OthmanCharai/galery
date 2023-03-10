@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="hero">
            <div class="vc_row vc_row-fluid  margin-sm-10t margin-sm-20b">
                <div class="vc_column_container vc_col-sm-12 ">
                    <div class="vc_column-inner ">
                        <div class="about-details style4">
                            <div class="content">
                                <h1 class="title">
                                    LEFT FILTER <br>
                                </h1>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="vc_row vc_row-fluid  margin-lg-40b">
                <div class="vc_column_container vc_col-sm-12  margin-lg-45b margin-sm-0b">
                    <div class="vc_column-inner ">
                        <div class="container-fluid albums-left-filter columns3" data-random="on">
                            <div class="row">
                                <div class="col-xs-12 col-md-2">
                                    <div class="button-group filters-button-group">
                                        <button data-filter="*" class="button is-checked">
                                            all
                                        </button>
                                        <button data-filter=".id3537" class="button">BLACK &#038; WHITE</button>
                                        <button data-filter=".id265" class="button">PORTRAITS</button>
                                        <button data-filter=".id2697" class="button">CITY</button>
                                        <button data-filter=".id3539" class="button">GIRLS</button>
                                        <button data-filter=".id3541" class="button">LANDSCAPE</button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-10">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio clearfix" data-thumb="true">

                                            @foreach($images as $image)
                                                @foreach($image->media as $item)

                                            <div class="element-item img-wrap-item id3537 item0">


                                                <a href="{{$item->getUrl()}}" class="gallery-item">
                                                    <img data-lazy-src="{{$item->getUrl()}}"
                                                        src="{{$item->getUrl()}}"
                                                        class="" alt="" /> </a>
                                            </div>
                                                @endforeach
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container-fluid">
        </div>
        <div class="container no-padd">
            <div class="widg clearfix">
                <div id="whizz_contact_widget-3" class="sidebar-item col-md-4 ContactWidget">
                    <div class="whizz-widget-contact">

                        <h3 class="contact_content">WHIZZ</h3>

                        <div class="contact_content">72 Keara Vista Suite 028, North Deonstad, FL 33068</div>

                        <a href="/cdn-cgi/l/email-protection#2b5c434251516b4e534a465b474e05484446"
                            class="contact_url"><span class="__cf_email__"
                                data-cfemail="6d1a050417172d08150c001d0108430e0200"><span class="__cf_email__"
                                    data-cfemail="c1b6a9a8bbbb81a4b9a0acb1ada4efa2aeac">[email&#160;protected]</span></span></a>

                        <a href="https://twitter.com/" class="fa fa-twitter"></a>

                        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>


                        <a href="https://www.behance.net/" class="fa fa-behance"></a>

                        <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>


                    </div>
                </div>
                <div id="instagram_widget-6" class="sidebar-item col-md-4 WhizzInstagramWidget">
                    <div class="quze-widget-user quze-widget-border-bottom">

                        <h3>MY INSTAGRAM</h3>
                        <div class="images-wrap clearfix">
                            <a href="https://www.instagram.com/p/BZBn7c9Bbuf/" target="_blank"><img
                                    src="./assets/images/21688994_1671483912895790_8046628998651838464_n.jpg"
                                    class="img-responsive img" alt=""></a>
                            <a href="https://www.instagram.com/p/BZBn7IlhEin/" target="_blank"><img
                                    src="./assets/images/21819745_1951787281711042_2151630520528666624_n.jpg"
                                    class="img-responsive img" alt=""></a>
                            <a href="https://www.instagram.com/p/BZBn5pZhJ1d/" target="_blank"><img
                                    src="./assets/images/21568962_1768928190072974_9179497670320848896_n.jpg"
                                    class="img-responsive img" alt=""></a>
                            <a href="https://www.instagram.com/p/BZBn4lGhm4u/" target="_blank"><img
                                    src="./assets/images/16906430_482575868781774_738470934502965248_n.jpg"
                                    class="img-responsive img" alt=""></a>
                        </div>
                        <span class="instagram-user">@edi_grand</span>

                    </div>
                </div>
                <div class="sidebar-item col-md-4 widget_text">
                    <h5>SUBSCRIBE</h5>
                    <div class="textwidget">
                        <p>Be notificated about free photoshoots!</p>
                        <div role="form" class="wpcf7" id="wpcf7-f4757-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form class="wpcf7-form" novalidate="novalidate">
                                <p><span class="wpcf7-form-control-wrap your-email"><input type="email"
                                            name="your-email" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required "
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Enter your email" /></span><input type="submit" value="Send"
                                        class="wpcf7-form-control wpcf7-submit" /></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
@endsection
@section('js')
@endsection
