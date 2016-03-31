<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MoraSpirit</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css')}}" rel="stylesheet">
    <link id="css-preset" href="{{ URL::asset('css/presets/preset1.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">

    <style>
        .event-div{
            background-repeat: no-repeat;
            background-size: 100% auto;
            border-radius: 20px;
            text-align: center;
            height: 400px;
        }
    </style>
</head><!--/head-->

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(240,40,40)">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/moraspirit.png" alt="moraspirit" width="200"/></a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#calendar">Calendar</a></li>
                    <li><a href="#About">About</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--<div class="row" style="height: 50%;background-image: url(images/sports_7480.jpg); background-size: 100%; background-repeat: no-repeat">-->
<section id="home" class="cd-horizontal-timeline" style="background-image: url(images/sports_7480.jpg);background-size: 100% 85%;background-repeat: no-repeat;background-size: 100% 900px;margin-top: 0px; background-color: black">
    <div class="row">
        <div class="timeline" style="height: 75px">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="01/03/2014" class="selected"><label class="label label-success" style="font-size: 100%">01 Mar</label></a></li>
                        <li><a href="#0" data-date="03/03/2014"><label class="label label-success" style="font-size: 100%">03 Mar</label></a></li>
                        <li><a href="#0" data-date="05/03/2014"><label class="label label-success" style="font-size: 100%">05 Mar</label></a></li>
                        <li><a href="#0" data-date="06/03/2014"><label class="label label-success" style="font-size: 100%">07 Mar</label></a></li>
                        <li><a href="#0" data-date="07/03/2014"><label class="label label-success" style="font-size: 100%">09 Mar</label></a></li>
                        <li><a href="#0" data-date="11/03/2014"><label class="label label-success" style="font-size: 100%">11 Mar</label></a></li>
                        <li><a href="#0" data-date="13/03/2014"><label class="label label-success" style="font-size: 100%">13 Mar</label></a></li>
                        <li><a href="#0" data-date="15/03/2014"><label class="label label-success" style="font-size: 100%">15 Mar</label></a></li>
                        <li><a href="#0" data-date="17/03/2014"><label class="label label-success" style="font-size: 100%">17 Mar</label></a></li>
                        <li><a href="#0" data-date="19/03/2014"><label class="label label-success" style="font-size: 100%">19 Mar</label></a></li>
                        <li><a href="#0" data-date="21/03/2014"><label class="label label-success" style="font-size: 100%">21 Mar</label></a></li>
                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->

            </div> <!-- .events-wrapper -->
            <ul class="cd-timeline-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul>
        </div> <!-- .timeline -->
    </div>

    <div class="events-content">
        <ol>
            <li class="selected" data-date="01/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-2_1.jpg);">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>

                </div>
            </li>

            <li data-date="03/03/2014">
                <div class="well event-div" style="background-image: url(images/o_1a85kvgsv16el1ec1r1egmd1nuo19.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="05/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-5.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="07/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="09/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="11/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="13/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="15/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="17/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="19/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="21/03/2014">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-9.jpg);background-repeat: no-repeat;background-size: 100% auto;border-radius: 20px">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2)">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow">January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                        </p>
                    </div>
                </div>
            </li>
        </ol>

    </div> <!-- .events-content -->
    <div class="row" style="text-align: center;margin-top: -10px">
        <a id="tohash" href="#calendar"><span class="glyphicon glyphicon-chevron-down"></span></a>
    </div>
</section>
<!--</div>-->


<section id="calendar">
    <div class="container">
        <div class="jumbotron">
            <h1>My First Bootstrap Page</h1>
            <p>Resize this responsive page to see the effect!</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h3>Column 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Column 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Column 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>
</section><!--/#services-->




<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main2.js')}}"></script>

</body>
</html>