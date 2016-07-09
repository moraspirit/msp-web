@extends('frontend.layout')

@section('content')

	@foreach($ovmen as $k => $v)
		@foreach ($v as $key => $value)
			{{ $key . ' => ' . $value }}
		@endforeach
	@endforeach

@endsection