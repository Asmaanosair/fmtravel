
@extends('layouts.site_lay')

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('site/images/about_background.jpg')}}"></div>
        <div class="home_content">
            <div class="home_title">@if(Config::get('app.locale') == 'en')
                    About Us
                @elseif(Config::get('app.locale') == 'ar')
                    من نحن

                @else
                    من نحن
                @endif</div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="intro_image"><img src="{{asset('img/'.$home->about_img)}}" alt="" width="400px"></div>
                </div>
                <div class="col-lg-5">
                    <div class="intro_content">
                        <div class="intro_title"> @if(Config::get('app.locale') == 'en')
                              About Us
                            @elseif(Config::get('app.locale') == 'ar')
                                                      من نحن

                            @else
                                من نحن
                            @endif</div>
                        <p class="intro_text">
                            @if(Config::get('app.locale') == 'en')
                              {{$home->about}}
                            @elseif(Config::get('app.locale') == 'ar')
                                {{$home->about_ar}}

                            @else
                                {{$home->about_ar}}
                            @endif

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop