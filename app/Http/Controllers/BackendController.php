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
use App\Entity\summaries;

class BackendController extends Controller
{

    /* Load point adding page*/
    public function addpoints(){
        return view('backend.addpoints');
    }

    public function savepoints(Request $request){
        /* Save points to mongodb*/
        $sport = $request->Game;
        $university = $request->University;
        $catagory = $request->Catagory;
        $points = $request->points;
        DB::connection('mongodb')->collection('msp')->insert(array(
            'sport' => $sport,
            'university' => $university,
            'catagory' => $catagory,
            'points' => $points
        ));
        return view('events');


    }

    public function addsummary(){
        return view('backend.addsummary');
    }

    public function savesummary(Request $request){

        DB::table('summaries')->insert(array(
            'g_code' => $request->Game,
            't_a_code' => $request->team_a,
            't_b_code' => $request->team_b,
            't_a_score' => $request->team_a_scr,
            't_b_score' => $request->team_b_scr,
            't_won' => $request->t_won,
            'heading' => $request->heading,
            'summery' => $request->summary ));
        return view('backend.addsummary');
    }

    public function loadpoints(){
        /*$pointstable = DB::connection('mongodb')->collection('msp')->get();*/
        /*return  view('backend.pointstabletest')->with($pointstable);*/
        /*return  view('backend.pointstabletest');*/
        $pointstable = Sport::all();
        return $pointstable;

        /*return response()->json();*/
    }

    public function addSports(){
        return view('backend.addsports');
    }

    public function saveSports(Request $request){
        $sportid = $request->id;
        $sportcode = $request->code;
        $sportname = $request->name;
        DB::connection('mongodb')->collection('sports')->insert(array(
            'id' => $sportid,
            'sport_code' => $sportcode,
            'Sport_name' => $sportname
        ));
        return view('events');
    }

}