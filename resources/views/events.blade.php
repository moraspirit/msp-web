<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MoraSpirit</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css')}}" rel="stylesheet">
    <link id="css-preset" href="{{ URL::asset('css/presets/preset1.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/font.default.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/timeline.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/editedStyles.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">

    <style>
        .event-div{
            background-repeat: no-repeat;
            background-size: 100% auto;
            border-radius: 20px;
            text-align: center;
            height: 300px;
        }
        .popover {
            background: rgba(10,10,10,0.5);
        }

        .popover.bottom .arrow:after {
            border-bottom-color: rgba(10,10,10,0.5);
        }
        html, body {
            height:100%;
            width:100%;
            padding: 0px;
            margin: 0px;
        }
        .tl-timeline {
            max-height: 100%;
            max-width: 100%;
        }
    </style>
</head><!--/head-->

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: rgba(0,0,0,0.9)">
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(240,40,40)">
    <div class="container-fluid">
        <div id="logo" class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <img class="img-responsive" src="{{ URL::asset('images/logo.png')}}" style="margin-left: auto; margin-right: auto;">
        </div>
        <div class="navbar ">
            <div class="nav_btn"><a href="/"> Home </a></div>
            <div class="nav_btn"><a href="/events"> Events </a></div>
            <div class="nav_btn"><a href=""> Points </a></div>
            <div class="nav_btn"><a href=""> Draw </a></div>
            <div class="nav_btn"><a href=""> Live </a></div>
            <br>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#timeline">Timeline</a></li>
                    <li><a href="#calender" >Calendar</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</nav>

  <section id="timeline" style="max-height: 55%; max-width: 100%; align-content: center;" >
    <div id="timeline"></div>
    <!-- JavaScript-->
      <script type="text/javascript" src="{{ URL::asset('js/timeline.js')}}"></script>
    <script>
        var timeline = new TL.Timeline('timeline', 'examples/welcome.json', {
            theme_color: "",
            ga_property_id: "UA-27829802-4"
        });
    </script>
  </section>

<section id="calender">

    <div class="container">
        <h1>  Hi there  </h1>
    </div>
</section>

<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js')}}"></script>


</body>
</html>