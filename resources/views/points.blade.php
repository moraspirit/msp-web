@extends('frontend.layout')

@section('meta')
    <meta property="og:title" content="SLUG 2016 - POINTS TABLE" />
    <meta property="og:description" content="slug 2016 points table." />
    <meta property="og:image" content="http://sports.moraspirit.com/images/social.png" />
@stop
@section('title', 'SLUG 2016 - POINTS TABLE')

@section('content')
    <style>
        .table-hover tbody tr:hover td {
            background-color: #f2f2f2;


        }
        tr{
            font-family: 'Coda', cursive;
        }
        th {
            background-color: #ea2e2b;
            color: white;
            font-family: 'Coda', cursive;
        }

    </style>

<div class="container">
    <h1 class="font-oswald side-lines text-center text-uppercase">Points Table</h1>
    <br>

    {{--why adding container inside a container ??--}}
    <div class="">

        <table   class="table table-hover" align="middle" style="text-transform: uppercase;">
            <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Sport</th>
                <th>MOR</th>
                <th>COL</th>
                <th>PER</th>
                <th>SJP</th>
                <th>KEL</th>
                <th>JAF</th>
                <th>RHU</th>
                <th>RAJ</th>
                <th>UVA</th>
                <th>SAB</th>
                <th>WAY</th>
                <th>SEA</th>
                <th>EST</th>
                <th>VPA</th>
            </tr>
            </thead >
            <tbody>
            <?php $i = 0;?>
            @if(!empty($badminton_m))
            <tr>
                <td>{{$i= $i+1}}</td>
                <td>Badminton <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>

                    @foreach($badminton_m as $badminton_m_value)
                        @if($badminton_m_value["u_code"]=="MOR")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="COL")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="PER")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="SJP")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="KEL")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="JAF")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="RHU")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="RAJ")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="UVA")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="SAB")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="WAY")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="SEA")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="EST")<td>{{ $badminton_m_value["points"] }}</td> @endif
                        @if($badminton_m_value["u_code"]=="VPA")<td>{{ $badminton_m_value["points"] }}</td> @endif
                    @endforeach
            </tr>
            @endif

            @if(!empty($badminton_w))
            <tr>
                <td>{{$i= $i+1}}</td>
                <td>Badminton <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($badminton_w as $badminton_w_value)
                        @if($badminton_w_value["u_code"]=="MOR")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="COL")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="PER")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="SJP")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="KEL")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="JAF")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="RHU")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="RAJ")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="UVA")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="SAB")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="WAY")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="SEA")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="EST")<td>{{ $badminton_w_value["points"] }}</td> @endif
                        @if($badminton_w_value["u_code"]=="VPA")<td>{{ $badminton_w_value["points"] }}</td> @endif
                    @endforeach
            </tr>
            @endif

            @if(!empty($baseball_m))
            <tr>
                <td>{{$i= $i+1}}</td>
                <td>Baseball <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($baseball_m as $baseball_m_value)
                        @if($baseball_m_value["u_code"]=="MOR")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="COL")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="PER")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="SJP")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="KEL")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="JAF")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="RHU")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="RAJ")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="UVA")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="SAB")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="WAY")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="SEA")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="EST")<td>{{ $baseball_m_value["points"] }}</td> @endif
                        @if($baseball_m_value["u_code"]=="VPA")<td>{{ $baseball_m_value["points"] }}</td> @endif
                    @endforeach

            </tr>
            @endif

            @if(!empty($basketball_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Basketball <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($basketball_m as $basketball_m_value)
                        @if($basketball_m_value["u_code"]=="MOR")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="COL")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="PER")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="SJP")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="KEL")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="JAF")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="RHU")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="RAJ")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="UVA")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="SAB")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="WAY")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="SEA")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="EST")<td>{{ $basketball_m_value["points"] }}</td> @endif
                        @if($basketball_m_value["u_code"]=="VPA")<td>{{ $basketball_m_value["points"] }}</td> @endif
                    @endforeach

                </tr>
            @endif

            @if(!empty($basketball_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Basketball <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($basketball_w as $basketball_w_value)
                        @if($basketball_w_value["u_code"]=="MOR")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="COL")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="PER")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="SJP")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="KEL")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="JAF")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="RHU")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="RAJ")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="UVA")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="SAB")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="WAY")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="SEA")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="EST")<td>{{ $basketball_w_value["points"] }}</td> @endif
                        @if($basketball_w_value["u_code"]=="VPA")<td>{{ $basketball_w_value["points"] }}</td> @endif
                    @endforeach

                </tr>
            @endif

            @if(!empty($carrom_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Carrom <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($carrom_m as $carrom_m_value)
                        @if($carrom_m_value["u_code"]=="MOR")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="COL")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="PER")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="SJP")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="KEL")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="JAF")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="RHU")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="RAJ")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="UVA")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="SAB")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="WAY")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="SEA")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="EST")<td>{{ $carrom_m_value["points"] }}</td> @endif
                        @if($carrom_m_value["u_code"]=="VPA")<td>{{ $carrom_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @endif

            @if(!empty($carrom_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Carrom <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($carrom_w as $carrom_w_value)
                        @if($carrom_w_value["u_code"]=="MOR")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="COL")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="PER")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="SJP")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="KEL")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="JAF")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="RHU")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="RAJ")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="UVA")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="SAB")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="WAY")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="SEA")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="EST")<td>{{ $carrom_w_value["points"] }}</td> @endif
                        @if($carrom_w_value["u_code"]=="VPA")<td>{{ $carrom_w_value["points"] }}</td> @endif
                    @endforeach

                </tr>
            @endif

            @if(!empty($chess_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Chess <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($chess_m as $chess_m_value)
                        @if($chess_m_value["u_code"]=="MOR")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="COL")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="PER")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="SJP")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="KEL")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="JAF")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="RHU")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="RAJ")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="UVA")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="SAB")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="WAY")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="SEA")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="EST")<td>{{ $chess_m_value["points"] }}</td> @endif
                        @if($chess_m_value["u_code"]=="VPA")<td>{{ $chess_m_value["points"] }}</td> @endif
                    @endforeach

                </tr>
            @endif

            @if(!empty($chess_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Chess <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($chess_w as $chess_w_value)
                        @if($chess_w_value["u_code"]=="MOR")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="COL")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="PER")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="SJP")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="KEL")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="JAF")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="RHU")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="RAJ")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="UVA")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="SAB")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="WAY")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="SEA")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="EST")<td>{{ $chess_w_value["points"] }}</td> @endif
                        @if($chess_w_value["u_code"]=="VPA")<td>{{ $chess_w_value["points"] }}</td> @endif
                    @endforeach

                </tr>
            @endif

            @if(!empty($cricket_m))
            <tr>
                <td>{{$i= $i+1}}</td>
                <td>Cricket <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                @foreach($cricket_m as $cricket_m_value)
                        @if($cricket_m_value["u_code"]=="MOR")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="COL")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="PER")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="SJP")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="KEL")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="JAF")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="RHU")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="RAJ")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="UVA")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="SAB")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="WAY")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="SEA")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="EST")<td>{{ $cricket_m_value["points"] }}</td> @endif
                        @if($cricket_m_value["u_code"]=="VPA")<td>{{ $cricket_m_value["points"] }}</td> @endif
                    @endforeach
            </tr>
            @else

            @endif

            @if(!empty($elle_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Elle <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($elle_m as $elle_m_value)
                        @if($elle_m_value["u_code"]=="MOR")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="COL")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="PER")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="SJP")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="KEL")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="JAF")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="RHU")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="RAJ")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="UVA")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="SAB")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="WAY")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="SEA")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="EST")<td>{{ $elle_m_value["points"] }}</td> @endif
                        @if($elle_m_value["u_code"]=="VPA")<td>{{ $elle_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($elle_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Elle <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($elle_w as $elle_w_value)
                        @if($elle_w_value["u_code"]=="MOR")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="COL")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="PER")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="SJP")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="KEL")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="JAF")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="RHU")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="RAJ")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="UVA")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="SAB")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="WAY")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="SEA")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="EST")<td>{{ $elle_w_value["points"] }}</td> @endif
                        @if($elle_w_value["u_code"]=="VPA")<td>{{ $elle_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($football_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Football <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($football_m as $football_m_value)
                        @if($football_m_value["u_code"]=="MOR")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="COL")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="PER")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="SJP")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="KEL")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="JAF")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="RHU")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="RAJ")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="UVA")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="SAB")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="WAY")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="SEA")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="EST")<td>{{ $football_m_value["points"] }}</td> @endif
                        @if($football_m_value["u_code"]=="VPA")<td>{{ $football_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($hockey_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Hockey <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($hockey_m as $hockey_m_value)
                        @if($hockey_m_value["u_code"]=="MOR")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="COL")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="PER")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="SJP")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="KEL")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="JAF")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="RHU")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="RAJ")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="UVA")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="SAB")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="WAY")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="SEA")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="EST")<td>{{ $hockey_m_value["points"] }}</td> @endif
                        @if($hockey_m_value["u_code"]=="VPA")<td>{{ $hockey_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($hockey_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Hockey <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($hockey_m as $hockey_m_value)
                        @if($hockey_w_value["u_code"]=="MOR")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="COL")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="PER")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="SJP")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="KEL")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="JAF")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="RHU")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="RAJ")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="UVA")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="SAB")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="WAY")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="SEA")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="EST")<td>{{ $hockey_w_value["points"] }}</td> @endif
                        @if($hockey_w_value["u_code"]=="VPA")<td>{{ $hockey_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($karate_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Karate <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($karate_m as $karate_m_value)
                        @if($karate_m_value["u_code"]=="MOR")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="COL")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="PER")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="SJP")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="KEL")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="JAF")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="RHU")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="RAJ")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="UVA")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="SAB")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="WAY")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="SEA")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="EST")<td>{{ $karate_m_value["points"] }}</td> @endif
                        @if($karate_m_value["u_code"]=="VPA")<td>{{ $karate_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($karate_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Karate <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($karate_w as $karate_w_value)
                        @if($karate_w_value["u_code"]=="MOR")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="COL")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="PER")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="SJP")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="KEL")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="JAF")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="RHU")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="RAJ")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="UVA")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="SAB")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="WAY")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="SEA")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="EST")<td>{{ $karate_w_value["points"] }}</td> @endif
                        @if($karate_w_value["u_code"]=="VPA")<td>{{ $karate_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($netball_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Netball <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($netball_w as $netball_w_value)
                        @if($netball_w_value["u_code"]=="MOR")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="COL")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="PER")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="SJP")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="KEL")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="JAF")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="RHU")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="RAJ")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="UVA")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="SAB")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="WAY")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="SEA")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="EST")<td>{{ $netball_w_value["points"] }}</td> @endif
                        @if($netball_w_value["u_code"]=="VPA")<td>{{ $netball_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($roadrace_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Road Race <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($roadrace_m as $roadrace_m_value)
                        @if($roadrace_m_value["u_code"]=="MOR")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="COL")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="PER")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="SJP")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="KEL")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="JAF")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="RHU")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="RAJ")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="UVA")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="SAB")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="WAY")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="SEA")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="EST")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                        @if($roadrace_m_value["u_code"]=="VPA")<td>{{ $roadrace_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($rowing_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Rowing <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($rowing_m as $rowing_m_value)
                        @if($rowing_m_value["u_code"]=="MOR")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="COL")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="PER")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="SJP")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="KEL")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="JAF")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="RHU")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="RAJ")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="UVA")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="SAB")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="WAY")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="SEA")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="EST")<td>{{ $rowing_m_value["points"] }}</td> @endif
                        @if($rowing_m_value["u_code"]=="VPA")<td>{{ $rowing_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($rugby_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Rugby <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($rugby_m as $rugby_m_value)
                        @if($rugby_m_value["u_code"]=="MOR")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="COL")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="PER")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="SJP")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="KEL")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="JAF")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="RHU")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="RAJ")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="UVA")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="SAB")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="WAY")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="SEA")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="EST")<td>{{ $rugby_m_value["points"] }}</td> @endif
                        @if($rugby_m_value["u_code"]=="VPA")<td>{{ $rugby_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($swiming_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Swiming <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($swiming_m as $swiming_m_value)
                        @if($swiming_m_value["u_code"]=="MOR")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="COL")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="PER")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="SJP")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="KEL")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="JAF")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="RHU")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="RAJ")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="UVA")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="SAB")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="WAY")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="SEA")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="EST")<td>{{ $swiming_m_value["points"] }}</td> @endif
                        @if($swiming_m_value["u_code"]=="VPA")<td>{{ $swiming_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($swiming_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Swiming <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($swiming_w as $swiming_w_value)
                        @if($swiming_w_value["u_code"]=="MOR")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="COL")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="PER")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="SJP")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="KEL")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="JAF")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="RHU")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="RAJ")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="UVA")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="SAB")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="WAY")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="SEA")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="EST")<td>{{ $swiming_w_value["points"] }}</td> @endif
                        @if($swiming_w_value["u_code"]=="VPA")<td>{{ $swiming_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($tabletennis_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Table Tennis <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($tabletennis_m as $tabletennis_m_value)
                        @if($tabletennis_m_value["u_code"]=="MOR")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="COL")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="PER")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="SJP")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="KEL")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="JAF")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="RHU")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="RAJ")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="UVA")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="SAB")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="WAY")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="SEA")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="EST")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                        @if($tabletennis_m_value["u_code"]=="VPA")<td>{{ $tabletennis_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($tabletennis_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Table Tennis<span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($tabletennis_w as $tabletennis_w_value)
                        @if($tabletennis_w_value["u_code"]=="MOR")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="COL")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="PER")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="SJP")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="KEL")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="JAF")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="RHU")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="RAJ")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="UVA")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="SAB")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="WAY")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="SEA")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="EST")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                        @if($tabletennis_w_value["u_code"]=="VPA")<td>{{ $tabletennis_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($taekwondo_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Taekwondo <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($taekwondo_m as $taekwondo_m_value)
                        @if($taekwondo_m_value["u_code"]=="MOR")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="COL")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="PER")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="SJP")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="KEL")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="JAF")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="RHU")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="RAJ")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="UVA")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="SAB")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="WAY")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="SEA")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="EST")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                        @if($taekwondo_m_value["u_code"]=="VPA")<td>{{ $taekwondo_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($taekwondo_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Taekwondo <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($taekwondo_w as $taekwondo_w_value)
                        @if($taekwondo_w_value["u_code"]=="MOR")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="COL")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="PER")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="SJP")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="KEL")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="JAF")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="RHU")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="RAJ")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="UVA")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="SAB")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="WAY")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="SEA")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="EST")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                        @if($taekwondo_w_value["u_code"]=="VPA")<td>{{ $taekwondo_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($tennis_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Tennis <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($tennis_m as $tennis_m_value)
                        @if($tennis_m_value["u_code"]=="MOR")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="COL")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="PER")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="SJP")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="KEL")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="JAF")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="RHU")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="RAJ")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="UVA")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="SAB")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="WAY")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="SEA")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="EST")<td>{{ $tennis_m_value["points"] }}</td> @endif
                        @if($tennis_m_value["u_code"]=="VPA")<td>{{ $tennis_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($tennis_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Tennis <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($tennis_w as $tennis_w_value)
                        @if($tennis_w_value["u_code"]=="MOR")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="COL")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="PER")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="SJP")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="KEL")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="JAF")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="RHU")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="RAJ")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="UVA")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="SAB")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="WAY")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="SEA")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="EST")<td>{{ $tennis_w_value["points"] }}</td> @endif
                        @if($tennis_w_value["u_code"]=="VPA")<td>{{ $tennis_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($taf_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Track And Field <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($taf_m as $taf_m_value)
                        @if($taf_m_value["u_code"]=="MOR")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="COL")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="PER")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="SJP")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="KEL")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="JAF")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="RHU")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="RAJ")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="UVA")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="SAB")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="WAY")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="SEA")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="EST")<td>{{ $taf_m_value["points"] }}</td> @endif
                        @if($taf_m_value["u_code"]=="VPA")<td>{{ $taf_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($taf_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Track And Field <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($taf_w as $taf_w_value)
                        @if($taf_w_value["u_code"]=="MOR")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="COL")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="PER")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="SJP")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="KEL")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="JAF")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="RHU")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="RAJ")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="UVA")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="SAB")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="WAY")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="SEA")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="EST")<td>{{ $taf_w_value["points"] }}</td> @endif
                        @if($taf_w_value["u_code"]=="VPA")<td>{{ $taf_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($volleyball_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Volleyball<span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($volleyball_m as $volleyball_m_value)
                        @if($volleyball_m_value["u_code"]=="MOR")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="COL")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="PER")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="SJP")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="KEL")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="JAF")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="RHU")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="RAJ")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="UVA")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="SAB")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="WAY")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="SEA")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="EST")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                        @if($volleyball_m_value["u_code"]=="VPA")<td>{{ $volleyball_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($volleyball_w))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>VolleyBall<span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                    @foreach($volleyball_w as $volleyball_w_value)
                        @if($volleyball_w_value["u_code"]=="MOR")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="COL")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="PER")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="SJP")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="KEL")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="JAF")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="RHU")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="RAJ")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="UVA")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="SAB")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="WAY")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="SEA")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="EST")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                        @if($volleyball_w_value["u_code"]=="VPA")<td>{{ $volleyball_w_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif

            @if(!empty($wl_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Weight Lifting<span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($wl_m as $wl_m_value)
                        @if($wl_m_value["u_code"]=="MOR")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="COL")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="PER")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="SJP")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="KEL")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="JAF")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="RHU")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="RAJ")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="UVA")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="SAB")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="WAY")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="SEA")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="EST")<td>{{ $wl_m_value["points"] }}</td> @endif
                        @if($wl_m_value["u_code"]=="VPA")<td>{{ $wl_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif


            @if(!empty($wrl_m))
                <tr>
                    <td>{{$i= $i+1}}</td>
                    <td>Wrestling<span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                    @foreach($wrl_m as $wrl_m_value)
                        @if($wrl_m_value["u_code"]=="MOR")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="COL")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="PER")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="SJP")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="KEL")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="JAF")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="RHU")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="RAJ")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="UVA")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="SAB")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="WAY")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="SEA")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="EST")<td>{{ $wrl_m_value["points"] }}</td> @endif
                        @if($wrl_m_value["u_code"]=="VPA")<td>{{ $wrl_m_value["points"] }}</td> @endif
                    @endforeach
                </tr>
            @else
            @endif
            </tbody>
        </table>
    </div>

</div>

@endsection