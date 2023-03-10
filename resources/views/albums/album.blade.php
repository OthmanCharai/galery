@extends('layouts.layout')
@section('content')
    <div class="container-full no-padd">
        <div class="hero">
            <div class="portfolio-wrapper margin-lg-40b">
                <div class="portfolio l-more no-padd col-3 grid grid_modern clearfix" data-space="15">
                    <div class="col-sm-12  margin-lg-50b margin-sm-30b margin-xs-0b">
                        <div class="wpb_wrapper">
                            @foreach($images as $image)
                                @foreach($image->media as $item)
                                    <div class="item block_item_1 album-2">


                                        <a href="{{route('image.item.show',$image->id)}}" class="item-link gridrotate-alb default " target="_self">
                                            <div class="item-img">
                                                <div class="images-one">
                                                    <img data-lazy-src="{{$item->getUrl()}}"
                                                         src="{{$item->getUrl()}}"
                                                         class="s-img-switch" alt="" />
                                                </div>
                                            </div>
                                            <div class="item-overlay">
                                            </div>
                                        </a>
                                        <div class="item-portfolio-content port grid_modern">
                                            <h5 class="portfolio-title"><a href="#">{{$image->title}}</a>
                                            </h5>
                                            <div class="category">
                                                {{$image->category->name}}
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            @endforeach
                        </div>

                        <div class="text-center">
                            <button class="load-more button">
                                <span>load more<i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <span>loading...</span>
                            </button>
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

                        <a href="/cdn-cgi/l/email-protection#cfb8a7a6b5b58faab7aea2bfa3aae1aca0a2"
                            class="contact_url"><span class="__cf_email__"
                                data-cfemail="6d1a050417172d08150c001d0108430e0200"><span class="__cf_email__"
                                    data-cfemail="1d6a757467675d78657c706d7178337e7270">[email&#160;protected]</span></span></a>

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
