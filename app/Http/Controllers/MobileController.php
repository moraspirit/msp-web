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


                //$allscores[explode('_', $uniscr)[0]]=$scr;
            array_push($allscores,$score);

        }

        /*function sortPoints($a, $b){
            return strcmp($a["points"],$b["points"]);
        }

        //usort($allscores,sortPoints($allscores[0][0],$allscores[0][1]));
        usort($allscores,array($this, "MobileController::sortPoints"));*/

        return array(
            $allscores
        );

        /*return Response::json(array('key' => 'value'));*/
        /*return Response::json($allscores);*/
        /*return view('test');*/
    }

}
