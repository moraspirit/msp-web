<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--added css for main layout--}}

    <link rel="shortcut icon" sizes="57x57" href="{{URL::asset('images/img.png')}}" />

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    {{--<link href="{{ URL::asset('css/animate.min.css')}}" rel="stylesheet">--}}
    {{--<link href="{{ URL::asset('css/animate.css')}}" rel="stylesheet">--}}
    {{--<link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">--}}
    <link href="{{ URL::asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css')}}" rel="stylesheet">
    <link id="css-preset" href="{{ URL::asset('css/presets/preset1.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/font.default.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/timeline.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/editedStyles.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">

    <title>MoraSpirit</title>



</head>
<body>



<body style="overflow-x: hidden;">

@section('nav')
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(240,40,40); position: relative">

<div class="container-fluid">
    <!--MoraSpirit Header-->

    <div class="col-sm-12 mspheader ">

        <div id="logo" class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <img class="img-responsive" src="{{ URL::asset('images/logo.png')}}" style="margin-left: auto; margin-right: auto;">
        </div>
        <div class="navbar">
            <div class="nav_btn"><a href="{{url('/')}}"> Home </a></div>
            <div class="nav_btn"><a href="{{url('/events')}}"> Events </a></div>
            <div class="nav_btn"><a href="#"> Points </a></div>
            <div class="nav_btn"><a href="#"> Draw </a></div>
            <div class="nav_btn"><a href="#"> Live </a></div>
            <br>

        </div>
    </div>
</div>


</nav>



@yield('content')



{{--@stop--}}

@section('content')
    {{--custom content of the page--}}
    @stop


@section('script')
    {{--custom script goes here--}}

    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/editedStyles.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

    @stop




