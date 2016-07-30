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


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SLUG
                                    2016</span></a>
                </div>
                <div class="clearfix"></div>


                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{$user = Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3><a href="/auth/logout"> <strong> Log out </strong></a></h3>
                        <ul class="nav side-menu">
                            <li><a href="/bkhome"><i class="fa fa-home"></i> Home </a>
                            </li>
                            <li><a href="/addpoints"><i class="fa fa-bar-chart-o"></i> Add Points </a>
                            </li>
                            <li><a href="/showselectpoints"><i class="fa fa-bar-chart-o"></i> Edit Points </a>
                            </li>
                            <li><a href="/showdeletpoints"><i class="fa fa-bar-chart-o"></i> Delete Points </a>
                            </li>
                            <li><a href="/addsummary"><i class="fa fa-edit"></i> Add Summary </a>
                            </li>
                            <li><a href="/showsummariesedit"><i class="fa fa-edit"></i> Edit Summary </a>
                            </li>
                            <li><a href="/showsummariesdelete"><i class="fa fa-edit"></i> Delete Summary </a>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> Draws </a>
                            </li>
                            <li><a><i class="fa fa-table"></i> Contact </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout"  href="/auth/logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>


        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                <div class="page-title">
                    <div class="title_left">
                        <h3>
                            {{--Calender--}}
                            @yield('content1')
                            <small>
                                {{--Click to add/edit events--}}
                                @yield('content2')
                            </small>
                        </h3>
                    </div>

                    {{-- <div class="title_right">
                         <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                             <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Search for...">
                                 <span class="input-group-btn">
                                     <button class="btn btn-default" type="button">Go!</button>
                                 </span>
                             </div>
                         </div>
                     </div>--}}
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>{{--Calender Events--}} @yield('content3') <small>SLUG 2016</small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="overflow-y: scroll;">

                                @yield('formcontent')

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <footer>
                <div class="">
                    <p class="pull-right">Sri Lankan University Games 2016 by <a>MoraSpirit</a>. |
                        <span class="lead"> <i class="fa fa-paw"></i> SLUG 2016 </span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

        </div>
        <!-- /page content -->
    </div>

</div>

@section('con')
    @end

@section('script')
@show
</body>

</html>