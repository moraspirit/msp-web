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

        $points = Points::all();
        return $points;
    }
}