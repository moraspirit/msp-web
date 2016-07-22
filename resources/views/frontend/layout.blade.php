<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="moraspirit">
    @yield('meta')

    <title>@yield('title')</title>
    {{--<!-- Bootstrap Core CSS -->--}}
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    {{--<!-- Custom CSS -->--}}
    <link href="{{URL::asset('css/landing-page.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">


    <link href='https://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    @yield('css')

    {{--Favicon--}}
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicon/manifest.json">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

</head>

{{--<body style="overflow-x: hidden;">--}}

{{--@section('nav')--}}
<body>
<div id="wrapper">
    <div class="container-fluid" id="banner">
        <div class="row" style="background-color: firebrick;">
            <div class="container" style="color: white">
                <h5 class="pull-left" style="font-family: 'Coda', cursive;"><a class="no-link" href="/">
                        www.sports.moraspirit.com
                    </a></h5>
                <h5 class="pull-right text-uppercase" style="font-family: 'Coda', cursive;">Sri Lanka University Games -
                    2016</h5>
            </div>

        </div>
        <div class="row header-image--wrapper" style="background-color: #5bc0de;">
            <div class="container">
                {{--<img src="{{URL::asset('images/header.png')}}" width="100%">--}}
                <img class="pull-left" src="{{URL::asset('images/SLUG 2016 LOGO_cropped.png')}}" alt="SLUG 2016 logo" title="SLUG 2016 logo" height="60" style="margin-left: -6px; padding: 5px 0;">

                {{--<img class="pull-right img-circle" src="{{URL::asset('images/MSP HiQuality LOGO (1).png')}}" height="60" style="margin-right: -7px; padding: 4px 0;">--}}
                <div class="header-unis pull-right">
                    <img src="{{URL::asset('logos/COL.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/EST.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/JAF.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/KEL.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/MOR.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/PER.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/RAJ.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/RHU.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/SAB.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/SEA.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/SJP.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/UVA.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/VPA.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('logos/WAY.png')}}" alt="" class="img-circle">
                    <img src="{{URL::asset('images/MSP HiQuality LOGO (1).png')}}" alt="" title="MORASPIRIT logo" class="img-circle">
                </div>

            </div>

        </div>
        {{--<div style="background-color: #fe0405; margin-left: -105px;margin-right: -15px;">
            <img class="pull-right" src="{{URL::asset('images/top.png')}}" alt="" width="100%">
        </div>--}}
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">

        <div class="container text-uppercase">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{url('/')}}"><h4 class="pull-left"
                                                                style="font-family: 'Coda', cursive;margin-top: 0px">
                        SLUG 2016</h4></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{url('/events')}}">Events</a>
                    </li>
{{--                    <li>
                        <a href="{{url('/loadpointstable')}}">Points Table</a>
                    </li>--}}
                    <li>
                        <a href="{{url('/draws')}}">Draws</a>
                    </li>
                    <li>
                        <a href="{{url('/gallery')}}">Gallery</a>
                    </li>
{{--                    <li>
                        <a href="#Live">Live</a>
                    </li>--}}
                    <li>
                        <a target="_blank" href="http://moraspirit.com/">Moraspirit</a>
                    </li>
{{--                    <li>
                        <a target="_blank" href="http://app.moraspirit.com" title="change your profile pictures supporting your university">
                            change ur profiles
                        </a>
                    </li>--}}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    @yield('content')


    <div class="push"></div>

</div>
{{--@stop--}}

@section('con')
    {{--custom content of the page--}}
@stop

@section('footer')
{{--Footer--}}
<footer class="site-footer">
    <div class="msp-love">
        <img src="/images/love_msp.png" alt="moraspirit" class="img-responsive">
    </div>
    <p class="year">2016</p>
    <div class="social">
        <a href="https://www.facebook.com/moraspirit.fanpage"><i id="facebook"
                                                                 class="icon-facebook fa fa-facebook-square"></i></a>

        <a href="https://twitter.com/moraspiritNews"><i id="twitter" class="icon-twitter fa fa-twitter-square"></i></a>
        <a href="http://www.youtube.com/user/moraspiritNews?feature=watch"><i id="youtube"
                                                                              class="icon-youtube fa fa-youtube-square"></i></a>
        <a href="https://plus.google.com/108795907592684921602/posts"><i id="plus"
                                                                         class="icon-google-plus-sign fa fa-google-plus-square"></i></a>
        <a href="http://www.linkedin.com/company/moraspirit-initiative"><i id="linkedin"
                                                                           class="icon-linkedin-sign fa fa-linkedin-square"></i></a>
        <a href="mailto:admin@moraspirit.com"><i id="mail" class="icon-envelope fa fa-envelope-square"></i></a>

    </div>
</footer>
@show

@section('script')
    {{--custom script goes here--}}
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-37983557-2', 'auto');
        ga('send', 'pageview');

    </script>
@show

</body>
</html>