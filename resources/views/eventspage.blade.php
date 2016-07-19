@extends('frontend.layout')

<link rel="stylesheet" type="text/css" href="{{URL::asset('css/monthly.css')}}" />
@section('content')

<div class="container" style="padding-bottom: 20px;">
    <h1 class="font-oswald">EVENT SCHEDULE</h1>
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
