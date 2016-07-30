@extends('frontend.layout')

@section('meta')
    <meta property="og:title" content="SLUG 2016 - EVENTS" />
    <meta property="og:description" content="slug 2016 event schedule." />
    <meta property="og:image" content="http://sports.moraspirit.com/images/social.png" />
@stop
@section('title', 'SLUG 2016 - EVENTS')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/monthly.css')}}" />
@stop
@section('content')

<div class="container" style="padding-bottom: 20px;">
    <h1 class="font-oswald side-lines text-center">EVENT SCHEDULE</h1>
    <div class="monthly" id="mycalendar"></div>

    {{--<div data-tockify-component="calendar" data-tockify-calendar="slug.2016"></div>--}}

</div>
{{--
<script data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
--}}

{{--</html>--}}
@endsection

@section('script')
    @parent

    <script type="text/javascript" src="{{URL::asset('js/monthly.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#mycalendar').monthly({
                mode: 'event',
                xmlUrl: 'events.xml'
            });
        });
    </script>
@endsection
