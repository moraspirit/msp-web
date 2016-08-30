<?php
/**
 * Created by PhpStorm.
 * User: Tharindu Diluksha
 * Date: 8/6/2016
 * Time: 7:30 PM
 */

namespace app\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class MobileController extends Controller
{
    public function getmobileScores(){

        $uniscrarray = ['MOR_scr','PER_scr','COL_scr','SJP_scr','KEL_scr','JAF_scr','RHU_scr','RAJ_scr','UVA_scr',
            'SAB_scr','WAY_scr','SEA_scr','EST_scr','VPA_scr'];

        $allscores=array();
        foreach ($uniscrarray as $uniscr) {
            $scr = DB::table('scores')
                ->select('score','u_code')
                ->groupBy('u_code')
                ->where('u_code', '=', explode('_', $uniscr)[0])
                ->sum('score');

            $score=array();
            $score["name"]=explode('_', $uniscr)[0];
            $score["points"]=$scr;
            array_push($allscores,$score);
        }
        return array($allscores);
    }

    public function getmobileSummaries($index){

        $summaries = DB::table('summaries')
            ->get();

        $allsummaries = array();
        foreach($summaries as $summary){
            $onesummary=array();
            $onesummary["gameSummary"] = $summary->summery;
            $onesummary["heading"] = $summary->heading;
            $onesummary["t_won"] = $summary->t_won;
            if($onesummary["t_won"] == $summary->t_a_code){
                $onesummary["t_lost"] = $summary->t_b_code;
                $onesummary["t_won_score"] = $summary->t_a_score;
                $onesummary["t_lost_score"] = $summary->t_b_score;
            }
            else{
                $onesummary["t_lost"] = $summary->t_a_code;
                $onesummary["t_won_score"] = $summary->t_b_score;
                $onesummary["t_lost_score"] = $summary->t_a_score;
            }
            array_push($allsummaries,$onesummary);
        }
        return array($allsummaries);
    }
}
