<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @if(Config::get('app.locale') == 'en')
            {{$home->site}}
        @elseif(Config::get('app.locale') == 'ar')
            {{$home->site_ar}}

        @else
            {{$home->site_ar}}
        @endif
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('site/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('site/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('site/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/plugins/OwlCarousel2-2.2.1/animate.css')}}">


    @if(Config::get('app.locale') == 'en')
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/main_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/responsive.css')}}">


        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/contact_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/contact_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/offers_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/offers_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/about_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/about_responsive.css')}}">
    @elseif(Config::get('app.locale') == 'ar')
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/main_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/responsive.css')}}">


        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/contact_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/contact_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/offers_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/offers_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/about_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/about_responsive.css')}}">

    @else
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/responsive.css')}}">


        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/contact_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/contact_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/offers_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/offers_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/about_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/styles/ar/about_responsive.css')}}">
    @endif

    <style>
        /* Button used to open the chat form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        /* The popup chat - hidden by default */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            min-height: 200px;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 50%;
            margin-bottom:10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
            opacity: 1;
        }
        .open-button{
            border-radius: 50px;
            width: 5%;
        }
    </style>
</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="phone">{{$con->phone}}</div>
                        <div class="social">
                            <ul class="social_list">
{{--                                <li class="social_list_item"><a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>--}}
                                <li class="social_list_item"><a href="{{$con->fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="{{$con->tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="{{$con->wh}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
{{--                        <div class="user_box ml-auto">--}}
{{--                            <div class="user_box_login user_box_link"><a href="#">login</a></div>--}}
{{--                            <div class="user_box_register user_box_link"><a href="#">register</a></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><img src="{{asset('img/'.$home->logo)}}" alt=""> @if(Config::get('app.locale') == 'en')
                                        {{$home->site}}
                                    @elseif(Config::get('app.locale') == 'ar')
                                        {{$home->site_ar}}

                                    @else
                                        {{$home->site_ar}}
                                    @endif</a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="{{url('/'.Config::get('app.locale'))}}"> @if(Config::get('app.locale') == 'en')
                                            Home
                                        @elseif(Config::get('app.locale') == 'ar')
                                            الصفحة الرئيسية

                                        @else
                                            الصفحة الرئيسية
                                        @endif</a></li>
                                <li class="main_nav_item"><a href="{{url('/About/'.Config::get('app.locale'))}}"> @if(Config::get('app.locale') == 'en')
                                            About Us
                                        @elseif(Config::get('app.locale') == 'ar')
                                            من نحن

                                        @else
                                            من نحن
                                        @endif</a></li>
                                <li class="main_nav_item"><a href="{{url('/Offers/'.Config::get('app.locale'))}}">
                                        @if(Config::get('app.locale') == 'en')
                                            Offers
                                        @elseif(Config::get('app.locale') == 'ar')
                                            العروض

                                        @else
                                            العروض
                                        @endif
                                    </a></li>

                                <li class="main_nav_item"><a href="{{url('/Contact/'.Config::get('app.locale'))}}">
                                        @if(Config::get('app.locale') == 'en')
                                            Contact Us
                                        @elseif(Config::get('app.locale') == 'ar')
                                            اتصل بنا

                                        @else
                                            اتصل بنا
                                        @endif
                                    </a></li>

                                @if(Config::get('app.locale') == 'en')
                                    <li class="main_nav_item"><a href="/ar">
                                           AR
                                        </a></li>
                                @elseif(Config::get('app.locale') == 'en')
                                    <li class="main_nav_item"><a href="/en">
                                           ENG
                                        </a></li>
                                @else
                                    <li class="main_nav_item"><a href="/en">
                                            ENG
                                        </a></li>
                                @endif
                            </ul>
                        </div>




                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <div class="logo menu_logo"><a href="#"><img src="{{asset('img/'.$home->logo)}}" alt=""></a></div>
            <ul>
                <li class="menu_item"><a href="{{url('/'.Config::get('app.locale'))}}">home</a></li>
                <li class="menu_item"><a href="{{url('/About/'.Config::get('app.locale'))}}">about us</a></li>
                <li class="menu_item"><a href="{{url('/Offers/'.Config::get('app.locale'))}}">offers</a></li>
                <li class="menu_item"><a href="c{{url('/Contact/'.Config::get('app.locale'))}}">contact</a></li>
            </ul>
        </div>
    </div>
    @yield('content')


<!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_content footer_about">
                            <div class="logo_container footer_logo">
                                <div class="logo"><a href="#"><img src="{{asset('img/'.$home->logo)}}" alt="">
                                        @if(Config::get('app.locale') == 'en')
                                            {{$home->site}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                            {{$home->site_ar}}

                                        @else
                                            {{$home->site_ar}}
                                        @endif
                                    </a></div>
                            </div>
                            <p class="footer_about_text">

                                @if(Config::get('app.locale') == 'en')
                                    {{$home->footer_des}}
                                @elseif(Config::get('app.locale') == 'ar')
                                    {{$home->footer_des_ar}}

                                @else
                                    {{$home->footer_des_ar}}
                                @endif

                               </p>
                            <ul class="footer_social_list">

                                <li class="footer_social_item"><a href="{{$con->fb}}"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="footer_social_item"><a href="{{$con->tw}}"><i class="fa fa-twitter"></i></a></li>
                                <li class="footer_social_item"><a href="{{$con->wh}}"><i class="fa fa-whatsapp"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">


                            @if(Config::get('app.locale') == 'en')
                                Main Branch
                            @elseif(Config::get('app.locale') == 'ar')
                                المقر الرئيسى

                            @else
                                المقر الرئيسى
                            @endif
                        </div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{asset('site/images/placeholder.svg')}}" alt=""></div></div>
                                    <div class="contact_info_text">
                                        @if(Config::get('app.locale') == 'en')
                                            {{$con->address}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                            {{$con->des}}

                                        @else
                                            {{$con->des}}
                                        @endif</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{asset('site/images/phone-call.svg')}}" alt=""></div></div>
                                    <div class="contact_info_text"> {{$con->phone}}</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{asset('site/images/message.svg')}}" alt=""></div></div>
                                    <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top"> {{$con->email}}</a></div>
                                </li>
{{--                                <li class="contact_info_item d-flex flex-row">--}}
{{--                                    <div><div class="contact_info_icon"><img src="{{asset('site/images/planet-earth.svg')}}" alt=""></div></div>--}}
{{--                                    <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>

@foreach($mag_url as $row)
                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">
                            @if(Config::get('app.locale') == 'en')
                                {{$row->name}}
                            @elseif(Config::get('app.locale') == 'ar')
                                {{$row->name_ar}}

                            @else
                                {{$row->name_ar}}
                                @endif
                            </div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{asset('site/images/placeholder.svg')}}" alt=""></div></div>
                                    <div class="contact_info_text">
                                        @if(Config::get('app.locale') == 'en')
                                            {{$row->address}}
                                        @elseif(Config::get('app.locale') == 'ar')
                                            {{$row->address_ar}}

                                        @else
                                            {{$row->address_ar}}
                                        @endif
                                    </div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{asset('site/images/phone-call.svg')}}" alt=""></div></div>
                                    <div class="contact_info_text">{{$row->phone}}</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{asset('site/images/message.svg')}}" alt=""></div></div>
                                    <div class="contact_info_text"><a href="mailto:{{$row->email}}?Subject=FMTRAVEL" target="_top">{{$row->email}}</a></div>
                                </li>
{{--                                <li class="contact_info_item d-flex flex-row">--}}
{{--                                    <div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>--}}
{{--                                    <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
@endforeach


            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2  ">
                    <div class="copyright_content d-flex flex-row align-items-center">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
{{--                            All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                        <div class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item"><a href="{{url('/'.Config::get('app.locale'))}}">
                                        @if(Config::get('app.locale') == 'en')
                                           Home
                                        @elseif(Config::get('app.locale') == 'ar')
                                        الصفحة الرئيسية

                                        @else
                                          الصفحة الرئيسية
                                        @endif</a></li>
                                <li class="footer_nav_item"><a href="{{url('/About/'.Config::get('app.locale'))}}">
                                        @if(Config::get('app.locale') == 'en')
                                               About Us
                                        @elseif(Config::get('app.locale') == 'ar')
                                           من نحن

                                        @else
                                          من نحن
                                        @endif
                                    </a></li>
                                <li class="footer_nav_item"><a href="{{url('/Offers/'.Config::get('app.locale'))}}">
                                        @if(Config::get('app.locale') == 'en')
                                            Offers
                                        @elseif(Config::get('app.locale') == 'ar')
                                           العروض

                                        @else
                                           العروض
                                        @endif
                                    </a></li>

                                <li class="footer_nav_item"><a href="{{url('/Contact/'.Config::get('app.locale'))}}">
                                        @if(Config::get('app.locale') == 'en')
                                           Contact Us
                                        @elseif(Config::get('app.locale') == 'ar')
                                           اتصل بنا

                                        @else
                                            اتصل بنا
                                        @endif
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="{{asset('site/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('site/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('site/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('site/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('site/plugins/easing/easing.js')}}"></script>
<script src="{{asset('site/js/custom.js')}}"></script>
<script src="{{asset('site/js/offers_custom.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .sweet-alert h2{
        color: red;
    }
    .sweet-alert p{
        color: #000;
        font-weight: bold;
        font-size: 15px;
    }
</style>
@if(Session::has('success'))
    <script>
        swal({
            title: "{{Session::get('success')}}",
            text: "",
            timer: 4000,
            showConfirmButton:false,
            animation: true,
            icon: "success",
        });



    </script>
@endif

</body>

