<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SLUG 2016 results / points">
    <meta name="author" content="moraspirit">
    <title>SLUG 2016 MORASPIRIT</title>
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

    {{--Favicon--}}
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon//favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicon//manifest.json">
    <link rel="mask-icon" href="/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


</head>

<div class="container-fluid" id="banner" >
    <div class="row" style="background-color: firebrick;">
        <div class="container" style="color: white">
            <h5 class="pull-left" style="font-family: 'Coda', cursive;">www.sport.moraspirit.com</h5>
            <h5 class="pull-right text-uppercase" style="font-family: 'Coda', cursive;">Sri Lanka University Games - 2016</h5>
        </div>
    </div>
    <div style="background-color: #fe0405;margin-right: -15px">
        <img class="pull-right" src="{{URL::asset('images/top.png')}}" alt="" width="110%">
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">

    <div class="container text-uppercase">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class = "navbar-brand" href = "{{url('/')}}"> <h4 class="pull-left" style="font-family: 'Coda', cursive;margin-top: 0px">SLUG 2016</h4></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/events')}}">Events</a>
                </li>
                <li>
                    <a href="{{url('/loadpointstable')}}">Points Table</a>
                </li>
                <li>
                    <a href="#Draw">Draw</a>
                </li>
                <li>
                    <a href="#Live">Live</a>
                </li>
                <li>
                    <a href="http://moraspirit.com/">Moraspirit</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@yield('content')



{{--@stop--}}

@section('con')
    {{--custom content of the page--}}
    @stop


@section('script')
    {{--custom script goes here--}}
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    @stop




