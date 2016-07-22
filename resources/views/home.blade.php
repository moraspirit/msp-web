@extends('frontend.layout')

@section('meta')
    <meta property="og:title" content="SLUG 2016 - HOME" />
    <meta property="og:description" content="slug 2016 overview at a glace." />
    <meta property="og:image" content="" />
@stop
@section('title', 'SLUG 2016 - HOME')
@section('css')
    {{--<link rel="stylesheet" href="{{ URL::asset('css/marquee.css')}}">--}}
@stop
@section('content')

    {{--Marquee to be load in Desktop--}}
    {{--<div id="marqueehead" class="hidden-xs hidden-sm" style="height: 85px; background-color:#e6e6e6; font-family: 'Coda', cursive; max-width: 100%">--}}
        {{--<div id="marquee1" class="container-marquee"--}}
             {{--onmouseover="zxcMarquee.scroll('marquee1',0);"--}}
             {{--onmouseout="zxcMarquee.scroll('marquee1',-1);"--}}
        {{-->--}}
            {{--<div style="position: relative; width: 100%;">--}}
                {{--@foreach($summery as $mkey => $mvalue)--}}
                    {{--<div class="mblock" style="height: 100%;">--}}
                        {{--<center><h5 style=" font-size: 12px">--}}

                                {{--<img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo1'])}}" alt="">--}}
                                {{--<b class="text-uppercase"--}}
                                   {{--style="margin-left: 10px; margin-right: 10px">{{$mvalue['title']}}</b>--}}
                                {{--<img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo2'])}}" alt="">--}}

                            {{--</h5>--}}
                        {{--</center>--}}
                        {{--<hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   ">--}}
                        {{--<center><h5 style=" font-size: 12px;margin-top: 5px"><span--}}
                                        {{--class="label label-pill label-info pull-left">{{$mvalue['t_a_score']}}</span> {{$mvalue['vs1'].' '}} {{' '.'vs'.' '}} {{ $mvalue['vs2'].' '}}--}}
                                {{--<span class="label label-pill label-info pull-right">{{$mvalue['t_b_score'].' '}}</span>--}}
                            {{--</h5>--}}
                            {{--<h5 class="text-uppercase"--}}
                                {{--style="font-family: 'Open Sans', sans-serif;font-size: 10px;margin-bottom: 5px;margin-top: -8px"> {{$mvalue['summery']}}--}}
                                {{--WON</h5></center>--}}

                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}

    {{--Marquee to be load in Mobile /Tab--}}
    <marquee id="marquee-mobile" class="" style="height: 85px; background-color:#e6e6e6; font-family: 'Coda', cursive; max-width: 100%">
        @foreach($summery as $mkey => $mvalue)
            <div class="mblock" style="height: 76px;">
                <center><h5 style=" font-size: 12px">

                        <img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo1'])}}" alt="">
                        <b class="text-uppercase"
                           style="margin-left: 10px; margin-right: 10px">{{$mvalue['title']}}</b>
                        <img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo2'])}}" alt="">

                    </h5>
                </center>
                <hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   ">
                <center><h5 style=" font-size: 12px;margin-top: 5px"><span
                                class="label label-pill label-info pull-left">{{$mvalue['t_a_score']}}</span> {{$mvalue['vs1'].' '}} {{' '.'vs'.' '}} {{ $mvalue['vs2'].' '}}
                        <span class="label label-pill label-info pull-right">{{$mvalue['t_b_score'].' '}}</span>
                    </h5>
                    <h5 class="text-uppercase"
                        style="font-family: 'Open Sans', sans-serif;font-size: 10px;margin-bottom: 5px;margin-top: -8px"> {{$mvalue['summery']}}</h5></center>

            </div>
        @endforeach
    </marquee>

    <!-- Top List -->
{{--
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">

                    <center><h4 class="section-heading text-uppercase font-oswald">Men</h4></center>
                    <hr>
                    @if(isset($ovmen))
                    <div class="panel panel-primary">



                        @foreach($ovmen as $kmen => $vmen)
                            @if($kmen==0)
                                <div class="panel-heading text-center font-coda text-uppercase"
                                     style="background-image: linear-gradient(300deg,#ea2e2b, firebrick)">Top Rankings
                                    <hr style="margin-bottom: 5px;margin-top: 5px;width: 70%">
                                    <center>
                                        <h2 style="font-size: 2em;font-family: 'Coda', cursive;"> {{$vmen['u_code'].' '}}
                                            <span class="label label-pill label-info pull-right">{{' '.$vmen['score']}}</span>
                                        </h2></center>
                                </div>
                            @endif
                        @endforeach

                        <div class="panel-body overall-mwtbl" style="margin-bottom: -15px">
                            <div class="row">
                                <div class="col-xs-3 rank-wrapper"
                                     style="background-color:#f2f2f2;">
                                    <br>
                                    @foreach($ovmen as $kmen => $vmen)
                                        @if(!($kmen==0) && $kmen<7)

                                            <h4 class="rank"> {{($kmen+1)}}</h4>
                                            <hr>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-xs-5 uni-wrapper">
                                    <br>
                                    @foreach($ovmen as $kmen => $vmen)
                                        @if(!($kmen==0) && $kmen<7)

                                            <h4 class="uni"> {{' '.$vmen['u_code'].' '}}</h4>
                                            <hr>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-xs-4 points-wrapper"
                                     style=" background-color: #e6e6e6;">
                                    <br>
                                    @foreach($ovmen as $kmen => $vmen)
                                        @if(!($kmen==0) && $kmen<7)

                                            <h4 class="points"> {{' '.$vmen['score']}}</h4>
                                            <hr>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>


                    </div>
                    @else

                    @endif

                </div>
                <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6">
                    <center><h3 class="side-lines text-uppercase font-oswald">&nbsp;Top Rankings&nbsp;</h3></center>

                    @if(isset($ovall))
                    @foreach($ovall as $kall => $vall)
                        @if($kall==0)
                            <div class="panel">
                                <div class="panel-heading text-center"
                                     style="background-image: linear-gradient(180deg,#f2f2f2, whitesmoke); width: 100%;">

                                    <img src="{{URL::asset('logos/'.$vall['logo'])}}" alt="" style="width: 250px ;">
                                    <div class="row overall-tbl-row">

                                        <div class="col-xs-3"></div>
                                        <div class="col-md-6 col-xs-5 uni text-left">
                                            <span>{{$vall['name'].' '}}</span>
                                        </div>
                                        <div class="col-md-3 col-xs-4 points">
                                            <span>{{' '.$vall['score']}}</span>
                                        </div>

                                        --}}
{{--<h4 style="font-family: 'Coda', cursive;font-size: 1.7em;">{{$vall['name'].' '}}
                                            <span class="pull-right"
                                                  style="margin-right: 20px">{{' '.$vall['score']}}</span></h4>--}}{{--

                                    </div>

                                </div>
                            </div>
                        @endif
                    @endforeach

                    @foreach($ovall as $kall => $vall)
                        @if(!($kall==0) && $kall<4)
                            <div class="overall-tbl-row" style="background-image: linear-gradient(180deg,whitesmoke, whitesmoke); width: 100%;">
                                <div class="row" style="padding-left: 15px; padding-right: 15px;">
                                    <div class="col-xs-3">
                                        <img src="{{URL::asset('logos/'.$vall['logo'])}}" alt=""
                                             class="unilogo">
                                    </div>
                                    <div class="col-md-6 col-xs-5 uni">
                                        <span>{{$vall['name'].' '}}</span>
                                    </div>
                                    <div class="col-md-3 col-xs-4 points">
                                        <span>{{' '.$vall['score']}}</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endif
                    @endforeach

                    @else

                    @endif
                </div>


                <div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
                    <center><h4 class="section-heading text-uppercase font-oswald">Women</h4></center>
                    <hr>
                    @if(isset($ovwomen))
                        <div class="panel panel-primary">

                                @foreach($ovwomen as $kwomen => $vwomen)
                                    @if($kwomen==0)
                                        <div class="panel-heading text-center font-coda text-uppercase"
                                             style="background-image: linear-gradient(300deg,#ea2e2b, firebrick)"> Top Ranking
                                            <hr style="margin-bottom: 5px;margin-top: 5px;width: 70%">
                                            <center>
                                                <h2 style="font-size: 2em;font-family: 'Coda', cursive;"> {{$vwomen['u_code'].' '}}
                                                    <span class="label label-pill label-info pull-right">{{' '.$vwomen['score']}}</span>
                                                </h2></center>
                                        </div>
                                    @endif
                                @endforeach



                            <div class="panel-body overall-mwtbl" style="margin-bottom: -15px">
                                <div class="row">
                                    <div class="col-xs-3 rank-wrapper"
                                         style="background-color:#f2f2f2;">
                                        <br>
                                        @foreach($ovwomen as $kwomen => $vwomen)
                                            @if(!($kwomen==0) && $kwomen<7)

                                                <h4 class="rank"> {{($kwomen+1)}}</h4>
                                                <hr>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-xs-5 uni-wrapper">
                                        <br>
                                        @foreach($ovwomen as $kwomen => $vwomen)
                                            @if(!($kwomen==0) && $kwomen<7)

                                                <h4 class="uni"> {{' '.$vwomen['u_code'].' '}}</h4>
                                                <hr>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-xs-4 points-wrapper"
                                         style=" background-color: #e6e6e6;">
                                        <br>
                                        @foreach($ovwomen as $kwomen => $vwomen)
                                            @if(!($kwomen==0) && $kwomen<7)

                                                <h4 class="points"> {{' '.$vwomen['score']}}</h4>
                                                <hr>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>


                        </div>
                    @else
                        <div class="no-scores-text">
                            let's wait till points available
                        </div>
                    @endif
                </div>

            </div>
            <!-- /.container -->

        </div>
    </div>
--}}
    <!-- /.Top list -->

    {{--Welcome text to show until points are available--}}
    <div class="container text-center font-oswald" style="padding-top: 35px;">
        <div style="font-size: 40px">WE ARE READY!</div>
        <div style="font-size: 25px">STAY WITH US FOR EXCITING STUFFS AND SCORES.</div>
    </div>

    <div class="container">
        <hr />
    </div>

    <!--past-->
    {{--Previous Winnners section--}}
    <div class="content-section-a">

        <div class="container">
            <h3 class="text-uppercase font-oswald">Previous SLUG Winners</h3>


            <div class="row text-uppercase">
                <div class="col-lg-2 col-md-3 col-xs-6">
                    <div class="font-coda--bold prev-winners-card">
                        <div>
                            <center>
                                <h4 class="prev-winners-card__year">2004</h4>
                                <img src="{{URL::asset('logos/PER.png')}}" alt="" class="prev-winners-card__logo">
                                <h5 class="prev-winners-card__winneruni">University of Peradeniya</h5>
                                <hr class="prev-winners-card__hr">
                                <p>Runners up</p>
                                <p class="font-coda">University of Colombo</p>
                            </center>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-xs-6">
                    <div class="font-coda--bold prev-winners-card">
                        <div>
                            <center>
                                <h4 class="prev-winners-card__year">2007</h4>
                                <img src="{{URL::asset('logos/COL.png')}}" alt="" class="prev-winners-card__logo">
                                <h5 class="prev-winners-card__winneruni">Unversity of Colombo</h5>
                                <hr class="prev-winners-card__hr">
                                <p>Runners up</p>
                                <p class="font-coda">-</p>
                            </center>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-xs-6">
                    <div class="font-coda--bold prev-winners-card">
                        <div>
                            <center>
                                <h4 class="prev-winners-card__year">2010</h4>
                                <img src="{{URL::asset('logos/COL.png')}}" alt="" class="prev-winners-card__logo">
                                <h5 class="prev-winners-card__winneruni">Unversity of Colombo</h5>
                                <hr class="prev-winners-card__hr">
                                <p>Runners up</p>
                                <p class="font-coda">University of Moratuwa</p>
                            </center>
                        </div>

                    </div>
                </div>


                <div class="col-lg-2 col-md-3 col-xs-6">
                    <div class="font-coda--bold prev-winners-card">
                        <div>
                            <center>
                                <h4 class="prev-winners-card__year">2013</h4>
                                <img src="{{URL::asset('logos/MOR.png')}}" alt="" class="prev-winners-card__logo">
                                <h5 class="prev-winners-card__winneruni">University of Moratuwa</h5>
                                <hr class="prev-winners-card__hr">
                                <p>Runners up</p>
                                <p class="font-coda">University of Colombo</p>
                            </center>
                        </div>

                    </div>
                </div>


            </div>


        </div>

    </div>

    <!--//past-->
@endsection


@section('script')
    @parent
    <script type="text/javascript">

        $(document).ready(function () {
            var totalMarqueWidth = 0;
            $(".mblock").each(function () {
                //console.log($(this).width());
                totalMarqueWidth += $(this).outerWidth();
            });
            console.log(totalMarqueWidth);

            if($(window).width() <= totalMarqueWidth) {
//                $(".container-marquee").css("width", totalMarqueWidth);
            }

            /*
            // on resize reset width of container-marquee
            $( window ).resize(function() {
                console.log('resized');
                if($(window).width() <= totalMarqueWidth) {
                    $(".container-marquee").css("width", totalMarqueWidth);
                }
            });*/
        })

    </script>

    {{--<script type="text/javascript" src="{{ URL::asset('js/marquee.js')}}"></script>--}}
@endsection