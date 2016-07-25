@extends('backend.layout.backendlayout')

@section('content1')
    Points
@endsection

@section('content2')
    MORASPIRIT
@endsection

@section('content3')
    Add New Points
@endsection

@section('formcontent')
{{--<div class="container" style="position: fixed; top: 30%; bottom: 70%; right: 60%; left: 40%; ">--}}
{!! Form::open(array('action' => 'BackendController@savepoints'))  !!}
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
                    <td>
                        {!! Form::label('Category','Category') !!}
                        {!! Form::select('Category',array('M' => 'Male', 'F'=> 'Female', 'U'=> 'Uni')) !!}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <td> University</td>
                <td style="align-self: center"> Points</td>
            </thead>
            <tbody>
            <tr class="success">
                <td>{!! Form::label('MOR','University of Moratuwa') !!}</td>
                <td> {!! Form::text('MOR_scr') !!}</td>
            </tr>
            <tr class="danger">
                <td>{!! Form::label('PER','University of Peradeniya') !!} </td>
                <td> {!! Form::text('PER_scr') !!}</td>
            </tr>

            <tr class="success">
                <td>{!! Form::label('COL','University of Colombo') !!}</td>
                <td> {!! Form::text('COL_scr') !!}</td>
            </tr>
            <tr class="danger">
                <td>{!! Form::label('SJP','University of Sri Jayawardenapura') !!} </td>
                <td> {!! Form::text('SJP_scr') !!}</td>
            </tr>

            <tr class="success">
                <td>{!! Form::label('KEL','University of Kelaniya') !!}</td>
                <td> {!! Form::text('KEL_scr') !!}</td>
            </tr>
            <tr class="danger">
                <td>{!! Form::label('JAF','University of Jaffna') !!} </td>
                <td> {!! Form::text('JAF_scr') !!}</td>
            </tr>

            <tr class="success">
                <td>{!! Form::label('RHU','University of Ruhuna') !!}</td>
                <td> {!! Form::text('RHU_scr') !!}</td>
            </tr>
            <tr class="danger">
                <td>{!! Form::label('RAJ','Rajarata University') !!} </td>
                <td> {!! Form::text('RAJ_scr') !!}</td>
            </tr>

            <tr class="success">
                <td>{!! Form::label('UVA','Uva Wellassa University') !!}</td>
                <td> {!! Form::text('UVA_scr') !!}</td>
            </tr>
            <tr class="danger">
                <td>{!! Form::label('SAB','Sabaragamuwa University') !!} </td>
                <td> {!! Form::text('SAB_scr') !!}</td>
            </tr>

            <tr class="success">
                <td>{!! Form::label('WAY','Wayamba University') !!}</td>
                <td> {!! Form::text('WAY_scr') !!}</td>
            </tr>
            <tr class="danger">
                <td>{!! Form::label('SEA','South Eastern University') !!} </td>
                <td> {!! Form::text('SEA_scr') !!}</td>
            </tr>

            <tr class="success">
                <td>{!! Form::label('EST','Eastern University') !!}</td>
                <td> {!! Form::text('EST_scr') !!}</td>
            </tr>
            <tr class="danger">
                <td>{!! Form::label('VPA','Visual Performing Arts University') !!} </td>
                <td> {!! Form::text('VPA_scr') !!}</td>
            </tr>

            </tbody>
        </table>
    </div>

    <div class="row" style="padding-bottom: 5px">
        {!! Form::submit('Submit') !!}
    </div>
{!!  Form::close() !!}
{{--</div>--}}
@endsection

