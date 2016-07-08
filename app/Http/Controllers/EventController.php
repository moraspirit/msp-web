<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Psy\Util\String;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

		return response()->json(array(['title'=>'Volleyball', 'start'=>'2016-01-01','color'=>'#FF00FF'],
				['title'=>'Same Day', 'start'=>'2016-01-01','color'=>'#FF00FF'],
				['title'=>'Same Day 2', 'start'=>'2016-01-01','color'=>'#FF00FF'],
				['title'=>'Netball', 'start'=>'2016-01-02','color'=>'#00FF00'],['title'=>'Basketball', 'start'=>'2016-01-03','color'=>'#800000'],
				['title'=>'Tennis', 'start'=>'2016-01-12','color'=>'#FF00FF','imageurl'=>'images/png/tennis.png']
				,['title'=>'volleyball', 'start'=>'2016-01-12','color'=>'#FF00FF','imageurl'=>'images/png/volleyball.png'],
				['title'=>'Hockey', 'start'=>'2016-01-21','color'=>'#C0C0C0'],
				['title'=>'Same Day 2', 'start'=>'2016-01-25','color'=>'#C0C0C0'],
				['title'=>'Same Day 2', 'start'=>'2016-01-25','color'=>'#FF00FF'],
				)
		);


//		events: [
//                    {
//						title: 'Volleyball',
//                        start: '2016-01-01',
//                        //imageurl:'icons/tennis.png',
//                        color: '#C2185B'
//
//                    },
//                    {
//						title: 'Long Event',
//                        start: '2016-01-07'
//                    },
//                    {
//						title: 'Repeating Event',
//                        start: '2016-01-09T16:00:00'
//                    },
//                    {
//						id: 999,
//                        title: 'Repeating Event',
//                        start: '2016-01-16T16:00:00'
//                    },
//                    {
//						title: 'Conference',
//                        start: '2016-01-11'
//                    },
//                    {
//						title: 'Meeting',
//                        start: '2016-01-12T10:30:00',
//                        end: '2016-01-12T12:30:00'
//                    },
//                    {
//						title: 'Lunch',
//                        start: '2016-01-12T12:00:00'
//                    },
//                    {
//						title: 'Meeting',
//                        start: '2016-01-12T14:30:00'
//                    },
//                    {
//						title: 'Happy Hour',
//                        start: '2016-01-12T17:30:00'
//                    },
//                    {
//						title: 'Dinner',
//                        start: '2016-01-12T20:00:00'
//                    },
//                    {
//						title: 'Birthday Party',
//                        start: '2016-01-13T07:00:00'
//                    },
//                    {
//						title: 'Click for Google',
//                        start: '2016-01-28'
//                    },
//
//                ],


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function timeline(){

		return response()->json([]);
	}

}
