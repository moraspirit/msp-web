@extends('frontend.layout')

@section('content')

	<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>

<div style="height: 90px; background-color:#e6e6e6" >
	<marquee behavior="" direction="" >
		@foreach($summery as $mkey => $mvalue)
		<div  class="mblock" style="height: 100%">
			<center><h5 style=" font-size: 12px">

					<img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo1'])}}" alt="" >
					<b style="margin-left: 10px; margin-right: 10px">{{$mvalue['title']}}</b>
					<img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo2'])}}" alt="" >

					</h5>
			</center>
			<hr style="margin-top: 0;margin-bottom: 0; width: 80%   ">
			<center><h5 style=" font-size: 12px"> {{$mvalue['vs1'].' '}}<span class="label label-pill label-info">{{$mvalue['t_a_score']}}</span> {{' '.'vs'.' '}} {{ $mvalue['vs2'].' '}}<span class="label label-pill label-info">{{$mvalue['t_b_score'].' '}}</span></h5></center>
		</div>
		@endforeach
	</marquee>
</div>

<!-- Top List -->
<div class="content-section-a">

	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">

				<center><h4 class="section-heading">Men</h4></center>
				<hr>
				<div class="panel panel-primary">

					@foreach($ovmen as $kmen => $vmen)
						@if($kmen==0)
							<div class="panel-heading text-center" style="background-image: linear-gradient(300deg,#ea2e2b, firebrick)"> Top Points <hr style="margin-bottom: 5px;margin-top: 5px;width: 70%">
								<center><h2  style="font-family: 'Josefin Sans', sans-serif;font-size: 2em">1<br>{{$vmen['u_code'].' '.'|'}}{{' '.$vmen['score']}}</h2></center>
							</div>
						@endif
					@endforeach


					<div class="panel-body text-center">
						@foreach($ovmen as $kmen => $vmen)
							@if(!($kmen==0) && $kmen<7)
						<h4>{{($kmen+1)}}.{{' '.$vmen['u_code'].' '.'|'}}{{' '.$vmen['score']}} </h4>
						<hr>
							@endif
						@endforeach
					</div>


				</div>

			</div>
			<div class="col-xs-12 col-lg-6 col-sm-6 col-md-6">
				<center><h3> Top Ranking </h3></center>
				@foreach($ovall as $kall => $vall)
					@if($kall==0)
					<div class="panel">
					<div class="panel-heading text-center" style="background-image: linear-gradient(180deg,#f2f2f2, whitesmoke); width: 100%;">

						<img src="{{URL::asset('logos/'.$vall['logo'])}}" alt="" style="width: 250px ;">
						<h3  style="font-family: 'Josefin Sans', sans-serif;font-size: 2em;">{{$vall['name'].' '.'|'}}{{' '.$vall['score']}}</h3>
					</div></div>
					@endif
				@endforeach

				@foreach($ovall as $kall => $vall)
					@if(!($kall==0) && $kall<4)
				<div style="background-image: linear-gradient(180deg,whitesmoke, whitesmoke); width: 100%;">
					<div class="row"> <div class="col-lg-3">
							<img src="{{URL::asset('logos/'.$vall['logo'])}}" alt="" style="width: 90px ; padding: 3px" class="pull-right">
						</div>
						<div class="col-lg-9">
							<br><span  style="font-family: 'Josefin Sans', sans-serif;font-size: 2em;">{{$vall['name'].' '.'|'}}{{' '.$vall['score']}}</span>
						</div></div>
				</div>
				<br>
					@endif
				@endforeach
			</div>



			<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
				<center><h4 class="section-heading">Women</h4></center>
				<hr>
				<div class="panel panel-primary">

					@foreach($ovwomen as $kwomen => $vwomen)
						@if($kwomen==0)
							<div class="panel-heading text-center" style="background-image: linear-gradient(300deg,#ea2e2b, firebrick)"> Top Points <hr style="margin-bottom: 5px;margin-top: 5px;width: 70%">
								<center><h2  style="font-family: 'Josefin Sans', sans-serif;font-size: 2em">1<br>{{$vwomen['u_code'].' '.'|'}}{{' '.$vwomen['score']}}</h2></center>
							</div>
						@endif
					@endforeach


					<div class="panel-body text-center">
						@foreach($ovwomen as $kwomen => $vwomen)
							@if(!($kwomen==0) && $kwomen<7)
								<h4>{{($kwomen+1)}}.{{' '.$vwomen['u_code'].' '.'|'}}{{' '.$vwomen['score']}} </h4>
								<hr>
							@endif
						@endforeach
					</div>


				</div>
			</div>

	</div>
	<!-- /.container -->

</div>
</div>
<!-- /.Top list -->



<!-- slider-->
<div class="web_disigner">
	<div class="web_disigner_contain">
		<div class="container">
			<h3 class="text-uppercase">Recent Matches</h3></div>
		<div class="container">
			<div class='row'>
				<div class='col-md-8 col-md-offset-2'>
					<div class="carousel slide media-carousel" id="media">
						<center>
							<div class="carousel-inner" style="width: 90%">

								@foreach($summery as $mkey => $mvalue)
									@if($mkey==0)
								<div class="item  active">
									<br>
									<center>
										<h5 style="background-color:#ea2e2b; color: white; padding: 5px "> {{$mvalue['title'].','.' '.$mvalue['dvs']}}</h5>
										<div class="row">
											<div class="col-lg-3">
												<img src="{{URL::asset('logos/'.$mvalue['logo1'])}}" alt="" style="width: 100px;" class="pull-left">
											</div>
											<div class="col-lg-6"> <h3 style="padding: 5px">{{$mvalue['t_a_score']}} Vs {{$mvalue['t_b_score']}}</h3>
												<h5>{{$mvalue['summery']}}</h5></div>
											<div class="col-lg-3"> <img src="{{URL::asset('logos/'.$mvalue['logo2'])}}" alt="" style="width: 100px;" class="center-block">
											</div>
										</div>
									</center>
								</div>
									@endif
								@endforeach

									@foreach($summery as $mkey => $mvalue)
										@if(!($mkey==0))
								<div class="item">
									<br>
									<center>
										<h5 style="background-color:#ea2e2b; color: white; padding: 5px ">{{$mvalue['title'].','.' '.$mvalue['dvs']}}</h5>
										<div class="row">
											<div class="col-lg-3">
												<img src="{{URL::asset('logos/'.$mvalue['logo1'])}}" alt="" style="width: 100px;" class="pull-left">
											</div>
											<div class="col-lg-6"> <h3 style="padding: 5px">{{$mvalue['t_a_score']}} Vs {{$mvalue['t_b_score']}}</h3>
												<h5>{{$mvalue['summery']}}</h5></div>
											<div class="col-lg-3">  <img src="{{URL::asset('logos/'.$mvalue['logo2'])}}" alt="" style="width: 100px;" class="center-block">
											</div>
										</div>

									</center>
								</div>
										@endif
									@endforeach

							</div></center>
						<a data-slide="prev" href="#media" class="left carousel-control">‹</a>
						<a data-slide="next" href="#media" class="right carousel-control">›</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- // slider-->

<!--past-->
{{--Previous Winnners section--}}
<div class="content-section-a">

	<div class="container">
		<h3 class="text-uppercase font-oswald">Previous SLUG Winners</h3>



			<div class="row text-uppercase">
				<div class="col-lg-2">
					<div class="font-coda--bold prev-winners-card">
						<div>
							<center>
								<h4 class="prev-winners-card__year">2004</h4>
								<img src="{{URL::asset('logos/UOP.png')}}" alt="" class="prev-winners-card__logo">
								<h5 class="prev-winners-card__winneruni">University of Peradeniya</h5>
								<hr class="prev-winners-card__hr">
								<p>Runners up</p>
								<p class="font-coda">University of Colombo</p>
							</center>
						</div>

					</div>
				</div>
				<div class="col-lg-2">
					<div class="font-coda--bold prev-winners-card">
						<div>
							<center>
								<h4 class="prev-winners-card__year">2007</h4>
								<img src="{{URL::asset('logos/UOC.png')}}" alt="" class="prev-winners-card__logo">
								<h5 class="prev-winners-card__winneruni">Unversity of Colombo</h5>
								<hr class="prev-winners-card__hr">
								<p>Runners up</p>
								<p class="font-coda">-</p>
							</center>
						</div>

					</div>
				</div>

				<div class="col-lg-2">
					<div class="font-coda--bold prev-winners-card">
						<div>
							<center>
								<h4 class="prev-winners-card__year">2010</h4>
								<img src="{{URL::asset('logos/UOC.png')}}" alt="" class="prev-winners-card__logo">
								<h5 class="prev-winners-card__winneruni">Unversity of Colombo</h5>
								<hr class="prev-winners-card__hr">
								<p>Runners up</p>
								<p class="font-coda">University of Moratuwa</p>
							</center>
						</div>

					</div>
				</div>


				<div class="col-lg-2">
					<div class="font-coda--bold prev-winners-card">
						<div>
							<center>
								<h4 class="prev-winners-card__year">2013</h4>
								<img src="{{URL::asset('logos/uom.png')}}" alt="" class="prev-winners-card__logo">
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

<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

@endsection