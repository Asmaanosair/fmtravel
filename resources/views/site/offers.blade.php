@extends('layouts.site_lay')

@section('content')
    <!-- Home -->

    <div class="home"  style='background-image: url("{{asset('site/images/about_background.jpg')}}")'>
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('site/images/about_background.jpg')}}"></div>
        <div class="home_content">
            <div class="home_title">
                @if(Config::get('app.locale') == 'en')
                  Offers
                @elseif(Config::get('app.locale') == 'ar')
                  العروض

                @else
                    العروض
                @endif
            </div>
        </div>
    </div>

    <!-- Offers -->

    <div class="offers">

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

        <!-- Offers -->

        <div class="container">
            <div class="row">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-11">

                    <!-- Offers Sorting -->

                </div>

                <div class="col-lg-12">
                    <!-- Offers Grid -->
                    <div class="row intro_items">

                        <!-- Intro Item -->
                        @foreach($department as $row)
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item">
                                    <div class="intro_item_overlay"></div>
                                    <!-- Image by https://unsplash.com/@dnevozhai -->
                                    <div class="intro_item_background" style="background-image:url({{asset('img/'.$row->image)}})"></div>
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
                                                    {{$row->title}}
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
        </div>
    </div>

    <!-- Footer -->




@stop