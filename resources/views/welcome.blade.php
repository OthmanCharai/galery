@extends('layouts.layout')
@section('content')
    <!-- MAIN_WRAPPER -->
        <div class="container-full">
            <div class="hero">
                <div class="vc_row wpb_row vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12 ">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <!-- Row -->
                                <div class="container-fluid clearfix no-padd portfolio-single-content ">
                                    <div class="container-fluid clearfix no-padd">

                                        <div class="row gallery-single margin-xs-0b infinite_full_gallery"
                                            data-thumb="true">
                                            <div class="izotope-container-2">
                                                @foreach($categories as $category)

                                                <div class="fullwidth full-single item-single item{{$category->id}}">

                                                    <a href="{{$category->cover}}"
                                                        class="gallery-item s-back-switch">
                                                        <img data-lazy-src="{{$category->cover}}"
                                                            src="{{$category->cover}}"
                                                            class="s-img-switch" alt="Dreaming place" />
                                                        <div class="info-content">
                                                            <div class="vertical-align">
                                                                <h5>{{$category->name}}</h5>


                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
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
@endsection
