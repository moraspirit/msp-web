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
    <link href="{{ URL::asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
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

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

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

        .tl-timemarker-content{
        background-color: #0b4e00;
        }

        .tl-attribution{
            display: none;
        }

        .fc-toolbar{
            display: none;
        }

        .tl-slide, .tl-slide-titleslide{
            background-color: #83dfff;
        }

        .cal-row-fluid cal-row-head{
            background-color: #002a80;
        }


        #calendar {
            width:1330px;
            align-content: center;
            margin-left:10px;
            background-color: #e3b03f;
            margin-bottom: -50px;
            border-radius: 10px ;
        }


    </style>

    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                defaultDate: '2016-01-12',
                height: 500,
                editable: false,
                eventLimit: true, // allow "more" link when too many events



                events: [
                    {
                        title: 'Volleyball',
                        start: '2016-01-01'

                    },
                    {
                        title: 'Long Event',
                        start: '2016-01-07'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-01-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-01-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2016-01-11'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-01-12T10:30:00',
                        end: '2016-01-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2016-01-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-01-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2016-01-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2016-01-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2016-01-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        start: '2016-01-28'
                    }

                ]
            });

        });

    </script>

</head><!--/head-->

<body data-spy="scroll"  data-offset="50" data-target=".navbar"  >

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(240,40,40)">
    <div class="container-fluid">
        <div id="logo" class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <img class="img-responsive" src="{{ URL::asset('images/logo.png')}}" style="margin-left: auto; margin-right: auto;">
        </div>
        <div class="navbar">
            <div class="nav_btn"><a href="/"> Home </a></div>
            <div class="nav_btn"><a href="/events"> Events </a></div>
            <div class="nav_btn"><a href=""> Points </a></div>
            <div class="nav_btn"><a href=""> Draw </a></div>
            <div class="nav_btn"><a href=""> Live </a></div>
            <br>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#timeline">Timeline</a></li>
                    <li><a href="#calendar" >Calendar</a></li>
                </ul>
            </div>
        </div>
        </div>
</nav>

<section id="timeline" style="max-height: 55%; max-width: 100%; align-content: center" class="cd-horizontal-timeline; background-color: #e3dcd9">

<div class="container-fluid">
    <!-- JavaScript-->
      <script type="text/javascript" src="{{ URL::asset('js/timeline.js')}}"></script>
    <script>
        var timeline = new TL.Timeline('timeline', 'examples/welcome.json', {
            theme_color: "#990000",
            ga_property_id: "UA-27829802-4"
        });
    </script>
    <h1>Calendar</h1>
</div>

</section>
<section id="calculator" style="background-color: #e3dcd9">
    <div id='calendar'></div>
</section>

<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>


</body>
</html>