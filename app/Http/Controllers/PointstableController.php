<?php
/**
 * Created by PhpStorm.
 * User: Tharindu Diluksha
 * Date: 6/21/2016
 * Time: 11:56 AM
 */

namespace app\Http\Controllers;
use App\Entity\Points;


class PointstableController extends Controller
{
    public function showPoints(){

        /*$points = Points::all();
        echo $points[0]['sport'];*/
        /*return $points;*/
        $points = Points::/*groupBy('university','sport','catagory')->*/
            orderBy('university','asc')
            ->orderBy('catagory', 'asc')
            ->groupBy('university','sport')
            ->get(array('university','sport','catagory','points','total'));
        return $points;


        /*$cursor = Points::raw()->aggregate([
            ['$group' =>
                ['_id' => '$university', 'count' => ['$sum' => 1]]
            ],
            ['$sort' => ['count' => -1]],
            ['$limit' => 30],
            ['$project' => ['_id' => 0,
                'text' => '$_id',
                'size' => '$count',
            ]
            ],
        ]);*/
        /*foreach ($points as $point){
            $points['university'];
            $points['sport'];
            $points['catagory'];
            $points['points'];
        }

        for ($x =0; $x< sizeof($points);$x++){


        }*/

        return view('frontend.pointstable');
    }
}