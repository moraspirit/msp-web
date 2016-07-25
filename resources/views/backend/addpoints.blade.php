@extends('backend.layout.backendlayout')

@section('content1')
    Points
@endsection

@section('content2')
    Add Points of a games
@endsection

@section('content3')
    Add new Points of a game
@endsection

@section('formcontent')
{{--<div class="container" style="position: fixed; top: 30%; bottom: 70%; right: 60%; left: 40%; ">--}}
{!! Form::open(array('action' => 'BackendController@savepoints'))  !!}
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('Game','Game') !!}
        {!! Form::select('Game',array('Cricket' => 'Cricket', 'Rugby'=> 'Rugby', 'Football' => 'Football' ))  !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('University','University') !!}
        {!! Form::select('University',array('UOM' => 'UOM', 'UOC'=> 'UOC', 'UOP' => 'UOP' )) !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('Catagory','Catagory') !!}
        {!! Form::select('Catagory',array('Male' => 'Male', 'Female'=> 'Female')) !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('points','Points') !!}
        {!! Form::text('points') !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::submit('Submit') !!}
    </div>
{!!  Form::close() !!}
{{--</div>--}}
@endsection

