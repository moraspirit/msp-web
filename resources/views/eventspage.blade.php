@extends('frontend.layout')

@section('content')

{{--<!DOCTYPE html>--}}



    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
--}}
{{--
    <link href="{{ URL::asset('css/timeline.css')}}" rel="stylesheet">
--}}
{{--
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
--}}
{{--

    <style>
        .hover-end{padding:0;margin:0;font-size:75%;text-align:center;position:absolute;bottom:0;width:100%;opacity:.8}
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
        html, body,footer {
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
            overflow: auto;
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

    </style>--}}

{{--    <script>

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
                        eventElement.find("div.fc-content").prepend("<img src='" + event.imageurl +"' width='20' height='20'>");
                    }
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                // add event name to title attribute on mouseover
                eventMouseover: function(event, jsEvent, view) {
                    $('.fc-event-inner', this).append('<div id=\"'+event.id+'\" class=\"hover-end\">'+$.fullCalendar.formatDate(event.end, 'h:mmt')+'</div>');
                },

            });

        });

    </script>--}}



{{--<section id="timeline" style="max-height: 60%; max-width: 100%; align-content: center" class="cd-horizontal-timeline; background-color: #e3dcd9">--}}
{{--

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
--}}

{{--</section>--}}
{{--
<div id="cal" style="background-color: #0b4e00; height: 122%">
    <br>
    <h1 style="color: #2ca02c"><center>SLUG Calendar</center></h1>
    <br>
    <div id='calendar'></div>
</div>

<div class="row" id="footer">
    <div class="col-sm-12 text-center mspfooter" style="background-color: #00b3ee">
        <div class="container-fluid">
            <h2 style="color: #2ac6f7">Footer</h2>
        </div>

    </div>
</div>
--}}
<br />
<div class="container">
    <h1 class="font-oswald">EVENT SCHEDULE</h1>
    <div data-tockify-component="calendar" data-tockify-calendar="slug.2016"></div>

</div>
<script data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>


</body>
{{--</html>--}}
@endsection