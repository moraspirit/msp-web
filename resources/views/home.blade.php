@extends('frontend.layout')

@section('content')

	<div style="height: 85px; background-color:#e6e6e6; font-family: 'Coda', cursive;"  >

		<marquee behavior="" direction="" >
			@foreach($summery as $mkey => $mvalue)
				<div  class="mblock" style="height: 100%">
					<center><h5 style=" font-size: 12px">

							<img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo1'])}}" alt="" >
							<b class="text-uppercase" style="margin-left: 10px; margin-right: 10px">{{$mvalue['title']}}</b>
							<img width="25px" height="25px" src="{{URL::asset('logos/'.$mvalue['logo2'])}}" alt="" >

						</h5>
					</center>
					<hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   ">
					<center>
						<h5 style=" font-size: 12px;margin-top: 5px"><span class="label label-pill label-info pull-left">{{$mvalue['t_a_score']}}</span>  {{$mvalue['vs1'].' '}} {{' '.'vs'.' '}} {{ $mvalue['vs2'].' '}}<span class="label label-pill label-info pull-right">{{$mvalue['t_b_score'].' '}}</span>
						</h5>
						<h5 class="text-uppercase" style="font-family: 'Open Sans', sans-serif;font-size: 10px;margin-bottom: 5px;margin-top: -8px"> {{$mvalue['summery']}}</h5>
					</center>

				</div>
			@endforeach
		</marquee>
	</div>
	

	<div class="container text-center font-oswald" style="padding-top: 35px;">
		<div style="font-size: 40px">WE ARE READY!</div>
		<div style="font-size: 25px">STAY WITH US FOR EXCITING STUFFS AND SCORES.</div>
	</div>
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