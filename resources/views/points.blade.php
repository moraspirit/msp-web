@extends('frontend.layout')

@section('meta')
    <meta property="og:title" content="SLUG 2016 - POINTS TABLE"/>
    <meta property="og:description" content="slug 2016 points table."/>
    <meta property="og:image" content="http://sports.moraspirit.com/images/social.png"/>
@stop
@section('title', 'SLUG 2016 - POINTS TABLE')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('temp/scoretable.css')}}">
@stop
@section('content')
    {{--    <style>
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

        </style>--}}

    <div class="container" data-ng-app="app" data-ng-controller="controller as ctrl" style="padding-bottom: 60px;">
        <h1 class="font-oswald side-lines text-center text-uppercase">Points Table</h1>
        <br>

    <!--
        games order by name and
        universities order by total

        -->


        <div class="font-coda" style="padding-top: 20px; padding-bottom: 60px;" ng-cloak>
            <div class="row">
                <div class="col-xs-2">

                </div>

                <!--
                university names
                taken out from angularjs
                -->
                <div class="col-xs-7 col-xs-offset-5 col-sm-8 col-sm-offset-4 hidden-lg hidden-md">
                    <select class="btn col-xs-12" ng-model="selectValue">
                        <option data-ng-repeat="uni in universities | orderBy: ['-total']"
                                value="@{{$index}}">@{{uni.name | uppercase}}</option>

                    </select>
                </div>

                <div class="col-xs-10">
                    <div class="tbl_col uni_codes  hidden-xs hidden-sm"
                         data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        @{{uni.code}}
                    </div>

                </div>

            </div>

            <div class="row" data-ng-repeat="game in allGames | orderBy: ['name']">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                    <div class="game_name odd_col">
                        <b>@{{game.name | uppercase}}</b>
                    </div>
                    <!--database stores category as F,but have to show as W-->
                    <div class="game_gender even_col" ng-if="game.category == 'M'">
                        M
                    </div>

                    <div class="game_gender even_col" ng-if="game.category != 'M'">
                        W
                    </div>
                </div>

                <!--this is where all the scores are displayed->

                <!--mobile view-->
                <div class="col-xs-7 col-sm-8  hidden-lg hidden-md">
                    <div class="" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}" ng-if="$index == selectValue"
                         style="text-align: center;">
                        <span ng-repeat="g in uni.games | orderBy: ['name']"
                              ng-if="g.code == game.code && g.category == game.category">@{{g.score}}</span>
                    </div>
                </div>
                <div class="col-xs-10 hidden-xs hidden-sm">
                    <div class="tbl_col" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        <span ng-repeat="g in uni.games | orderBy: ['name']"
                              ng-if="g.code == game.code && g.category == game.category">@{{g.score}}</span>
                    </div>
                </div>


            </div>

            <!--start of men scores and standings-->
            <div class="row result-scores" style="padding-top: 10px;">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                    <div class="game_name odd_col">
                        <b>TOTAL</b>
                    </div>
                    <div class="game_gender even_col">
                        M
                    </div>


                </div>
                <div class="col-xs-7 col-sm-8  hidden-lg hidden-md">
                    <div class="" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}" ng-if="$index == selectValue"
                         style="text-align: center;">
                        @{{uni.menTotal}}
                    </div>
                </div>
                <div class="col-xs-10 hidden-xs hidden-sm">
                    <div class="tbl_col" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        @{{uni.menTotal}}
                    </div>
                </div>
            </div>

            <div class="row result-scores">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                    <div class="game_name odd_col">
                        <b>STANDINGS</b>
                    </div>
                    <div class="game_gender even_col">
                        M
                    </div>


                </div>
                <div class="col-xs-7 col-sm-8  hidden-lg hidden-md">
                    <div class="" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}" ng-if="$index == selectValue"
                         style="text-align: center;">
                        @{{uni.menRank}}
                    </div>
                </div>
                <div class="col-xs-10 hidden-xs hidden-sm">
                    <div class="tbl_col" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        @{{uni.menRank}}
                    </div>
                </div>
            </div>

            <!--end of men scores and standings-->

            <!--start of women scores and standings-->
            <div class="row result-scores" style="padding-top: 10px;">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                    <div class="game_name odd_col">
                        <b>TOTAL</b>
                    </div>
                    <div class="game_gender even_col">
                        W
                    </div>


                </div>
                <div class="col-xs-7 col-sm-8  hidden-lg hidden-md">
                    <div class="" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}" ng-if="$index == selectValue"
                         style="text-align: center;">
                        @{{uni.womenTotal}}
                    </div>
                </div>
                <div class="col-xs-10 hidden-xs hidden-sm">
                    <div class="tbl_col" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        @{{uni.womenTotal}}
                    </div>
                </div>
            </div>

            <div class="row result-scores">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                    <div class="game_name odd_col">
                        <b>STANDINGS</b>
                    </div>
                    <div class="game_gender even_col">
                        W
                    </div>


                </div>
                <div class="col-xs-7 col-sm-8  hidden-lg hidden-md">
                    <div class="" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}" ng-if="$index == selectValue"
                         style="text-align: center;">
                        @{{uni.womenRank}}
                    </div>
                </div>
                <div class="col-xs-10 hidden-xs hidden-sm">
                    <div class="tbl_col" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        @{{uni.womenRank}}
                    </div>
                </div>
            </div>

            <!--end of women scores and standings-->


            <!--start of total scores and standings-->
            <div class="row result-scores" style="padding-top: 10px;">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                    <div class="game_name odd_col">
                        <b>TOTAL</b>
                    </div>
                    <div class="game_gender even_col">
                        ALL
                    </div>


                </div>
                <div class="col-xs-7 col-sm-8  hidden-lg hidden-md">
                    <div class="" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}" ng-if="$index == selectValue"
                         style="text-align: center;">
                        <b>@{{uni.total}}</b>
                    </div>
                </div>
                <div class="col-xs-10 hidden-xs hidden-sm">
                    <div class="tbl_col" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        <b>@{{uni.total}}</b>
                    </div>
                </div>
            </div>

            <div class="row result-scores">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                    <div class="game_name odd_col">
                        <b>STANDINGS</b>
                    </div>
                    <div class="game_gender even_col">
                        ALL
                    </div>


                </div>
                <div class="col-xs-7 col-sm-8  hidden-lg hidden-md">
                    <div class="" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}" ng-if="$index == selectValue"
                         style="text-align: center;">
                        <b>@{{uni.rank}}</b>
                    </div>
                </div>
                <div class="col-xs-10 hidden-xs hidden-sm">
                    <div class="tbl_col" data-ng-repeat="uni in universities | orderBy: ['-total']"
                         data-ng-class="{'odd_col':$index%2==0,'even_col':$index%2!=0}">
                        <b>@{{uni.rank}}</b>
                    </div>
                </div>
            </div>
        </div>

        <!--end of total scores and standings-->

        <div class="row">
            <div class="col-md-7 col-md-offset-5">
                <div id="disqus_thread"></div>

            </div>
        </div>

    </div>

@endsection

@section('script')
    @parent

    <script src="{{ URL::asset('temp/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('temp/scoretable.js')}}"></script>
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
        var disqus_config = function () {
            this.page.url = $("link[rel='canonical']").attr("href");  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = "points_table"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = '//msp-slug2016.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>please enable javascript to view the <a href="https://disqus.com/?ref_noscript">comments.</a></noscript>

@endsection