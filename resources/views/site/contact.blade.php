
@extends('layouts.site_lay')

@section('content')

    <div class="home" style='background-image: url("{{asset('site/images/contact_background.jpg')}}")'>
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('site/images/contact_background.jpg')}}"></div>
        <div class="home_content">
            <div class="home_title"> @if(Config::get('app.locale') == 'en')
                    Contact Us
                @elseif(Config::get('app.locale') == 'ar')
                    اتصل بنا

                @else
                    اتصل بنا
                @endif</div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Contact Form -->
                    <div class="contact_form_container">
                        <div class="contact_title text-center">
                            @if(Config::get('app.locale') == 'en')
                                Contact Us
                            @elseif(Config::get('app.locale') == 'ar')
                                اتصل بنا

                            @else
                                اتصل بنا
                            @endif</div>
                        <form action="#" id="contact_form" class="contact_form text-center">
                            <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                            <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                            <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <!-- About - Image -->

                    <div class="about_image">
                        <img src="{{asset('site/images/man.png')}}" alt="">
                    </div>

                </div>

                <div class="col-lg-4">

                    <!-- About - Content -->

                    <div class="about_content">
                        <div class="logo_container about_logo">
                            <div class="logo"><a href="#"><img src="{{asset('img/'.$home->logo)}}" alt=""> @if(Config::get('app.locale') == 'en')
                                        {{$home->site}}
                                    @elseif(Config::get('app.locale') == 'ar')
                                        {{$home->site_ar}}

                                    @else
                                        {{$home->site_ar}}
                                    @endif</a></div>
                        </div>
{{--                        <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>--}}
                        <ul class="about_social_list">

                            <li class="about_social_item"><a href="{{$con->fb}}"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="about_social_item"><a href="{{$con->tw}}"><i class="fa fa-twitter"></i></a></li>
                            <li class="about_social_item"><a href="{{$con->wh}}"><i class="fa fa-whatsapp"></i></a></li>
{{--                            <li class="about_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>--}}
                        </ul>
                    </div>

                </div>

                <div class="col-lg-3">

                    <!-- About Info -->

                    <div class="about_info">
                        <ul class="contact_info_list">
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="{{asset('site/images/placeholder.svg')}}" alt=""></div></div>
                                <div class="contact_info_text"> @if(Config::get('app.locale') == 'en')
                                        {{$con->address}}
                                    @elseif(Config::get('app.locale') == 'ar')
                                        {{$con->des}}

                                    @else
                                        {{$con->des}}
                                    @endif</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="{{asset('site/images/phone-call.svg')}}" alt=""></div></div>
                                <div class="contact_info_text">{{$con->phone}}</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="{{asset('site/images/message.svg')}}" alt=""></div></div>
                                <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">{{$con->email}}</a></div>
                            </li>
{{--                            <li class="contact_info_item d-flex flex-row">--}}
{{--                                <div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>--}}
{{--                                <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>--}}
{{--                            </li>--}}
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Google Map -->

    <div class="travelix_map">
        <div id="google_map" class="google_map">
            <div class="map_container">
                <div id="map"><iframe src="{{$test->loc}}" style="width:100%; height: 100%"></iframe></div>

            </div>
        </div>
    </div>

    <!-- Footer -->




@stop