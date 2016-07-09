@extends('frontend.layout')

@section('content')

<head>

    <title>MoraSpirit</title>

    <link href="{{ URL::asset('css/marquee.css')}}" rel="stylesheet">
    <style>
        body {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>

<div class="marquee">
    <div>
        @foreach($messages as $message)
        <span><i class="fa fa-truck"></i>{{$message["news1"]}}</span>
        <span><i class="fa fa-cube"></i> {{$message["news2"]}}</span>
        <span><i class="fa fa-shield"></i> {{$message["news3"]}}</span>
        <span><i class="fa fa-leaf"></i> {{$message["news4"]}}</span>
        <span><i class="fa fa-star"></i>{{$message["news5"]}}</span>

            @endforeach
    </div>
</div>

    <div class="container-fluid">

        <!--Recently finished matches, score area-->
       @foreach($recent as $item)
        <div class="row recent_match">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <div class="container-fluid row pnltop"></div>
                <div class="panel panel-default panel-primary pnl">
                    <div class="panel-heading text-center">Men</div>
                    <div class="panel-body text-center">
                       {{$item["men"]}}
                    </div>

                </div>

            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <div class="row pnltop"></div>
                <div class="panel panel-default panel-primary pnl">
                    <div class="panel-heading text-center">Women</div>
                    <div class="panel-body text-center">
                        {{$item["women"]}}
                    </div>

                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
         @endforeach

        <!--End of recently finished matches, score area-->
        <div class="row">
            <div class="container-fluid under_recent_match"></div></div>
        <!--Area of overall score-->
            
        <div class="row points overalpoints">
            <!--<div class="container-fluid row overall_points_pnltop"></div>
            <div class="container-fluid row overall_points_pnltop"></div>
            <div class="container-fluid row overall_points_pnltop"></div>-->
            
            <div class="col-sm-1"></div>

            <div class="col-sm-2">
                <!--Men points table-->
                <div class="container-fluid menwomen_points-pnltop">

                <div class="panel panel-default panel-danger pnl">




                    <div class="panel-heading text-center"><span class="pre"> <span class="badge"> 1</span>&nbsp; UOM&nbsp;
                        <span class="badge">1000</span> </span></div>


                    <table class="table table-striped mytable-hover">
                        <tbody>
                        <?php $a=2; ?>
                        @foreach($ovmen as $k => $v)
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge"><?php echo $a ?>  </span></td>
                                <td>{{$v["uni"]}}</td>
                                <td><span class="badge">{{$v["marks"]}}</span></td>
                            </tr>
                        </tbody>
                        <?php $a++; ?>
                        @endforeach
                    </table>

                </div>

                    </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <!--Overall points table-->
                <div class="container-fluid overall_points_pnltop"></div>
                <div class="panel panel-default panel-danger pnl">
                    <!--<span class="pre"> <span class="badge"> 1</span>&nbsp; UOM&nbsp; 
                        <span class="badge">1000</span> </span>-->
                    <div class="panel-heading text-center">
                        <div class="well">
                        
                    <span class="badge">   <strong>1</strong>
                </span> <strong>UOM</strong> <span class="badge">1000</span>
            </div>
        </div>
        <table class="table table-striped mytable-hover">
            <tbody>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">2</span></td>
                    <td>UOP</td>
                    <td><span class="badge">800</span></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">3</span></td>
                    <td>UOC</td>
                    <td><span class="badge">600</span></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">4</span></td>
                    <td>UOR</td>
                    <td><span class="badge">400</span></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge"> 5</span></td>
                    <td>Test</td>
                    <td><span class="badge">200</span></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge"> 6</span></td>
                    <td>Test</td>
                    <td><span class="badge">100</span></td>
                </tr>
            </tbody>

        </table>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2 ">
        <!--Women points table-->
        <div class="container-fluid menwomen_points-pnltop">
            <div class="panel panel-default panel-danger pnl">
                <div class="panel-heading text-center"><span class="pre"><span class="badge"> 1</span>&nbsp; UOM&nbsp;
                    <span class="badge">500</span> </span>
                </div>
                <table class="table table-striped mytable-hover">
                    <tbody>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">2</span></td>
                            <td>UOP</td>
                            <td><span class="badge">400</span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">3</span></td>
                            <td>UOC</td>
                            <td><span class="badge">300</span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">4</span></td>
                            <td>UOR</td>
                            <td><span class="badge">200</span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge"> 5</span></td>
                            <td>Test</td>
                            <td><span class="badge">100</span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge"> 6</span></td>
                            <td>Test</td>
                            <td><span class="badge">50</span></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
            <div class="col-sm-1"></div>

    <div class="container-fluid overall_points_pnlbottom"></div>

    </div>

    <!--End of score area-->

    <div class="row">
        <div class="container-fluid under_recent_match"></div>
    </div>

    <!--Recent champions area-->
    <div class="container-fluid">
        <div class="container-fluid row champs_pnltop"></div>
        <div class="row">

            <div class="col-sm-3">
                <div class="panel panel-default panel-primary pnl">
                    <div class="panel-heading text-center">2007</div>
                    <div class="panel-body text-center">
                        University of Moratuwa
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-default panel-primary pnl">
                    <div class="panel-heading text-center">2009</div>
                    <div class="panel-body text-center">
                        University of Moratuwa
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-default panel-primary pnl">
                    <div class="panel-heading text-center">2012</div>
                    <div class="panel-body text-center">
                        University of Moratuwa
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-default panel-primary pnl">
                    <div class="panel-heading text-center">2016</div>
                    <div class="panel-body text-center">
                        University of Moratuwa
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!--End of recent champions area-->

    <!--Footer-->
    <div class="row">
        <div class="col-sm-12 text-center mspfooter">
            <div class="container-fluid"></div>
            <!--<Strong></Strong>-->
        </div>
    </div>
    <!--Footer end-->

    </div>

</body>

@endsection