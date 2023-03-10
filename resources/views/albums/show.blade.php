@extends('layouts.layout')
@section('content')
    <div class="container clearfix no-padd portfolio-single-content margin-lg-30b ">
        <div class="row">
            <div class="col-xs-12">
            </div>
        </div>

        <div class="container clearfix no-padd ">
            <div class="gallery-single margin-lg-10b margin-xs-0b col-6" data-thumb="true" data-space="15">
                <div class="izotope-container">
                    <div id="lightgallery" class="grid-sizer"></div>

                    @foreach($image->media as $item)
                    <div class="modern item-single">

                        <a href="{{$item->getUrl()}}" class="gallery-item modern ">
                            <img data-lazy-src="{{$item->getUrl()}}"
                                 src="{{$item->getUrl()}}" class="" alt="Aenean " />
                            <div class="info-content">
                                <div class="vertical-align">
                                    <h5>{{$image->name}} </h5>
                                </div>
                            </div>
                        </a>

                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
@endsection

