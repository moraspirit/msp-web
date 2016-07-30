@extends('backend.layout.backendsummarylayout')

@section('content1')
    Summaries
@endsection

@section('content2')
    MORASPIRIT
@endsection

@section('content3')
    Delete Summaries :- select the checkboxes and delete
@endsection


@section('formcontent')
    {{--<div class="container" style="position: fixed; top: 30%; bottom: 70%; right: 60%; left: 40%; ">--}}
    {!! Form::open(array('action' => 'BackendController@savedeletedsummary'))  !!}

    <div class="row">
        <div style="max-width: 400px">
            <table class="table" style="max-width: 400px">
                <thead>
                <td> Edit</td>
                <td> Heading</td>
                <td> Game</td>
                <td> Team A</td>
                <td> Team B</td>
                <td> A Score</td>
                <td> B Score</td>
                <td> Team Won</td>
                <td> Summary</td>
                </thead>
                <tbody>

                {{ $num=0 }}
                @foreach($summaries as $summary)
                    {{ $num=$num+1 }}
                    <tr class="danger">

                        {!! Form::hidden('id'.$num,$summary['id']) !!}

                        <td> {!! Form::checkbox('selected'.$num) !!}</td>

                        <td> {!! Form::text('heading'.$num,$summary['heading']) !!}</td>

                        <td> {!! Form::text('gamecode'.$num,$summary['g_code']) !!}</td>

                        <td>{!! Form::select('team_a'.$num,array(
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
                        'VPA' => 'Visual Performing Arts University'),$summary['t_a_code'])  !!}</td>

                        <td>{!! Form::select('team_b'.$num,array(
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
                        'VPA' => 'Visual Performing Arts University'),$summary['t_b_code'])  !!}</td>

                        <td> {!! Form::text('team_a_scr'.$num,$summary['t_a_score']) !!} </td>

                        <td> {!! Form::text('team_b_scr'.$num,$summary['t_b_score']) !!}</td>

                        <td> {!! Form::select('t_won'.$num,array(
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
                            'VPA' => 'Visual Performing Arts University'),$summary['t_won']) !!}</td>

                        <td> {!! Form::text('summary'.$num,$summary['summery']) !!}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    {!! Form::hidden('num',$num) !!}
    <div class="row" style="padding-bottom: 5px">
        {!! Form::submit('DELETE') !!}
    </div>
    {!!  Form::close() !!}
    {{--</div>--}}
@endsection


