@extends('frontend.layout')

<title>SLUG 2016 - DRAWS</title>
@section('content')

    <div class="container draws-pg font-coda--bold text-uppercase" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row">

        <div class="col-md-3 col-xs-12"> <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-stacked">
                <li class="active">
                    <a href="#crk_m" data-toggle="tab">Cricket
                        <span class="label label-default pull-right mw">M</span>
                    </a>

                </li>
                <li><a href="#rug_m" data-toggle="tab">Rugby
                        <span class="label label-default pull-right mw">M</span>
                    </a>
                </li>
                <li><a href="#hoc_m" data-toggle="tab">Hockey
                        <span class="label label-default pull-right mw">M</span>

                    </a>
                </li>
                <li><a href="#hoc_w" data-toggle="tab">Hockey
                        <span class="label label-default pull-right mw">W</span>
                    </a>
                </li>
                <li><a href="#ell_m" data-toggle="tab">Elle
                        <span class="label label-default pull-right mw">M</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-9 col-xs-12">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="crk_m">
                    <img data-original="http://www.gliffy.com/go/publish/image/10917521/L.png" alt="" class="lazy img-responsive">
                </div>
                <div class="tab-pane" id="rug_m">
                    <img data-original="http://www.gliffy.com/go/publish/image/10901481/L.png" alt="" class="lazy img-responsive">
                </div>
                <div class="tab-pane" id="hoc_m">
                    {{--this is an incorrect diagram--}}
                    <img data-original="http://www.gliffy.com/go/publish/image/8270899/L.png" alt="" class="lazy img-responsive">
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

@section('script')
    @parent
    <script type="text/javascript">
        $(document).ready(function () {

            // first image won't lazy load
            var firstImage = $('img.lazy')[0];
            $(firstImage).attr("src", $(firstImage).attr("data-original")).removeAttr("data-original");


            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                $(e.target.hash).find('.lazy').each(function(){
                    var imageSrc = $(this).attr("data-original");
                    $(this).attr("src", imageSrc).removeAttr("data-original");
                });
            });
        })
    </script>

@endsection