<?php
/**
 * Created by PhpStorm.
 * User: Tharindu Diluksha
 * Date: 6/21/2016
 * Time: 11:56 AM
 */

namespace app\Http\Controllers;
use App\Entity\Point;
use DB;

class PointstableController extends Controller
{
    public function showPoints(){

        

        return view('points',compact('badminton_m','badminton_w','baseball_m','basketball_m',
            'basketball_w','carrom_w','carrom_m','chess_m','chess_w','cricket_m','elle_m','elle_w',
        'football_m','hockey_m','hockey_w','karate_m','karate_w','netball_w','roadrace_m','rowing_m',
        'rugby_m','swiming_m','swiming_w','tabletennis_m','tabletennis_w','taekwondo_m','taekwondo_w',
            'tennis_m','tennis_w','taf_m','taf_w','volleyball_m','volleyball_w','wl_m','wrl_m'));

    }
}