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
    /* load backend home */
    public function bkhome(){
        return view('backend.backendhome');
    }

    /* Load points adding page*/
    public function addpoints(){
        return view('backend.addpoints');
    }

    /* Save Points */
    public function savepoints(Request $request){
        $sport = $request->Game;
        $category = $request->Category;
        $uniscrarray = ['MOR_scr','PER_scr','COL_scr','SJP_scr','KEL_scr','JAF_scr','RHU_scr','RAJ_scr','UVA_scr',
            'SAB_scr','WAY_scr','SEA_scr','EST_scr','VPA_scr'];

        foreach ($uniscrarray as $uniscr){
            DB::table('scores')->insert(array(
                'g_code' => $sport,
                'u_code' => explode('_',$uniscr)[0],
                'score'=> $request->$uniscr,
                'category' => $category
            ));
        }
        return view('backend.layout.success');
    }

    /* Render add summaries page*/
    public function addsummary(){
        return view('backend.addsummary');
    }

    /* Save added summaries */
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
        return view('backend.layout.success');
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