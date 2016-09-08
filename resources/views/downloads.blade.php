@extends('frontend.layout')
<title>SLUG 2016 - Downloads</title>

@section('meta')
    <meta property="og:title" content="SLUG 2016 - DOWNLOADS"/>
    <meta property="og:description" content="slug 2016 downloads."/>
    <meta property="og:image" content="http://sports.moraspirit.com/images/social.png"/>
@stop
@section('title', 'SLUG 2016 - POINTS TABLE')
@section('content')
    <a href="{{url('/download')}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download Brochure </a>
@endsection

@section('script')
    @parent
@endsection