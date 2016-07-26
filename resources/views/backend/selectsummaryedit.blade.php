@extends('backend.layout.backendlayout')

@section('content1')
    Update Summary
@endsection

@section('content2')
    MORASPIRIT
@endsection

@section('content3')
    Choose game to update summary
@endsection

@section('formcontent')
    {!! Form::open(array('action' => 'BackendController@showsummariesedit'))  !!}
    <div class="row">
        <div>
            <table class="table">
                <tbody>
                <tr class="active">
                    <td>{!! Form::label('Game','Game') !!}
                        {!! Form::select('Game',array(
                        'CRK' => 'Cricket',
                        'FB' => 'Football',
                        'BAD' => 'Badminton',
                        'BSK' => 'Basketball',
                        'BB' => 'Baseball',
                        'CAR' => 'Carrom',
                        'CHE' => 'Chess',
                        'ELL' => 'Elle',
                        'HOC' => 'Hockey',
                        'KAR' => 'Karate',
                        'NET' => 'Netball',
                        'RR' => 'Road Race',
                        'ROW' => 'Rowing',
                        'RUG' => 'Rugby',
                        'SWM' => 'Swimming',
                        'TT' => 'Table Tennis',
                        'TAE' => 'Taekwondo',
                        'TEN' => 'Tennis',
                        'TAF' => 'Track and Field',
                        'VB' => 'Volleyball',
                        'WL' => 'Weight Lifting',
                        'WRL' => 'Wrestling'))  !!}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row" style="padding-bottom: 5px">
        {!! Form::submit('Select') !!}
    </div>
    {!!  Form::close() !!}

@endsection