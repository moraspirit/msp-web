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

class BackendController extends Controller
{

    public function addpoints(){
        return view('backend.points');
    }

    public function savepoints(Request $request){

        $sport = $request->Game;
        $uni = $request->University;
        $sex = $request->Sex;
        $points = $request->points;
        DB::connection('mongodb')->collection('msp')->insert(array(
            'sport' => $sport,
            'university' => $uni,
            'sex' => $sex,
            'points' => $points
        ));
        return view('events');
    }

}