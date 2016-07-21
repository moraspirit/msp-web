@extends('frontend.layout')

<title>SLUG 2016 - POINTS TABLE</title>
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
                <th>UOM</th>
                <th>UOC</th>
                <th>UOP</th>
                <th>UOR</th>
                <th>UOJP</th>
                <th>UOK</th>
                <th>UOS</th>
                <th>UOV</th>
                <th>UOJ</th>
                <th>UOM</th>
                <th>UOM</th>
                <th>UOM</th>
                <th>UOM</th>
                <th>UOM</th>
                <th>UOM</th>
            </tr>
            </thead >
            <tbody>
            <tr>
                <td>1</td>
                <td>Cricket <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cricket <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>3</td>
                <td>VolleyBall <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>4</td>
                <td>VolleyBall <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Cricket  <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Cricket <span class="pull-right label label-default " style="margin-right:10px"> W</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Cricket <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Cricket <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Cricket <span class="pull-right label label-default " style="margin-right:10px"> M</span></td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr >
                <td>10</td>
                <td>Cricket(Men)</td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>

            <tr style="border-top: 3px solid #ea2e2b;">
                <td></td>
                <td>Men</td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr style="background-color:#f2f2f2">
                <td></td>
                <td>Rank</td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td></td>
                <td>Women</td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr style="background-color: #f2f2f2">
                <td></td>
                <td >Rank</td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr style="border-top: 3px solid #ea2e2b;">
                <td></td>
                <td>Overall Points</td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr style="background-color:#e6e6e6; font-weight: bold; color:#ea2e2b ">
                <td></td>
                <td style="color: #262626">Overall Ranks</td>
                <td>10</td>
                <td>7</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection