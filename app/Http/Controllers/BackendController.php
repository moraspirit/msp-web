<?php
/**
 * Created by PhpStorm.
 * User: Tharindu Diluksha
 * Date: 5/23/2016
 * Time: 10:09 AM
 */

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Sport;

class BackendController extends Controller
{

    public function addpoints(){
        return view('backend.addpoints');
    }

    public function savepoints(Request $request){

        $sport = $request->Game;
        $uni = $request->University;
        $sex = $request->Sex;
        $points = $request->points;
        DB::connection('mongodb')->collection('msp')->insert(array(
            'sport' => $sport,
            'university' => $uni,
            'catagory' => $sex,
            'points' => $points
        ));
        return view('events');
        /*return response()->json();*/

    }

    public function loadpoints(){
        /*$pointstable = DB::connection('mongodb')->collection('msp')->get();*/
        $pointstable = Sport::all();
        /*return  view('backend.pointstabletest')->with($pointstable);*/
        /*return  view('backend.pointstabletest');*/
        return $pointstable;
    }

}