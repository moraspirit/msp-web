@extends('frontend.layout')

@section('meta')
    <meta property="og:title" content="SLUG 2016 - DOWNLOADS"/>
    <meta property="og:description" content="slug 2016 downloads."/>
    <meta property="og:image" content="http://sports.moraspirit.com/images/social.png"/>
@stop
@section('title', 'SLUG 2016 - DOWNLOADS')
@section('content')
    <div class="container text-uppercase-" style="padding-top: 60px; padding-bottom: 60px;">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <ul class="list-group text-uppercase">
                <a href="download/track_n_field_2016.pdf"  target="_blank">
                    <li class="list-group-item">Track and Field Results</li>
                </a>
            </ul>
        </div>

    </div>


@endsection

@section('script')
    @parent
@endsection