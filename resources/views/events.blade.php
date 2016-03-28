<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>feedback system</title>
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css')}}" rel="stylesheet">
    <link id="css-preset" href="{{ URL::asset('css/presets/preset1.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

<!--.preloader-->
<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/slider/i03.jpg)">
                <div class="caption">

                </div>
            </div>

            <div class="item" style="background-image: url(images/slider/3.jpg)">
                <div class="caption">

                </div>
            </div>
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i><</i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i>></i></a>

        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                </button>
                <a class="navbar-brand" href="index"></a>
            </div>
            <div class="collapse navbar-collapse">

            </div>
        </div>
    </div>
</header><!--/#home-->
<section id="services">
    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">

                </div>
            </div>
        </div>
        <div class="text-center our-services">
            <div class="row">
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

                </div>
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">

                </div>
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                    <div class="service-info">

                    </div>
                </div>
            </div>
        </div>
        </div>
</section><!--/#services-->




    <script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/mousescroll.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js')}}"></script>

</body>
</html>