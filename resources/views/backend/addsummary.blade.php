@extends('backend.layout.backendlayout')

@section('content1')
    Summaries
    @endsection

@section('content2')
    MORASPIRIT
    @endsection

@section('content3')
    Add New Summary
    @endsection

@section('formcontent')
    {!! Form::open(array('action' => 'BackendController@savesummary'))  !!}
        <div class="row">
            <div>
                <table class="table">
                    <tbody>
                    <tr class="active">
                        <td>
                            {!! Form::label('Game','Game') !!}
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

    <div class="row">
        <div>
            <table class="table">
                <tbody>
                <tr class="success">
                    <td>{!! Form::label('team_a','Team A') !!}
                        {!! Form::select('team_a',array(
                        'MOR' => 'University of Moratuwa',
                        'PER' => 'University of Peradeniya',
                        'COL' => 'University of Colombo',
                        'SJP' => 'University of Sri Jayawardenapura',
                        'KEL' => 'University of Kelaniya',
                        'JAF' => 'University of Jaffna',
                        'RHU' => 'University of Ruhuna',
                        'RAJ' => 'Rajarata University',
                        'UVA' => 'Uva Wellassa University',
                        'SAB' => 'Sabaragamuwa University',
                        'WAY' => 'Wayamba University',
                        'SEA' => 'South Eastern University',
                        'EST' => 'Eastern University',
                        'VPA' => 'Visual Performing Arts University'))  !!}</td>

                    <td>{!! Form::label('team_b','Team B') !!}
                        {!! Form::select('team_b',array(
                        'MOR' => 'University of Moratuwa',
                        'PER' => 'University of Peradeniya',
                        'COL' => 'University of Colombo',
                        'SJP' => 'University of Sri Jayawardenapura',
                        'KEL' => 'University of Kelaniya',
                        'JAF' => 'University of Jaffna',
                        'RHU' => 'University of Ruhuna',
                        'RAJ' => 'Rajarata University',
                        'UVA' => 'Uva Wellassa University',
                        'SAB' => 'Sabaragamuwa University',
                        'WAY' => 'Wayamba University',
                        'SEA' => 'South Eastern University',
                        'EST' => 'Eastern University',
                        'VPA' => 'Visual Performing Arts University'))  !!}</td>

                </tr>
                <tr class="danger">
                    <td>{!! Form::label('team_a_scr','Team A Score') !!}
                        {!! Form::text('team_a_scr') !!}</td>
                    <td>{!! Form::label('team_b_scr','Team B Score') !!}
                        {!! Form::text('team_b_scr') !!}</td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div>
            <table class="table">
                <tbody>
                    <tr class="info">
                        <td>{!! Form::label('t_won','Team WON') !!}
                            {!! Form::select('t_won',array(
                            'MOR' => 'University of Moratuwa',
                            'PER' => 'University of Peradeniya',
                            'COL' => 'University of Colombo',
                            'SJP' => 'University of Sri Jayawardenapura',
                            'KEL' => 'University of Kelaniya',
                            'JAF' => 'University of Jaffna',
                            'RHU' => 'University of Ruhuna',
                            'RAJ' => 'Rajarata University',
                            'UVA' => 'Uva Wellassa University',
                            'SAB' => 'Sabaragamuwa University',
                            'WAY' => 'Wayamba University',
                            'SEA' => 'South Eastern University',
                            'EST' => 'Eastern University',
                            'VPA' => 'Visual Performing Arts University')) !!}</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div>
            <table class="table">
                <tbody>
                <tr class="active">
                    <td>
                        <div>
                            {!! Form::label('heading','Heading') !!}
                        </div>
                        <div>
                            {!! Form::text('heading') !!}
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div>
            <table class="table">
                <tbody>
                <tr class="active">
                    <td>
                        <div>
                            {!! Form::label('summary','Summary') !!}
                        </div>
                        <div>
                            {!! Form::text('summary') !!}
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        {!! Form::submit('SAVE') !!}
    </div>

    {!!  Form::close() !!}

@endsection