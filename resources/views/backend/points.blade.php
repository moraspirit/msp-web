
<div class="container" style="position: fixed; top: 30%; bottom: 70%; right: 60%; left: 40%; ">
{!! Form::open(array('action' => 'BackendController@savepoints'))  !!}
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('Game','Game') !!}
        {!! Form::select('Game',array('C' => 'Cricket', 'R'=> 'Rugby', 'F' => 'Football' ))  !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('University','University') !!}
        {!! Form::select('University',array('1' => 'UOM', '2'=> 'UOC', '3' => 'UOP' )) !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('Sex','Sex') !!}
        {!! Form::select('Sex',array('1' => 'Male', '2'=> 'Female')) !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('points','Points') !!}
        {!! Form::text('points') !!}
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::submit('Submit') !!}
    </div>
{!!  Form::close() !!}
</div>

