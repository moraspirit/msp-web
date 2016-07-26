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

    /* Render point editing */
    public function showselectpoints(){
        return view('backend.modifypoints');
    }

    public function editpoints(Request $request){
        $sport = $request->Game;
        $category = $request->Category;

        $uniscrarray = ['MOR_scr','PER_scr','COL_scr','SJP_scr','KEL_scr','JAF_scr','RHU_scr','RAJ_scr','UVA_scr',
            'SAB_scr','WAY_scr','SEA_scr','EST_scr','VPA_scr'];

        $savedscores=array();

        foreach ($uniscrarray as $uniscr){
            $scr= DB::table('scores')->select('score')
                ->where('g_code', '=', $sport)
                ->where('category', '=', $category)
                ->where('u_code', '=', explode('_',$uniscr)[0])
                ->get();
            array_push($savedscores,$scr[0]->score);
        }

        return view('backend.editpoints',array(
            'game'=> $sport,
            'category'=>$category,
            'scores0' => (string)$savedscores[0],
            'scores1' => (string)$savedscores[1],
            'scores2' => (string)$savedscores[2],
            'scores3' => (string)$savedscores[3],
            'scores4' => (string)$savedscores[4],
            'scores5' => (string)$savedscores[5],
            'scores6' => (string)$savedscores[6],
            'scores7' => (string)$savedscores[7],
            'scores8' => (string)$savedscores[8],
            'scores9' => (string)$savedscores[9],
            'scores10' => (string)$savedscores[10],
            'scores11' => (string)$savedscores[11],
            'scores12' => (string)$savedscores[12],
            'scores13' => (string)$savedscores[13],
        ));
    }

    public function savepointsedited(Request $request){
        $sport = $request->Game;
        $category = $request->Category;
        $uniscrarray = ['MOR_scr','PER_scr','COL_scr','SJP_scr','KEL_scr','JAF_scr','RHU_scr','RAJ_scr','UVA_scr',
            'SAB_scr','WAY_scr','SEA_scr','EST_scr','VPA_scr'];

        foreach ($uniscrarray as $uniscr){
            DB::table('scores')->where('g_code', '=', $sport)
                ->where('category', '=', $category)
                ->where('u_code', '=', explode('_',$uniscr)[0])
                ->update(array('score'=> $request->$uniscr));
        }
        return view('backend.layout.success');
    }

    /* /point adding*/

    /* point deletion */
    public function showdeletpoints(){
        return view('backend.selectpointdelet');
    }

    public function dletepoints(Request $request){
        $sport = $request->Game;
        $category = $request->Category;

        $uniscrarray = ['MOR_scr','PER_scr','COL_scr','SJP_scr','KEL_scr','JAF_scr','RHU_scr','RAJ_scr','UVA_scr',
            'SAB_scr','WAY_scr','SEA_scr','EST_scr','VPA_scr'];

        $savedscores=array();

        foreach ($uniscrarray as $uniscr){
            $scr= DB::table('scores')->select('score')
                ->where('g_code', '=', $sport)
                ->where('category', '=', $category)
                ->where('u_code', '=', explode('_',$uniscr)[0])
                ->get();
            array_push($savedscores,$scr[0]->score);
        }

        return view('backend.deletepoints',array(
            'game'=> $sport,
            'category'=>$category,
            'scores0' => (string)$savedscores[0],
            'scores1' => (string)$savedscores[1],
            'scores2' => (string)$savedscores[2],
            'scores3' => (string)$savedscores[3],
            'scores4' => (string)$savedscores[4],
            'scores5' => (string)$savedscores[5],
            'scores6' => (string)$savedscores[6],
            'scores7' => (string)$savedscores[7],
            'scores8' => (string)$savedscores[8],
            'scores9' => (string)$savedscores[9],
            'scores10' => (string)$savedscores[10],
            'scores11' => (string)$savedscores[11],
            'scores12' => (string)$savedscores[12],
            'scores13' => (string)$savedscores[13],
        ));
    }

    public function savepointsdeleted(Request $request){
        $sport = $request->gamechoosed;
        $category = $request->catchoosed;
        DB::table('scores')->where('g_code', '=', $sport)
            ->where('category', '=', $category)
            ->delete();
        return view('backend.layout.success');
    }
    /* /point deletion*/

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