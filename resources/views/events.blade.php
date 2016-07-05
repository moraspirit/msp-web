@extends('frontend.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MoraSpirit</title>




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
            height: 100%;
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

        .table{
            border-radius: 10px;
        }

        #calendar {
            width:100%;
            align-content: center;
            background-color: #e3b03f;
            margin-bottom: -50px;
            border-radius: 10px ;
        }

        .fc-event {
            height: 1.9em;
            background-color: #062a00;
        }

        .fc-more{
            color: #000000;
        }

    </style>

    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                defaultDate: '2016-01-12',
                height: 550,
                editable: false,
                eventLimit: true, // allow "more" link when too many event

                events: [
                    {
                        title: 'Volleyball',
                        start: '2016-01-01',
                        //imageurl:'icons/tennis.png',
                        color: '#C2185B'

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
                    },

                ],
                eventRender: function(event, eventElement) {
                    if (event.imageurl) {
                        eventElement.find("div.fc-content").prepend("<img src='" + event.imageurl +"' width='30' height='30'>");
                    }
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                // add event name to title attribute on mouseover
                eventMouseover: function(event, jsEvent, view) {
                    if (view.name !== 'agendaDay') {
                        $(jsEvent.target).attr('title', event.title);
                    }
                }
            });

        });

    </script>

</head><!--/head-->

<body data-spy="scroll"  data-offset="50" data-target=".navbar"  >


<section id="timeline" style="max-height: 60%; max-width: 100%; align-content: center" class="cd-horizontal-timeline; background-color: #e3dcd9">

<div class="container-fluid">
    <!-- JavaScript-->
      <script type="text/javascript" src="{{ URL::asset('js/timeline.js')}}"></script>
    <script>
        var timeline = new TL.Timeline('timeline', 'examples/welcome.json', {
            theme_color: "#990000",
            ga_property_id: "UA-27829802-4"
        });
    </script>
</div>

</section>
<section id="calculator" style="background-color: #e3dcd9; background-image: url('images/sport.jpg')">
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
@endsection