<html>

<head>

    <title>MoraSpirit</title>
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/editedStyles.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</head>

<body style="overflow-x: hidden;">

@section('nav')
<div class="container-fluid">
    <!--MoraSpirit Header-->

    <div class="col-sm-12 mspheader ">
        <div id="logo" class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <img class="img-responsive" src="{{ URL::asset('images/logo.png')}}" style="margin-left: auto; margin-right: auto;">
        </div>
        <div class="navbar">
            <div class="nav_btn"><a href="/"> Home </a></div>
            <div class="nav_btn"><a href="/events"> Events </a></div>
            <div class="nav_btn"><a href=""> Points </a></div>
            <div class="nav_btn"><a href=""> Draw </a></div>
            <div class="nav_btn"><a href=""> Live </a></div>
        </div>
    </div>
</div>
@stop

@section('content')
    {{--custom content of the page--}}
    @stop


@section('script')
    {{--custom script goes here--}}
    @stop



