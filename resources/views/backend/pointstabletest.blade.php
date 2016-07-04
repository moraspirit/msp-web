<html>

<head>

    <title>MoraSpirit</title>
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/editedStyles.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</head>

<body style="overflow-x: hidden;">
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
                        <span class="badge">500</span> </span></div>
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
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge"> 4</span></td>
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
    <div class="col-sm-4">
        <!--Overall points table-->
        <?php
            $uni=array();
            $points=array();
            foreach($pointstable as $unipoints){
                array_push($uni,$unipoints->university);
                array_push($points,$unipoints->points);
            }
        ?>
        <div class="container-fluid overall_points_pnltop"></div>
        <div class="panel panel-default panel-danger pnl">
            <!--<span class="pre"> <span class="badge"> 1</span>&nbsp; UOM&nbsp;
                <span class="badge">1000</span> </span>-->
            <div class="panel-heading text-center">
                <div class="well">

                    <span class="badge">   <strong>1</strong>
                </span> <strong><?php echo $uni[0]?></strong> <span class="badge"><?php echo $points[0]?></span>
                </div>
            </div>
            <table class="table table-striped mytable-hover">
                <tbody>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">2</span></td>
                    <td><?php echo $uni[1]?></td>
                    <td><span class="badge"><?php echo $points[1]?></span></td>
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
</body>