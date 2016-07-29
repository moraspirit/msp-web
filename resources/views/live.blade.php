@extends('frontend.layout')
<title>SLUG 2016 - Live</title>

@section('meta')
    <meta property="og:title" content="SLUG 2016 - LIVE"/>
    <meta property="og:description" content="slug 2016 live stream."/>
    <meta property="og:image" content="http://sports.moraspirit.com/images/social.png"/>
@stop
@section('title', 'SLUG 2016 - POINTS TABLE')
@section('content')
    <div class="container">
        <h1 class="font-oswald side-lines text-center text-uppercase">Live stream</h1>
        <br>

        <div class="row" style="padding-bottom: 60px;">
            <br>
            <div class="col-md-8 col-xs-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hH0gFHFSECg" frameborder="0"
                            allowfullscreen></iframe>
                </div>

            </div>
            <div class="col-md-4 col-xs-12">

                <div class="hidden-lg hidden-md">
                    <br/>
                </div>
                <a class="twitter-timeline" height="600px" data-theme="dark" href="https://twitter.com/moraspiritNews"></a>


            </div>
        </div>
    </div>
@endsection

@section('script')
    @parent

    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection
