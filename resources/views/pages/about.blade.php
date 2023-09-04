@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
    <link rel="stylesheet" href={{asset("css/vendors/linericon/style.css")}}>
    <link rel="stylesheet" href={{asset("css/font-awesome.min.css")}}>
    <link rel="stylesheet" href={{asset("css/vendors/owl-carousel/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("css/vendors/lightbox/simpleLightbox.css")}}>
    <link rel="stylesheet" href={{asset("vendors/nice-select/css/nice-select.css")}}>
    <link rel="stylesheet" href={{asset("css/vendors/animate-css/animate.css")}}>
    <link rel="stylesheet" href={{asset("css/vendors/swiper/css/swiper.min.css")}}>
    <link rel="stylesheet" href={{asset("vendors/scroll/jquery.mCustomScrollbar.css")}}>
    <!-- main css -->
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href={{asset("css/responsive.css")}}>
</head>

<body>

    <section class="home_slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
               
                <div class="swiper-slide"><img src="img/slider-2.jpg" alt="">
                    <div class="slider_text">
                        <h1> candies</h1>
                        <p>We offer you the best types of sweets at low prices.</p>
                      
                    </div>
                </div>
                <div class="swiper-slide"><img src="img/slider-1.jpg" alt="">
                    <div class="slider_text">
                        <h1>
                            candies</h1>
                        <p>We offer you the best types of sweets at low prices.</p>
                      
                    </div>
                </div>
                <div class="swiper-slide"><img src="img/slider-3.jpg" alt="">
                    <div class="slider_text">
                        <h1>
                            candies</h1>
                        <p>We offer you the best types of sweets at low prices</p>
                      
                    </div>
                </div>
               
            </div>
        </div>

    </section>
   



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src={{asset("js/jquery-3.2.1.min.js")}}></script>
    <script src={{asset("js/popper.js")}}></script>
    <script src={{asset("js/bootstrap.min.js")}}></script>
    <script src={{asset("js/stellar.js")}}></script>
    <script src={{asset("js/vendors/lightbox/simpleLightbox.min.js")}}></script>
    <script src={{asset("js/vendors/nice-select/js/jquery.nice-select.min.js")}}></script>
    <script src={{asset("js/vendors/isotope/imagesloaded.pkgd.min.js")}}></script>
    <script src={{asset("js/vendors/isotope/isotope-min.js")}}></script>
    <script src={{asset("js/vendors/owl-carousel/owl.carousel.min.js")}}></script>
    <script src={{asset("js/jquery.ajaxchimp.min.js")}}></script>
    <script src={{asset("js/vendors/counter-up/jquery.waypoints.min.js")}}></script>
    <script src={{asset("js/vendors/counter-up/jquery.counterup.js")}}></script>
    <script src={{asset("js/mail-script.js")}}></script>
    <script src={{asset("js/vendors/popup/jquery.magnific-popup.min.js")}}></script>
    <script src={{asset("js/vendors/scroll/jquery.mCustomScrollbar.js")}}></script>
    <script src={{asset("js/vendors/swiper/js/swiper.min.js")}}></script>
    <script src={{asset("js/theme.js")}}></script>
   

</body>

</html>
@endsection