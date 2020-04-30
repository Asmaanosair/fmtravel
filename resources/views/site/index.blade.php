@extends('layouts.site_lay')

@section('content')

    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->

        <div class="home_slider_container">

            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                @foreach($slider as $row)
                <div class="owl-item home_slider_item">
                    <!-- Image by https://unsplash.com/@anikindimitry -->
                    <div class="home_slider_background" style="background-image:url({{asset('img/'.$row->image)}})"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>
                                @if(Config::get('app.locale') == 'en')
                                    {{$row->title}}
                                @elseif(Config::get('app.locale') == 'ar')
                                    {{$row->title_ar}}

                                @else
                                    {{$row->title_ar}}
                                @endif
                            </h1>
                            <h1>


                                @if(Config::get('app.locale') == 'en')
                                    {{$row->des}}
                                @elseif(Config::get('app.locale') == 'ar')
                                    {{$row->des_ar}}

                                @else
                                    {{$row->des_ar}}
                                @endif
                               </h1>
{{--                            <div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>--}}
                        </div>
                    </div>
                </div>
@endforeach


            </div>

            <!-- Home Slider Nav - Prev -->
            <div class="home_slider_nav home_slider_prev">
                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class="home_slider_nav home_slider_next">
                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                    <li class="home_slider_custom_dot active"><div></div>01.</li>
                    <li class="home_slider_custom_dot"><div></div>02.</li>
                    <li class="home_slider_custom_dot"><div></div>03.</li>
                </ul>
            </div>

        </div>

    </div>

    <!-- Search -->

    <div class="search">


        <!-- Search Contents -->

        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col fill_height">

                    <!-- Search Tabs -->

                    <div class="search_tabs_container">
                        <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_tab d-flex flex-row active align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('site/images/departure.png')}}" alt="">
                                @if(Config::get('app.locale') == 'en')
                                   Flight
                                @elseif(Config::get('app.locale') == 'ar')
                                   الطيران

                                @else
                                 الطيران
                                @endif
                            </div>

                            <div class="search_tab  d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('site/images/suitcase.png')}}" alt=""><span>

                                    @if(Config::get('app.locale') == 'en')
                                        Hajj
                                    @elseif(Config::get('app.locale') == 'ar')
                                        حج

                                    @else
                                       حج
                                    @endif
                                </span></div>
                            <!--<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>-->

                            <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('site/images/island.png')}}" alt="">@if(Config::get('app.locale') == 'en')
                                   Trips
                                @elseif(Config::get('app.locale') == 'ar')
                                 رحلات سياحية

                                @else
                                   رحلات سياحية
                                @endif</div>
                            <!--<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>-->
                            <!--<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>-->
                        </div>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel active">
                        <form action="{{url('/Flight/'.Config::get('app.locale'))}}" id="search_form_1" method="post" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            {{csrf_field()}}
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                       Name
                                    @elseif(Config::get('app.locale') == 'ar')
                                       الاسم

                                    @else
                                     الاسم
                                    @endif
                                    </div>
                                <input type="text" class="check_in search_input" name="name" required>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                         Phone
                                    @elseif(Config::get('app.locale') == 'ar')
                                        رقم الموبايل

                                    @else
                                        رقم الموبايل
                                    @endif</div>
                                <input type="text" class="check_in search_input"  name="phone" required>
                            </div>
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Departure Date
                                    @elseif(Config::get('app.locale') == 'ar')
                                       تاريخ المغادره

                                    @else
                                        تاريخ المغادره
                                    @endif</div>
                                <input type="date" class="check_in search_input" placeholder="YYYY-MM-DD" name="ck_in" required>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Return Date
                                    @elseif(Config::get('app.locale') == 'ar')
                                        تاريخ العوده

                                    @else
                                      تاريخ العوده
                                    @endif</div>
                                <input type="date" class="check_out search_input" placeholder="YYYY-MM-DD" name="ck_out" required>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Adults
                                    @elseif(Config::get('app.locale') == 'ar')
                                        عدد الاشخاص

                                    @else
                                        عدد الاشخاص
                                    @endif</div>
                                <select  id="adults_1" class="dropdown_item_select search_input test" name="adult" required >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" >3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Child
                                    @elseif(Config::get('app.locale') == 'ar')
                                        عدد الاطفال

                                    @else
                                        عدد الاطفال
                                    @endif</div>
                                <select name="child" id="adults_1" class="dropdown_item_select search_input test" >
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" >3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        From
                                    @elseif(Config::get('app.locale') == 'ar')
                                       من

                                    @else
                                       من
                                    @endif</div>
                                <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="adults_1" class="dropdown_item_select search_input test" name="from" required>
                                    @foreach($city as $row)

                                    <option data-subtext=" @if(Config::get('app.locale') == 'en')
                                    {{$row->city}}
                                    @elseif(Config::get('app.locale') == 'ar')
                                    {{$row->city_ar}}

                                    @else
                                    {{$row->city_ar}}
                                    @endif">

                                        @if(Config::get('app.locale') == 'en')
                                            {{$row->city}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                            {{$row->city_ar}}

                                        @else
                                            {{$row->city_ar}}
                                        @endif
                                    </option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="search_item">
                                <div> @if(Config::get('app.locale') == 'en')
                                       To
                                    @elseif(Config::get('app.locale') == 'ar')
                                      الى

                                    @else
                                       الى
                                    @endif</div>
                                <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="adults_1" class="dropdown_item_select search_input test" name="to" required>
@foreach($city as $row)

                                    <option data-subtext=" @if(Config::get('app.locale') == 'en')
                                    {{$row->city}}
                                    @elseif(Config::get('app.locale') == 'ar')
                                    {{$row->city_ar}}

                                    @else
                                    {{$row->city_ar}}
                                    @endif">

                                        @if(Config::get('app.locale') == 'en')
                                            {{$row->city}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                            {{$row->city_ar}}

                                        @else
                                            {{$row->city_ar}}
                                        @endif
                                        </option>

    @endforeach
                                </select>
                            </div>
                            <button class="button search_button">@if(Config::get('app.locale') == 'en')
                                    Booking Now
                                @elseif(Config::get('app.locale') == 'ar')
                                    احجز الان

                                @else
                                    احجز الان
                                @endif<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel ">
                        <form action="{{url('/hajj/'.Config::get('app.locale'))}}" id="search_form_1" method="post" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            {{csrf_field()}}
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Name
                                    @elseif(Config::get('app.locale') == 'ar')
                                        الاسم

                                    @else
                                        الاسم
                                    @endif
                                </div>
                                <input type="text" class="check_in search_input" name="name" required>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Phone
                                    @elseif(Config::get('app.locale') == 'ar')
                                        رقم الموبايل

                                    @else
                                        رقم الموبايل
                                    @endif</div>
                                <input type="text" class="check_in search_input"  name="phone" required>
                            </div>

                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Adults
                                    @elseif(Config::get('app.locale') == 'ar')
                                        عدد الاشخاص

                                    @else
                                        عدد الاشخاص
                                    @endif</div>
                                <select  id="adults_1" class="dropdown_item_select search_input test" name="adult" required >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" >3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Room
                                    @elseif(Config::get('app.locale') == 'ar')
                                        نوع الغرفة

                                    @else
                                        نوع الغرفة
                                    @endif</div>
                                <select name="type" id="adults_1" class="dropdown_item_select search_input test" >
                                    <option value="ثنائي"> @if(Config::get('app.locale') == 'en')
                                            Duple
                                        @elseif(Config::get('app.locale') == 'ar')
                                           ثنائي

                                        @else
                                            ثنائي
                                        @endif</option>
                                    <option value="ثلاثي"> @if(Config::get('app.locale') == 'en')
                                            ثلاثي
                                        @elseif(Config::get('app.locale') == 'ar')
                                           ثلاثي

                                        @else
                                           ثلاثي
                                        @endif</option>
                                    <option value="رباعي"> @if(Config::get('app.locale') == 'en')
                                            رباعي
                                        @elseif(Config::get('app.locale') == 'ar')
                                            رباعي

                                        @else
                                           رباعي
                                        @endif</option>

                                </select>
                            </div>
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Level
                                    @elseif(Config::get('app.locale') == 'ar')
                                        مستوي الحج والعمره

                                    @else
                                        مستوي الحج والعمره
                                    @endif</div>
                                <select name="level" id="adults_1" class="dropdown_item_select search_input test" >
                                    <option value="بري"> @if(Config::get('app.locale') == 'en')
                                            بري
                                        @elseif(Config::get('app.locale') == 'ar')
                                            بري

                                        @else
                                            بري
                                        @endif</option>
                                    <option value="اقتصادى"> @if(Config::get('app.locale') == 'en')
                                            اقتصادى
                                        @elseif(Config::get('app.locale') == 'ar')
                                            اقتصادى

                                        @else
                                            اقتصادى
                                        @endif</option>
                                    <option value="3نجوم"> @if(Config::get('app.locale') == 'en')
                                            3نجوم
                                        @elseif(Config::get('app.locale') == 'ar')
                                            3نجوم

                                        @else
                                            3نجوم
                                        @endif</option>

                                    <option value="5نجوم"> @if(Config::get('app.locale') == 'en')
                                            5نجوم
                                        @elseif(Config::get('app.locale') == 'ar')
                                            5نجوم

                                        @else
                                            5نجوم
                                        @endif</option>

                                    <option value="اخرى"> @if(Config::get('app.locale') == 'en')
                                            Other
                                        @elseif(Config::get('app.locale') == 'ar')
                                            اخرى

                                        @else
                                            اخرى
                                        @endif</option>

                                </select>
                            </div>

                            <button class="button search_button">@if(Config::get('app.locale') == 'en')
                                    Booking Now
                                @elseif(Config::get('app.locale') == 'ar')
                                    احجز الان

                                @else
                                    احجز الان
                                @endif<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel ">
                        <form action="{{url('/Trip/'.Config::get('app.locale'))}}" id="search_form_1" method="post" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            {{csrf_field()}}
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Name
                                    @elseif(Config::get('app.locale') == 'ar')
                                        الاسم

                                    @else
                                        الاسم
                                    @endif
                                </div>
                                <input type="text" class="check_in search_input" name="name" required>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Phone
                                    @elseif(Config::get('app.locale') == 'ar')
                                        رقم الموبايل

                                    @else
                                        رقم الموبايل
                                    @endif</div>
                                <input type="text" class="check_in search_input"  name="phone" required>
                            </div>
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Departure Date
                                    @elseif(Config::get('app.locale') == 'ar')
                                        تاريخ المغادره

                                    @else
                                        تاريخ المغادره
                                    @endif</div>
                                <input type="date" class="check_in search_input" placeholder="YYYY-MM-DD" name="ck_in" required>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Return Date
                                    @elseif(Config::get('app.locale') == 'ar')
                                        تاريخ العوده

                                    @else
                                        تاريخ العوده
                                    @endif</div>
                                <input type="date" class="check_out search_input" placeholder="YYYY-MM-DD" name="ck_out" required>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Adults
                                    @elseif(Config::get('app.locale') == 'ar')
                                        عدد الاشخاص

                                    @else
                                        عدد الاشخاص
                                    @endif</div>
                                <select  id="adults_1" class="dropdown_item_select search_input test" name="adult" required >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" >3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>
                                    @if(Config::get('app.locale') == 'en')
                                        Child
                                    @elseif(Config::get('app.locale') == 'ar')
                                        عدد الاطفال

                                    @else
                                        عدد الاطفال
                                    @endif</div>
                                <select name="child" id="adults_1" class="dropdown_item_select search_input test" >
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" >3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>@if(Config::get('app.locale') == 'en')
                                        Trip
                                    @elseif(Config::get('app.locale') == 'ar')
                                        اسم الرحله

                                    @else
                                        اسم الرحله
                                    @endif</div>
                                <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="adults_1" class="dropdown_item_select search_input test" name="trip" required>
                                    @foreach($prog as $row)

                                        <option data-subtext=" @if(Config::get('app.locale') == 'en')
                                        {{$row->name}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                        {{$row->Title}}

                                        @else
                                        {{$row->Title}}
                                        @endif">

                                            @if(Config::get('app.locale') == 'en')
                                                {{$row->name}}
                                            @elseif(Config::get('app.locale') == 'ar')
                                                {{$row->Title}}

                                            @else
                                                {{$row->Title}}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="button search_button">@if(Config::get('app.locale') == 'en')
                                    Booking Now
                                @elseif(Config::get('app.locale') == 'ar')
                                    احجز الان

                                @else
                                    احجز الان
                                @endif<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->


                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center"> @if(Config::get('app.locale') == 'en')
                            Offers
                        @elseif(Config::get('app.locale') == 'ar')
                            العروض

                        @else
                            العروض
                        @endif</h2>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-lg-10 offset-lg-1">--}}
{{--                    <div class="intro_text text-center">--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row intro_items">

                <!-- Intro Item -->
@foreach($department as $row)
                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <!-- Image by https://unsplash.com/@dnevozhai -->
                        <div class="intro_item_background" style="background-image:url({{asset('img/'.$row->image)}});"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <!--<div class="intro_date">May 25th - June 01st</div>-->
                            <div class="button intro_button"><div class="button_bcg"></div><a href="{{url('Offer/'.$row->id.'/'.Config::get('app.locale'))}}">


                                    @if(Config::get('app.locale') == 'en')
                                        See More
                                    @elseif(Config::get('app.locale') == 'ar')
                                       مشاهدة المزيد

                                    @else
                                      مشاهدة المزيد
                                    @endif


                                    <span></span><span></span><span></span></a></div>
                            <div class="intro_center text-center">
                                <h1>  @if(Config::get('app.locale') == 'en')
                                       {{$row->Title}}
                                    @elseif(Config::get('app.locale') == 'ar')
                                        {{$row->name}}

                                    @else
                                       {{$row->name}}
                                    @endif</h1>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>

    <!-- CTA -->

    <div class="cta">
        <!-- Image by https://unsplash.com/@thanni -->
        <div class="cta_background" style="background-image:url({{asset('site/images/cta.jpg')}})"></div>

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- CTA Slider -->

                    <div class="cta_slider_container">
                        <div class="owl-carousel owl-theme cta_slider">

                            <!-- CTA Slider Item -->
                            @foreach($test as $row)
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">
                                    @if(Config::get('app.locale') == 'en')
                                        Testimonial
                                    @elseif(Config::get('app.locale') == 'ar')
                                       اراء العملاء

                                    @else
                                        اراء العملاء
                                    @endif
                                    </div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">@if(Config::get('app.locale') == 'en')
                                        {{$row->job}}
                                    @elseif(Config::get('app.locale') == 'ar')

                                        {{$row->des}}

                                    @else
                                        {{$row->des}}
                                        @endif.</p>
                                <!--<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>-->
                            </div>
                            @endforeach



                        </div>

                        <!-- CTA Slider Nav - Prev -->
                        <div class="cta_slider_nav cta_slider_prev">
                            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_prev'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
								11.042,18.219 "/>
							</svg>
                        </div>

                        <!-- CTA Slider Nav - Next -->
                        <div class="cta_slider_nav cta_slider_next">
                            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_next'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
							17.046,15.554 "/>
							</svg>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Offers -->

    <div class="offers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title" style="margin-top: 20px">
                        @if(Config::get('app.locale') == 'en')
                          The Best Offers
                        @elseif(Config::get('app.locale') == 'ar')
                           افضل العروض

                        @else
                            افضل العروض
                        @endif
                    </h2>
                </div>
            </div>
            <div class="row offers_items">

                <!-- Offers Item -->
                @foreach($programe as $row)
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@kensuarez -->
                                    <div class="offers_image_background" style="background-image:url({{asset('img/'.$row->main_image)}})"></div>
                                    <div class="offer_name"><a href="#">
                                            @if(Config::get('app.locale') == 'en')
                                                {{$row->name}}
                                            @elseif(Config::get('app.locale') == 'ar')

                                                {{$row->Title}}

                                            @else
                                                {{$row->Title}}
                                            @endif</a></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="offers_content">
                                    <div class="offers_price">@if(Config::get('app.locale') == 'en')
                                            {{$row->offer}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                            {{$row->offer}}

                                        @else
                                            {{$row->offer}}
                                        @endif<span></span></div>
                                    <div class="rating_r rating_r_5 offers_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text">
                                        @if(Config::get('app.locale') == 'en')
                                            {{$row->s_des}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                            {{$row->des}}

                                        @else
                                            {{$row->des}}
                                        @endif.</p>
                                    <div class="offers_icons">

                                    </div>
                                    <div class="offers_link"><a href="#">@if(Config::get('app.locale') == 'en')
                                                Booking Now
                                            @elseif(Config::get('app.locale') == 'ar')
                                                احجز الان

                                            @else
                                                احجز الان
                                            @endif</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>





    <div class="trending">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title">
                        @if(Config::get('app.locale') == 'en')
                            Flight
                        @elseif(Config::get('app.locale') == 'ar')
                            الطيران

                        @else
                            الطيران
                        @endif</h2>
                </div>
            </div>
            <div class="row trending_container">

                <!-- Trending Item -->
                @foreach($flight as $row)
                <div class="col-lg-3 col-sm-6">
                    <div class="trending_item clearfix">
                        <div class="trending_image"><img src="{{asset('img/'.$row->main_image)}}" alt="{{asset('img/'.$row->main_image)}}"></div>
                        <div class="trending_content">
                            <div class="trending_title"><a href="#"> @if(Config::get('app.locale') == 'en')
                                        {{$row->name}}
                                    @elseif(Config::get('app.locale') == 'ar')

                                        {{$row->Title}}

                                    @else
                                        {{$row->Title}}
                                    @endif</a></div>
                            <div class="trending_price">From {{$row->price}}</div>
{{--                            <div class="trending_location">madrid, spain</div>--}}
                        </div>
                    </div>
                </div>
@endforeach




            </div>
        </div>
    </div>


    <div class="contact">
        <div class="contact_background" style="background-image:url({{asset('site/images/contact.png')}})"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact_image">

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact_form_container">
                        <div class="contact_title"> @if(Config::get('app.locale') == 'en')
                                Contact Us
                            @elseif(Config::get('app.locale') == 'ar')
                                اتصل بنا

                            @else
                                اتصل بنا
                            @endif</div>
                        <form action="#" id="contact_form" class="contact_form">
                            <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                            <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Phone" required="required" data-error="Email is required.">

                            <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            <button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="open-button" onclick="openForm()" style="    z-index: 18;
    font-size: 27px;
    /* color: green; */
    background-color: green;"><i class="fa fa-phone"></i></button>

    <div class="chat-popup" id="myForm" style="z-index: 30">
        <form action="https://www.w3schools.com/action_page.php" class="form-container">
            <div> <button type="button" class="close" onclick="closeForm()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>
            <br>

            <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""> </div></div>
            <a href="tel:+201099993760"> 01099993760</a>
            <br>
            <a href="tel:+201099993769"> 01099993769</a>
            <br>
            <a href="tel:+20225771010"> 0225771010</a>

            <div class="contact_info_text">2556-808-8613                               </div>



        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>




    @stop