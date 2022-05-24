<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Julie – Minimal Fashion Bootstrap 5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href={{ asset("assets/img/favicon.ico") }} type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href={{ asset("assets/css/bootstrap.min.css") }} rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href={{ asset("assets/css/headroom.css") }} rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href={{ asset("assets/css/animate.css") }} rel="stylesheet" />
    <!--== Ionicons CSS ==-->
    <link href={{ asset("assets/css/ionicons.css") }} rel="stylesheet" />
    <!--== Material Icon CSS ==-->
    <link href={{ asset("assets/css/material-design-iconic-font.css") }} rel="stylesheet" />
    <!--== Elegant Icon CSS ==-->
    <link href={{ asset("assets/css/elegant-icons.css") }} rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href={{ asset("assets/css/font-awesome.min.css") }} rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href={{ asset("assets/css/swiper.min.css") }} rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href={{ asset("assets/css/fancybox.min.css") }} rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href={{ asset("assets/css/slicknav.css") }} rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href={{ asset("assets/css/style.css") }} rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->
    @livewireStyles
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">

    <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

    @include('parts.header')

    @yield('content')

    @include('parts.footer')


        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

<!--=======================Javascript============================-->

    <!--=== jQuery Modernizr Min Js ===-->
    <script src={{ asset("assets/js/modernizr.js") }}></script>
    <!--=== jQuery Min Js ===-->
    <script src={{ asset("assets/js/jquery-main.js") }}></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src={{ asset("assets/js/jquery-migrate.js") }}></script>
    <!--=== jQuery Popper Min Js ===-->
    <script src={{ asset("assets/js/popper.min.js") }}></script>
    <!--=== jQuery Bootstrap Min Js ===-->
    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
    <!--=== jQuery Headroom Min Js ===-->
    <script src={{ asset("assets/js/headroom.min.js") }}></script>
    <!--=== jQuery Swiper Min Js ===-->
    <script src={{ asset("assets/js/swiper.min.js") }}></script>
    <!--=== jQuery Fancybox Min Js ===-->
    <script src={{ asset("assets/js/fancybox.min.js") }}></script>
    <!--=== jQuery Slick Nav Js ===-->
     <script src={{ asset("assets/js/slicknav.js") }}></script>
     <!--=== jQuery Countdown Js ===-->
      <script src={{ asset("assets/js/countdown.js") }}></script>

      <!--=== jQuery Custom Js ===-->
     <script src={{ asset("assets/js/custom.js") }}></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </div>
@livewireScripts

    <script>

        window.addEventListener('alert', event => {

            toastr[event.detail.type](event.detail.message,

                event.detail.title ?? ''), toastr.options = {

                "closeButton": true,

                "progressBar": true,

            }

        });

    </script>

</body>
