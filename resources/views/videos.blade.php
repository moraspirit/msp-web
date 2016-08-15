@extends('frontend.layout')

@section('meta')
    <meta property="og:title" content="SLUG 2016 - VIDEOS" />
    <meta property="og:description" content="slug 2016 video gallery." />
    <meta property="og:image" content="http://sports.moraspirit.com/images/social.png" />
@stop
@section('title', 'SLUG 2016 - VIDEOS')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/ycp-2.css')}}" />
@stop

@section('content')
    <div class="container">
        <h1 class="font-oswald side-lines text-center">SLUG VIDEO GALLERY</h1>

        <div class="font-coda text-uppercase" style="padding: 20px 0 40px 0;">
            <div id="ibacordotcom-content">
                <div class="ibacordotcom-unit ibacordotcom-vid-kenca">
                    <div class="ibacordotcom_vid_play"></div>
                </div>
                <div class = "ibacordotcom-unit ibacordotcom-vid-katuhu">
                    <div class="ibacordotcom_youtube_channels"></div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    @parent
    <script src="{{URL::asset('js/ycp-2.js')}}"></script>

    <script>
        ibacor_ycp(
                channels_name = 'moraspiritNews',
                type = 'forUsername', // type='forUsername' (by user) or type='id' (by channel)
                list_count = 5, // number of videos playlist
                autoplay = false, // true or false
                apikey = 'AIzaSyDOniRcw5l-gm2Lr2h6LpaQFW8IQphOY64'
        );
    </script>

@endsection