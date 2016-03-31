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
    <link href="{{ URL::asset('css/editedStyles.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">

    <style>
        .event-div{
            background-repeat: no-repeat;
            background-size: 100% auto;
            border-radius: 20px;
            text-align: center;
            height: 300px;
        }
        .popover {
            background: rgba(10,10,10,0.5);
        }

        .popover.bottom .arrow:after {
            border-bottom-color: rgba(10,10,10,0.5);
        }
    </style>
</head><!--/head-->

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: rgba(0,0,0,0.9)">
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(240,40,40)">
    <div class="container-fluid">
        <div id="logo" class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <img class="img-responsive" src="{{ URL::asset('images/logo.png')}}" style="margin-left: auto; margin-right: auto;">
        </div>
        <div class="navbar ">
            <div class="nav_btn"><a href="/"> Home </a></div>
            <div class="nav_btn"><a href="/events"> Events </a></div>
            <div class="nav_btn"><a href=""> Points </a></div>
            <div class="nav_btn"><a href=""> Draw </a></div>
            <div class="nav_btn"><a href=""> Live </a></div>
            <br>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#home">Timeline</a></li>
                    <li><a href="#calendar">Calendar</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>

</nav>
<br>
<!--<div class="row" style="height: 50%;background-image: url(images/sports_7480.jpg); background-size: 100%; background-repeat: no-repeat">-->
<section id="home" class="cd-horizontal-timeline" style="background-image: url(images/sports_7480.jpg);background-repeat: no-repeat;margin-top: 0px;background-size: 100% 100%">
    <div class="row">
        <div class="timeline" style="height: 75px">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="01/03/2014" class="selected"><label class="label label-success" style="font-size: 100%">01 Mar</label></a></li>
                        <li><a href="#0" data-date="03/03/2014"><label class="label label-success" style="font-size: 100%">03 Mar</label></a></li>
                        <li><a href="#0" data-date="05/03/2014"><label class="label label-success" style="font-size: 100%">05 Mar</label></a></li>
                        <li><a href="#0" data-date="07/03/2014"><label class="label label-success" style="font-size: 100%">07 Mar</label></a></li>
                        <li><a href="#0" data-date="09/03/2014"><label class="label label-success" style="font-size: 100%">09 Mar</label></a></li>
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
            <li class="selected" data-date="01/03/2014" style="">
                <div class="well event-div" style="background-image: url(images/sports-hd-wallpapers-2_1.jpg);">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
                        <h2 class="text-shadow" style="color: #c0c0c0;">Horizontal Timeline</h2>
                        <em class="text-shadow" >January 16th, 2014</em>
                        <p class="text-shadow">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div>

                </div>
            </li>

            <li data-date="03/03/2014">
                <div class="well event-div" style="background-image: url(images/o_1a85kvgsv16el1ec1r1egmd1nuo19.jpg);background-repeat: no-repeat;background-size: 100% auto">
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%" >
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2) ; max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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
                    <div class="well" style="background: rgba(122, 130, 136, 0.2); max-height: 100%">
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


<section id="calendar" style="">
    <div class="container">
        <div class="row">
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
        </div>
        <div class="row">
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
            <button data-toggle="popover" data-trigger="hover" data-content="<img src='http://logok.org/wp-content/uploads/2014/04/Apple-logo-grey-880x625.png' width='100%' height='100%'/>" data-placement="auto top" class="btn" style="height: 150px; width: 155px;margin: 4px 4px 4px 4px;border-radius: 10px;background-color: rgba(240,40,40,0.5);border: 2px grey solid">Button 1</button>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover({
                html: true,
                trigger: 'hover'
            });
        });
    </script>
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