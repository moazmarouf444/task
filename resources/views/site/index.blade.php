<!doctype html>
@if(app()->getLocale() == 'ar')
<html dir="rtl" class="no-js" lang="zxx">
@elseif(app()->getLocale() == 'en')
    <html dir="ltr" class="no-js" lang="zxx">
@endif
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>activation</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://wowjs.uk/">
    <link rel="stylesheet" href="{{asset('site/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('site/js/wow.js')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('site/images/icon/logo2.png')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- CSS
    ========================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('site/fonts/ArbFONTS-ArbFONTS-Janna-LT-Regular.ttf')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous"></script>
    <script src="{{asset('site/js/jquery.ccpicker.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/jquery.ccpicker.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/custom.css')}}">


    <script src="{{asset('site/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
        @if(app()->getLocale() == 'ar')
            <style>
                .dropbtn {
                    background-color: #04AA6D;
                    color: white;
                    padding: 16px;
                    font-size: 16px;
                    border: none;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f1f1f1;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {
                    background-color: #ddd;
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                .dropdown:hover .dropbtn {
                    background-color: #3e8e41;
                }


                .ccc a {
                    float: left;
                    display: block;
                    color: black;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 17px;
                    border-bottom: 3px solid transparent;
                }

                .ccc a:hover {
                    border-bottom: 3px solid #166DE1;
                }


                .ccc a.active {

                    border-bottom: 5px solid #166DE1;
                }
            </style>

        @elseif(app()->getLocale() == 'en')
            <style>
                .dropbtn {
                    background-color: #04AA6D;
                    color: white;
                    padding: 16px;
                    font-size: 16px;
                    border: none;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f1f1f1;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                    padding-right: 50px;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {
                    background-color: #ddd;
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                .dropdown:hover .dropbtn {
                    background-color: #3e8e41;
                }




                .ccc a {
                    float: left;
                    display: block;
                    color: black;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 17px;
                    border-bottom: 3px solid transparent;
                }

                .ccc a:hover {
                    border-bottom: 3px solid #166DE1;
                }
                .ccc a.active {

                    border-bottom: 5px solid #166DE1;
                }


            </style>

        @endif




        <script>
        $(document).ready(function () {
            $("#phoneField1").CcPicker();
            $("#phoneField1").CcPicker("setCountryByCode", "sa");
            $("#phoneField3").CcPicker({"countryCode": "us"});
            $("#phoneField5").CcPicker();
            /* $("#phoneField1").on("countrySelect", function (e, i) {
                    alert(i.countryName + " " + i.phoneCode);
                });
             */

        });
    </script>


</head>

<body>


<div class="dropdown d-md-none d-flex flex-row text-center pt-5">
    <div class="col-6">
        <!--   <button class="dropbtn">Dropdown</button> -->
        <img src="{{asset('site/images/menu.png')}}" style="width: 40px;">
        <div class="dropdown-content">
            <a href="index.html">الرئيسية</a>
            <a href="#about">من نحن </a>
            <a href="#ourvis">الرؤية والرسالة</a>
            <a href="#feature">مزايا تفعيل</a>
            <a href="#ourservice"> خدماتنا </a>
            <!--     <a href="#ourworkk">أعمالنا</a>
           <a href="#ourcli">عملاؤنا </a>-->
            <a href="#contact"> اتصل بنا </a>
            <a href="en.html"> English</a>

        </div>
    </div>

    <div class="col-6">
        <a href="index.html">
            <img src="{{asset('site/images/lalogo.png')}}" style="width: 100px;">
        </a>
    </div>
</div>


<div class="my-header  flex-column d-flex justify-content-sm-center p-5">
    <div class="my-menue d-flex flex-row flex-wrap">

        <div class="my-logo d-none d-md-flex flex-wrap col-md-3 ml-auto p-3" style="text-align: center;">
            <a href="index.html">
                <img
                    src="{{  isset($settings['logo']) ? asset('/storage/images/settings/' . $settings['logo'] ) : asset('/storage/images/settings/logo.png') }}"
                    style="width: 100px;">
            </a>
        </div>

        <div class=" my-menue-items d-none d-md-flex flex-wrap flex-row col-md-9 justify-content-sm-between p-5 ">
            <div class="ccc">
                <a href="index.html"> الرئيسية </a>
            </div>

            <div class="ccc">
                <a href="#about"> من نحن </a>
            </div>
            <div class="ccc">
                <a href="#ourvis"> الرؤية والرسالة </a>
            </div>

            <div class="ccc">
                <a href="#feature"> مزايا تفعيل </a>
            </div>

            <div class="ccc">
                <a href="#ourservice"> خدماتنا </a>
            </div>
            <!--
            <div class="ccc">
                <a href="#ourworkk"> أعمالنا </a>
            </div>

            <div class="ccc">
                <a href="#ourcli"> عملاؤنا </a>
            </div> -->

            <div class="ccc">
                <a href="#contact"> اتصل بنا </a>
            </div>

            @if(app()->getLocale() == 'ar')
            <div class="ccc">
                <a href="{{route('site.change.language', ['language' =>'en'])}}"> English </a>
            </div>
            @elseif(app()->getLocale() == 'en')
            <div class="ccc">
                <a href="{{ route('site.change.language', ['language' =>'ar'])}}"> عربي </a>
            </div>
            @endif

        </div>
        <!--
        <div class="col-12 d-md-none">
            <div style="background-color: tomato;">
                <button id="menu_button">Click Here</button>
            </div>
        </div>

        <div id="menu_list" class="col-12 d-none d-md-none">
            <div class="" style="background-color: violet;">
                fdfdfdf
                <br>
                sslklklk
            </div>
        -->
    </div>


</div>

<div id="about" class="about-us d-flex flex-column flex-md-row p-md-5 mb-5">
    <div class="my-image-1 col-md-6 mb-5 mb-md-0">
        <img style="width: 100%;"
             src="{{ isset($settings['about_image']) ? asset('storage/images/settings/' . $settings['about_image'] ) : asset('storage/images/settings/about.png') }}">

    </div>
    <div class="paragraph col-md-6 d-flex flex-column justify-content-center">

        <h1 class="intro-title span3 wow flipInX center"
            style=" text-align: justify; padding-right: 20px; visibility: visible; animation-name: flipInX; color: black; padding-bottom: 30px;">
            عن
            شركة <span style="color: #166DE1;"> تفعيل </span>
        </h1>
        <p class="intro" data-wow-delay="0.1s" class="span3 wow bounceInUp center"
           style="text-align: justify; padding-right: 20px; visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">
            {{$settings['about_ar'] ?? ''}}

        </p>
    </div>
</div>
</div>


<div id="ourvis" style="height: 60px; width: 100%; background-color: #166DE1; ">
    <p style="color: white; text-align: center; font-size: 24px; padding-top: 10px; "> عن تفعيل </p>
</div>
<!--  <img id="ourvis" class="img-fluid" src="images/abo.png" style="width: 100%; margin-bottom: 150px;"> -->
<section class="about about_sec">
    <div class="container-fluid">
        <div class="row">
            <div data-wow-delay="0.1s" class="col-md-4 col-sm-4 col-xs-12 span3 wow bounceInUp center"
                 style="visibility: visible; animation-name: bounceInUp;">
                <div class="about-block">
                    <div class="text">
                        <img class="img-fluid"
                             src="{{ isset($settings['vision_image']) ? asset('storage/images/settings/' . $settings['vision_image'] ) : asset('storage/images/settings/vision.png') }}"
                             style="width: 90px;padding-bottom: 30px;">
                        <h1 class="intro-title">رؤيتنا</h1>
                        <p class="intro">

                            {{$settings['vision_ar'] ?? ''}}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div data-wow-delay="0.2s" class="col-md-4 col-sm-4 col-xs-12 span3 wow bounceInUp center"
                 style="visibility: visible; animation-name: bounceInUp;">
                <div class="about-block">
                    <div class="text">
                        <img class="img-fluid"
                             src="{{ isset($settings['message_image']) ? asset('storage/images/settings/' . $settings['message_image'] ) : asset('storage/images/settings/message.png') }}"
                             style="width: 90px;padding-bottom: 30px;">
                        <h1 class="intro-title">رسالتنا</h1>
                        <p class="intro">

                            {{$settings['message_ar'] ?? ''}}

                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div data-wow-delay="0.3s" class="col-md-4 col-sm-4 col-xs-12 span3 wow bounceInUp center "
                 style="visibility: visible; animation-name: bounceInUp;">
                <div class="about-block">
                    <div class="text">
                        <img class="img-fluid"
                             src="{{ isset($settings['motto_image']) ? asset('storage/images/settings/' . $settings['motto_image'] ) : asset('storage/images/settings/motto_image.png') }}"
                             style="width: 90px; padding-bottom: 30px;">
                        <h1 class="intro-title">شعارنا</h1>
                        <p class="intro">
                            {{$settings['our_motto_ar'] ?? ''}}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<div style="height: 60px; width: 100%; background-color: #166DE1; margin-bottom: 10px;">
    <p style="color: white; text-align: center; font-size: 24px; padding-top: 10px;"> خدماتنا </p>
</div>

<!-- <img class="img-fluid" src="images/ourservice.png" style="width: 100%; padding-bottom: 4px;"> -->
<section class="service lazy-bg-loaded" id="ourservice">
    <div class="container-fluid">
    </div>
    <ul class="nav nav-tabs">

        @foreach($services as $service)
            <li><a data-toggle="tab" href="#{{$service->id}}" aria-expanded="true">{{ $service->getTranslation("title", 'ar') }} </a></li>
        @endforeach

    </ul>
    <div class="tab-content">
        @foreach($services as $service)
         <div class="tab-pane active" id="{{$service->id}}" style="/*transition: opacity .7s ease-in-out;*/">
            <div class="service_content">
                <img class="main_img" src="{{$service->image}}">
                <div class="service_text">
                    <img class="lazy service_icon rounded-end" data-src="tqnia2020/images/service_icon.png">
                    <h1 class="intro-title" style="font-size: 24px;">{{ $service->getTranslation("title", 'ar') }} :</h1>
                    <p class="intro">

                    {{ $service->getTranslation("description", 'ar') }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>



<div id="feature" style="height: 60px; width: 100%; background-color: #166DE1; margin-bottom: 10px;">
    <p style="color: white; text-align: center; font-size: 24px; padding-top: 10px;"> مزايا تفعيل </p>
</div>
<!--  <img class="img-fluid" src="images/adv.png" style="width: 100%; padding-top: 50px;"> -->
<div class=" container d-flex flex-column flex-md-row p-5 text-center">
    @foreach($advantages as $advantage)
        <div class=" nnn col-md-3  span6 center span3 wow flipInX center"
             style="visibility: visible; animation-name: flipInX;">
            <div class="our-expp border-right-0 border  p-3 bg-body rounded "
                 style="width: 100%; height: 300px; margin-bottom: 20px;">
                <img src="{{$advantage->image}}" style="width: 84px ;  padding-top: 50px; ">
                <p style="color: black;padding-bottom: 100px; font-size: 24px;"> {{ $advantage->getTranslation("title", 'ar') }} </p>
                <!--
                  <p> نسخر كل خبراتنا  في مختلف مجالات التقنية  لتقديم أفضل الخدمات لعملائنا. </p>
                -->

            </div>
        </div>
    @endforeach
</div>

<!--
<div id="feature" class="our-detailes-2 d-flex flex-row p-3 m-3 text-center">
    <div class=" col-md-3 p-3 span6 center">
        <div class="our-exp  border shadow p-3 mb-5 bg-body rounded " style=" width: 300px; height: 240px;">
            <img src="images/icon/heart-2.png" style="width: 50px ; ">
            <p style="color: black;"> خبرات متراكمة </p>
            <p> كادر محترف لديه الخبرة المكتسبة من الأعمال السابقة بالاضافة لمعرفة توجهات سوق الاعمال الحديث.</p>
        </div>
    </div>

    <div class="col-md-3 p-3">
        <div class="our-exp border shadow p-3 mb-5 bg-body rounded" style=" width: 300px; height: 240px;">
            <img src="images/icon/trick.png" style="width: 50px ; ">
            <p style="font-weight: bold; color: black;"> التزام كامل </p>
            <p> الالتزام بخطة عمل متفق عليها مسبقاً.</p>
        </div>
    </div>

    <div class="col-md-3 p-3">
        <div class="our-exp  border shadow p-3 mb-5 bg-body rounded" style=" width: 300px; height: 240px;">
            <img src="images/icon/req.png" style="width: 50px ;">
            <p style="font-weight: bold; color: black; "> تلبية احتياجات </p>
            <p> معرفه احتياجات العملاء ومراعاتها بدقة اثناء العمل مع ادراج الأولوية في المشروع لرأي العميل..
            </p>
        </div>
    </div>

    <div class="col-md-3 p-3">
        <div class="our-exp  border shadow p-3 mb-5 bg-body rounded" style=" width: 300px; height: 240px;">
            <img src="images/icon/flex.png" style="width: 50px ; ">
            <p style="font-weight: bold; color: black; "> مرونة </p>
            <p> مشاريع مرنة قابلة للصيانة والتعديل في أي وقت .
            </p>
        </div>
    </div>

</div>
-->


<!--------------------------------------------------------------------------
    - Our Clients
    ---------------------------------------------------------------------------->
<!--

    <div id="ourcli" style="height: 60px; width: 100%; background-color: #166DE1; margin-bottom: 10px;">
        <p style="color: white; text-align: center; font-size: 24px; padding-top: 10px;"> عملاؤنا </p>
       </div>
<div class="pt-3" dir="ltr"  style="background-color: #EFF8FF;  ">
    <div style="text-align: center;"> -->
<!--  <img class="img-fluid" src="images/cl.png" style="width: 100%; padding-bottom: 50px;"> -->
<!--   <img src="images/ourcus.png" style="width: 500px;"> -->
<!--      </div>

    <div class="row">
        <div class="container">
            <section class="customer-logos slider" data-arrows="true">
                <div class="slide"><img src="images/rhud-02.png"></div>
                <div class="slide"><img src="images/uroadlo-03.png"></div>
                <div class="slide"><img src="images/actlo-04.png"></div>
                <div class="slide"><img src="images/rhud-02.png"></div>
                <div class="slide"><img src="images/uroadlo-03.png"></div>
                <div class="slide"><img src="images/tn-05.png"></div>
                <div class="slide"><img src="images/actlo-04.png"></div>
                <div class="slide"><img src="images/tn-05.png"></div>
            </section>
        </div>
    </div> -->


<!--         <div class="our-detailes d-flex flex-row p-3 m-3 text-center">


        <div class="our-vision col-md-2">
            <img clss="img-fluid" src="images/icon/vision.png" style="width: 100px ;">


        </div>
        <div class="our-messege col-md-2">
            <img clss="img-fluid" src="images/icon/goal.png" style="width: 100px ;">


        </div>

        <div class="our-logo col-md-2">
            <img clss="img-fluid" src="images/icon/medal.png" style="width: 100px ;">

        </div>

        <div class="our-logo col-md-2">
            <img clss="img-fluid" src="images/icon/medal.png" style="width: 100px ;">

        </div>


        <div class="our-logo col-md-2">
            <img clss="img-fluid" src="images/icon/medal.png" style="width: 100px ;">

        </div>

    </div>
-->
<!--   </div>




<div>

<div id="ourworkk" style="height: 60px; width: 100%; background-color: #166DE1; margin-bottom: 10px;">
<p style="color: white; text-align: center; font-size: 24px; padding-top: 10px;"> أعمالنا </p>
</div>
    <div  style="text-align: center;"> -->
<!--      <img class="img-fluid" src="images/wo.png" style="width: 100%;"> -->
<!--  <img clss="img-fluid" src="images/ourwork.png" style="width: 500px;"> -->
<!--     </div>
    <div class="our-work d-flex flex-row justify-content-center p-1 m-1 text-center">


        <div class="our-work-2 d-flex flex-column flex-md-row  p-2 m-2 text-center">
            <div class="col-md-3 p-3">
                <div class="our-vision-2 border shadow p-3 bg-body rounded "
                    style=" width: 300px; height: 240px;">
                    <img class="rounded-3 img-fluid" src="images/1.png"
                        style="width: 220px ; padding-bottom: 30px;">

                </div>
            </div>

            <div class="col-md-3 p-3">
                <div class="our-messege-2  border shadow p-3  bg-body rounded"
                    style=" width: 300px; height: 240px;">
                    <img class="rounded-3 img-fluid" src="images/2.png" style="width:220px ; padding-bottom: 30px;">

                </div>
            </div>

            <div class="col-md-3 p-3">
                <div class="our-logo-2  border shadow p-3  bg-body rounded"
                    style=" width: 300px; height: 240px;">
                    <img class="rounded-3 img-fluid" src="images/3.png" style="width:220px ; padding-bottom: 30px;">

                </div>
            </div>

            <div class="col-md-3 p-3">
                <div class="our-logo-2  border shadow p-3  bg-body rounded"
                    style=" width: 300px; height: 240px;">
                    <img class="rounded-3 img-fluid" src="images/4.png"
                        style="width: 220px ; padding-bottom: 30px;">

                </div>
            </div>

        </div>

    </div>
</div> -->


<!--

<div id="jquery-script-menu">
    <div class="jquery-script-center">

        <div class="jquery-script-ads">
            <script type="text/javascript">
                google_ad_client = "ca-pub-2783044520727903";
                /* jQuery_demo */
                google_ad_slot = "2780937993";
                google_ad_width = 728;
                google_ad_height = 90;

            </script>
            <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
        </div>
        <div class="jquery-script-clear"></div>
    </div>
</div>


    <form id="mainForm" action="dialer.html" method="POST">
        <div class="input">
            <input type="text" id="phoneField1" name="phoneField1" class="phone-field" />
        </div>

    </form>

</div>
-->

<div id="contact" style="height: 60px; width: 100%; background-color: #166DE1; margin-bottom: 10px;">
    <p style="color: white; text-align: center; font-size: 24px; padding-top: 10px;"> اتصل بنا </p>
</div>
<!--   <img class="img-fluid" src="images/con.png" style="width: 100%;"> -->
<div class="contactus d-flex flex-row p-3 ">

    <div data-wow-delay="1.5s" class="our-vision col-md-4 span3 wow bounceInRight"
         style="visibility: visible; animation-delay: 1.5s; animation-name: bounceInRight;">
    </div>


    <div class="formCountainer p-3 "
         style="background-color: white;  width: 600px; height: 400px;  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">


        <form class="d-flex flex-column p-1" id="contactForm">
            @csrf

            <div class="form-group ">
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="الاسم"
                       style="border:none; border-bottom: 1px dotted; margin-bottom: 10px;  margin-top: 10px;">
            </div>
            <div class="form-group">
                <input type="number" name="phone" id="exampleFormControlInput1" placeholder="الجوال"
                       class="form-control"
                       style="border:none; border-bottom: 1px dotted; margin-bottom: 10px;  margin-top: 10px;">
            </div>

            <div class="form-group">
                <input type="email" name="email" id="exampleFormControlInput1" placeholder="الايميل"
                       class="form-control"
                       style="border:none; border-bottom: 1px dotted; margin-bottom: 10px;  margin-top: 10px;">
            </div>

            <div class="form-group" style="margin-bottom: 10px;">
                <input type="text" name="message" class="form-control" id="exampleFormControlInput1"
                       placeholder="الرسالة"
                       style="border:none; border-bottom: 1px dotted;">
            </div>


            <div class="d-flex flex-wrap justify-content-end">
                <button type="button" class="btn btn-outline-secondary contact-btn"
                        style=" background-color: #166DE1; margin-bottom: 10px; width: 100%; color: white;  ">
                    ارسال
                </button>
            </div>
        </form>

        <div class=" p-2" style="font-size: small; border-bottom: 1px dotted #c7c7c7;">
            <a
                href="https://www.google.com/maps/place/%D8%B0%D8%A7+%D9%87%D9%8A%D8%AF+%D9%83%D9%88%D8%A7%D8%B1%D8%AA%D8%B1%D8%B2+%D8%A8%D8%B2%D9%86%D8%B3+%D8%A8%D8%A7%D8%B1%D9%83%E2%80%AD/@21.6024419,39.1082886,15z/data=!4m5!3m4!1s0x0:0xf11d981517c55a1f!8m2!3d21.6024412!4d39.1082997">
                <img src="{{asset('site/images/location.png')}}"> عنوان شركة اكتفيشن - السعودية </a>
            <br>
            <br>
            <a href="tel:+966 125780111" dir="ltr"> اتصل بنا <img src="{{asset('site/images/phone.png')}}"
                                                                  style="width: 18px;"></a>
        </div>

        <div class="d-flex  flex-wrap justify-content-center pt-4 pb-1" style="width: 100%;">
            @foreach($socials as $social)
            <a class=" mx-1" href="{{$social->url}}"> <img
                    src="{{$social->image}}"
                    style="width: 25px;margin-right: 5px;"> </a>
            @endforeach
        </div>


        </form>

    </div>

    <div data-wow-delay="1.5s" class="our-logo col-md-4 span3 wow bounceInRight"
         style="visibility: visible; animation-delay: 1.5s; animation-name: bounceInRight;">

    </div>
</div>
</div>


<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14838.306627623553!2d39.1082886!3d21.6024419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf11d981517c55a1f!2z2LDYpyDZh9mK2K8g2YPZiNin2LHYqtix2LIg2KjYstmG2LMg2KjYp9ix2YM!5e0!3m2!1sar!2ssa!4v1635332690710!5m2!1sar!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
-->

<div class="con" style="width: 100%; height: 450px; position: relative;">

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14838.306627623553!2d39.1082886!3d21.6024419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf11d981517c55a1f!2z2LDYpyDZh9mK2K8g2YPZiNin2LHYqtix2LIg2KjYstmG2LMg2KjYp9ix2YM!5e0!3m2!1sar!2ssa!4v1635332690710!5m2!1sar!2ssa"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>

    <!-- Footer Area Start -->
    <footer class="footer-area"{{asset('site/')}}>
        <div class="footer-content-area" style="background-color:#166DE1; ">

            <div class="flex-column ">
                <div class="col-lg-12">
                    <div class="footer-content">


                        <p style="color: white; padding-top: 20px; text-align: center; font-size: small;">
                                {{$settings['privacy_en']}}
                        <div class="d-flex pb-4 flex-wrap justify-content-center pb-1" style="width: 100%;">
                            @foreach($socials as $social)
                            <a class=" mx-1" href="{{$social->url}}"> <img
                                    src="{{$social->image}}" style="width: 20px;margin-right: 5px;">
                            </a>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </footer>


    <script type="text/javascript">
        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>

    <script>
        $("#menu_button").on("click", function () {
            $("#menu_list").removeClass("d-none");
        });

    </script>


    <script>
        $('.service .nav-tabs>li').on('click', function () {
            $(this).parent().find('li').removeClass('active');
            $(this).addClass('active');
        });
    </script>


    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>

    <script type="text/javascript">window.$crisp = [];
        window.CRISP_WEBSITE_ID = "2d5e11f1-8089-42d9-b30b-67e5477b5ef9";
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>

    <!-- contact_us ajax code  //-->


    <script>
        $(".contact-btn").on('click', function (e) {
            e.preventDefault();
            var form = $('#contactForm').get(0);
            var formData = new FormData(form);
            var oldText = $(this).text();
            $.ajax({
                url: "{{route('site.contact.us')}}",
                type: "POST",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('.site-btn').removeAttr("disabled").css({
                        opacity: '1'
                    }).text(oldText);
                    if (data.key == 'success') {
                        setInterval(function () {
                            location.assign(data.msg);
                        }, 3000);
                        swal({
                            title: "تم ارسال الرساله بنجاح",
                            type: 'success',
                            timer: 5000,
                            showCloseButton: true,
                            showConfirmButton: false,
                            animation: true,
                        }).catch(swal.noop);
                    } else {
                        Swal.fire({
                            title: data.msg,
                            position: 'top',
                            timer: 3000,
                            type: 'error',
                            showCloseButton: false,
                            showConfirmButton: false,
                            animation: true
                        })
                    }
                }
            });
        });
    </script>


</body>

</html>
