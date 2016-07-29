@extends('frontend.layout')

@section('content')

	@if(isset($points))
	@foreach($points as $value)
		{{ $value["g_code"] }}
	@endforeach
	@else

	@endif

@endsection