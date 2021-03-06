<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SLUG 2016 | </title>

    {{--<!-- Bootstrap Core CSS -->--}}
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!--<link href="fonts/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/backend/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{URL::asset('css/backend/custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/backend/green.css.css')}}" rel="stylesheet">


    <script src="js/jquery.min.js"></script>
    <link href="{{URL::asset('js/jquery.min.js')}}">

    {{--<!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->--}}

</head>
<body>
    <div class="container" style="/*margin-top: 100px*/">
        @yield('content')
    </div>

</body>