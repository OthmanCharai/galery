@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="hero">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                class="vc_row vc_row-fluid vc_row-no-padding  margin-lg-10b">
                <div class="vc_column_container vc_col-sm-12 ">
                    <div class="vc_column-inner ">
                        <div>
                            <div class="swiper3-container carousel-albums" data-mouse="0" data-autoplay="5000" data-loop="1"
                                data-speed="1300" data-center="1" data-space="5">
                                <div class="swiper3-wrapper">
                                        @foreach($categories->images as $image)
                                            <div class="swiper3-slide">
                                            <div class="image-wrap swiper3-lazy"
                                                data-srcfull="{{$image->cover}}"
                                                data-background="{{ $image->cover }}">
                                                <div class="swiper3-lazy-preloader"></div>
                                                <div class="caption">
                                                    <a href="#" class="title"></a>
                                                    <div class="descr">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper3-pagination"></div>
                                <div class="swiper3-button-next"></div>
                                <div class="swiper3-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kswr-column-settings" data-minheight="0px" data-isminheight="off"
                    data-theclasses="kswr_pnone kswr_mnone kswr_bnone"></div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
            <div class="kswr-row-element-back" data-classes="kswr_pnone kswr_mnone kswr_bnone"></div>
            <div
                class=" vc_row vc_row-fluid  margin-lg-80t margin-lg-75b margin-sm-50t margin-sm-35b margin-xs-20t margin-xs-5b">
                <div class="vc_column_container vc_col-sm-12 ">
                    <div class="vc_column-inner ">
                        <div>
                            <div class="about-details style3">

                                <div class="content">
                                    <h5 class="subtitle">ABOUT ME</h5>
                                    <div class="text">
                                        <p>Every wedding day moment looks away thousands of untold emotions, thoughts, and
                                            memories that become priceless over time. I will work with you to guarantee that
                                            Your wedding photos and video capture your unique style &amp; vision while
                                            staying within or below budget.</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="kswr-column-settings" data-minheight="0px" data-isminheight="off"
                    data-theclasses="kswr_pnone kswr_mnone kswr_bnone"></div>
            </div>
            <div class="container kswr-row-element-back" data-classes="kswr_pnone kswr_mnone kswr_bnone"></div>
            <div class="">
                <div class="vc_column_container vc_col-sm-12 ">
                    <div class="vc_column-inner ">
                        <div>
                            <div class="pricing-gallery" data-thumb="true">
                                <span class="grid-sizer"></span>
                                @foreach($categories->images as $image)
                                    @foreach($image->media as $item)
                                <div class="images">
                                    <a href="{{$item->getUrl()}}" class="gallery-item ">
                                        <img data-lazy-src="{{$item->getUrl()}}"
                                            src="data:image/gif;base64,R0lGODdhAQABAIAAAAAAAMzMzCwAAAAAAQABAAACAkQBADs="
                                            class="s-img-switch" alt="Ultricies" /> <span class="hover-caption">
                                            <span class="caption"> Ultricies </span>
                                        </span>
                                    </a>
                                </div>
                                @endforeach
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="kswr-column-settings" data-minheight="0px" data-isminheight="off"
                    data-theclasses="kswr_pnone kswr_mnone kswr_bnone"></div>
            </div>
            <div class="kswr-row-element-back" data-classes="kswr_pnone kswr_mnone kswr_bnone"></div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-10t">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="about-details style3">

                                <div class="content">
                                    <h5 class="subtitle">WHAT DO CLIENTS SAY</h5>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="kswr-column-settings" data-minheight="0px" data-isminheight="off"
                    data-theclasses="kswr_pnone kswr_mnone kswr_bnone"></div>
            </div>
            <div class="kswr-row-element-back" data-classes="kswr_pnone kswr_mnone kswr_bnone"></div>
            <div class="vc_row vc_row-fluid  margin-lg-60b margin-xs-20b">
                <div
                    class="vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-offset-0 vc_col-md-12  margin-lg-45b">
                    <div class="vc_column-inner ">
                        <div>
                            <div class="twitter-slider">
                                <div class="flipster-slider" data-keyboard="0" data-mousewheel="1" data-controls="0">
                                    <div class="flipster-wrapp-outer">
                                        <ul class="flip-item twitter">
                                            <li>
                                                <div class="flow-item-slider">
                                                    <div class="twitter-wrapper ">
                                                        <span class="fa fa fa-twitter"></span>
                                                        <div class="twitter-wrap">

                                                            <img src="./assets/images/cHuicvOV.jpg" alt="">
                                                            <div class="name"> Andrew Filder </div>
                                                            <div class="slug"> @filder_muko </div>
                                                            <div class="description"> Nulla in quam faucibus est
                                                                sollicitudin suscipit ullamcorper eu turpis. Integer
                                                                pulvinar a sem et hendrerit. </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flow-item-slider">
                                                    <div class="twitter-wrapper ">
                                                        <span class="fa fa fa-quote-right"></span>
                                                        <div class="twitter-wrap">

                                                            <img src="./assets/images/ylIqVs2i.jpg" alt="">
                                                            <div class="name">
                                                                Brianna Kell </div>
                                                            <div class="slug">
                                                                @kell_brianaa </div>
                                                            <div class="description">
                                                                Suspendisse dignissim justo et lacus tempus, ac hendrerit
                                                                orci pharetra. Cras eget pharetra ipsum </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flow-item-slider">
                                                    <div class="twitter-wrapper ">
                                                        <span class="fa fa fa-twitter"></span>
                                                        <div class="twitter-wrap">

                                                            <img src="./assets/images/_L2KP89n.jpg" alt="">
                                                            <div class="name">
                                                                Andrew Filder </div>
                                                            <div class="slug">
                                                                @FilderAndrew </div>
                                                            <div class="description">
                                                                Nulla in quam faucibus est sollicitudin suscipit ullamcorper
                                                                eu turpis. Integer pulvinar a sem et hendrerit. Sed tempor
                                                                tincid accumsan. </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flow-item-slider">
                                                    <div class="twitter-wrapper ">
                                                        <span class="fa fa fa-quote-right"></span>
                                                        <div class="twitter-wrap">

                                                            <img src="./assets/images/8eTHE4-n.jpg" alt="">
                                                            <div class="name">
                                                                David Karletto </div>
                                                            <div class="slug">
                                                                @david_karletto </div>
                                                            <div class="description">
                                                                In hac habitasse platea dictumst. Aliquam eget est
                                                                tristique, mollis mi non, lobortis nibh. Nam mattis ultrices
                                                                pretium. </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flow-item-slider">
                                                    <div class="twitter-wrapper ">
                                                        <span class="fa fa fa-twitter"></span>
                                                        <div class="twitter-wrap">

                                                            <img src="./assets/images/tc35_6lI.jpg" alt="">
                                                            <div class="name">
                                                                Alisa Tinde </div>
                                                            <div class="slug">
                                                                @TindeAlisa </div>
                                                            <div class="description">
                                                                Pellentesque sed scelerisque odio. Nullam hendrerit
                                                                malesuada libero volutpat convallis. Fusce molestie gravida
                                                                pellentesque. Mauris firute. </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="kswr-column-settings" data-minheight="0px" data-isminheight="off"
                    data-theclasses="kswr_pnone kswr_mnone kswr_bnone"></div>
            </div>
            <div class="kswr-row-element-back" data-classes="kswr_pnone kswr_mnone kswr_bnone"></div>
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

                        <a href="/cdn-cgi/l/email-protection#eb9c83829191ab8e938a869b878ec5888486"
                            class="contact_url"><span class="__cf_email__"><span class="__cf_email__"
                                    data-cfemail="a8dfc0c1d2d2e8cdd0c9c5d8c4cd86cbc7c5">[email&#160;protected]</span></span></a>

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
                            <a href="#" target="_blank"><img
                                    src="./assets/images/21688994_1671483912895790_8046628998651838464_n.jpg"
                                    class="img-responsive img" alt=""></a>
                            <a href="#" target="_blank"><img
                                    src="./assets/images/21819745_1951787281711042_2151630520528666624_n.jpg"
                                    class="img-responsive img" alt=""></a>
                            <a href="#" target="_blank"><img
                                    src="./assets/images/21568962_1768928190072974_9179497670320848896_n.jpg"
                                    class="img-responsive img" alt=""></a>
                            <a href="#" target="_blank"><img
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
