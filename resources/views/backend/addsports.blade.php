
<div class="container" style="position: fixed; top: 30%; bottom: 70%; right: 60%; left: 40%; ">
    {!! Form::open(array('action' => 'BackendController@saveSports'))  !!}

    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('Sport ID','id') !!}
        {!! Form::text('id') !!}
    </div>

    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('Sport Code','code') !!}
        {!! Form::text('code') !!}
    </div>

    <div class="row" style="padding-bottom: 5px">
        {!! Form::label('Sport Name','name') !!}
        {!! Form::text('name') !!}
    </div>

    <div class="row" style="padding-bottom: 5px">
        {!! Form::submit('Submit') !!}
    </div>
    {!!  Form::close() !!}
</div>

