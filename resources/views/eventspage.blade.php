@extends('frontend.layout')

@section('content')

{{--<!DOCTYPE html>--}}
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
    <link href="{{ URL::asset('css/timeline.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

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
            border-radius: 5px;
        }

        #calendar {
            width:98%;
            align-content: center;
            background-color: rgba(205, 168, 185, 0.83);
            margin-bottom: -50px;
            margin-left: 1%;
            border-radius: 10px ;
        }

        .fc-event {
            height: 1.5em;
            background-color: #062a00;
            font-size: 15px;
        }

        .fc-more{
            color: #000000;
        }

        .fc-day{
            height: 20px;
        }

    </style>

    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({

                 events: function(title,start,timezone,callback){
                    $.ajax({
                        url:'ajaxevents',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            // our hypothetical feed requires UNIX timestamps
                            start: start.unix()
                        },

                        success:function(eve){

                            console.log(eve);
                            var events = [];
                            if(!!eve){
                               $.map(eve,function(r) {
                                    events.push({
                                        title:r.title,
                                        start:r.start,
                                        color:r.color,
                                        imageurl:r.imageurl
                                    });

                                });
                                callback(events);
                                $('#calendar').fullCalendar('rerenderEvents');
                            }

                         // console.log(events);
                        }
                    });
                },


                defaultDate: '2016-01-12',
                height: 550,
                editable: false,
                eventLimit: true, // allow "more" link when too many event
                theme: true,
                contentHeight: 700,

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

<body>


{{--<section id="timeline" style="max-height: 60%; max-width: 100%; align-content: center" class="cd-horizontal-timeline; background-color: #e3dcd9">--}}

<div class="container-fluid" id="timeline" style="max-height: 80%; max-width: 100%; align-content: center;background-color: #e3dcd9" class="cd-horizontal-timeline">
    <!-- JavaScript-->
      <script type="text/javascript" src="{{ URL::asset('js/timeline.js')}}"></script>

    <script>

        var timeline = new TL.Timeline('timeline','examples/welcome.json', {
            theme_color: "#990000",
            ga_property_id: "UA-27829802-4"
        });
    </script>

</div>

{{--</section>--}}
<section id="calculator" style="background-color: #e3dcd9; height: 100%; background-image: url('images/sport.jpg')">
    <h1 style="color: #2ca02c"><center>SLUG Calendar</center></h1>
    <br><br>
    <div id='calendar'></div>
</section>




<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js')}}"></script>
{{--<script type="text/javascript" src="{{ URL::asset('js/wow.min.js')}}"></script>--}}
<script type="text/javascript" src="{{ URL::asset('js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js')}}"></script>


</body>
{{--</html>--}}
@endsection