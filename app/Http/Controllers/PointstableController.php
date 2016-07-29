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

        $badminton_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','BAD')
            ->where('category','M')
            ->get();
        $badminton_m=array_map(function($item){
            return (array) $item;
        },$badminton_m);


        $badminton_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','BAD')
            ->where('category','W')
            ->get();
        $badminton_w=array_map(function($item){
            return (array) $item;
        },$badminton_w);

        $baseball_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','BB')
            ->where('category','M')
            ->get();
        $baseball_m=array_map(function($item){
            return (array) $item;
        },$baseball_m);


        $basketball_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','BSK')
            ->where('category','M')
            ->get();
        $basketball_m=array_map(function($item){
            return (array) $item;
        },$basketball_m);

        $basketball_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','BSK')
            ->where('category','W')
            ->get();
        $basketball_w=array_map(function($item){
            return (array) $item;
        },$basketball_w);


        $carrom_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','CAR')
            ->where('category','M')
            ->get();
        $carrom_m=array_map(function($item){
            return (array) $item;
        },$carrom_m);


        $carrom_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','CAR')
            ->where('category','W')
            ->get();
        $carrom_w=array_map(function($item){
            return (array) $item;
        },$carrom_w);

        $chess_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','CHE')
            ->where('category','M')
            ->get();
        $chess_m=array_map(function($item){
            return (array) $item;
        },$chess_m);


        $chess_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','CHE')
            ->where('category','W')
            ->get();
        $chess_w=array_map(function($item){
            return (array) $item;
        },$chess_w);


        $cricket_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','CRK')
            ->where('category','M')
            ->get();
        $cricket_m=array_map(function($item){
            return (array) $item;
        },$cricket_m);


        $elle_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','ELL')
            ->where('category','M')
            ->get();
        $elle_m=array_map(function($item){
            return (array) $item;
        },$elle_m);


        $elle_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','ELL')
            ->where('category','W')
            ->get();
        $elle_w=array_map(function($item){
            return (array) $item;
        },$elle_w);


        $football_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','FB')
            ->where('category','M')
            ->get();
        $football_m=array_map(function($item){
            return (array) $item;
        },$football_m);


        $hockey_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','HOC')
            ->where('category','M')
            ->get();
        $hockey_m=array_map(function($item){
            return (array) $item;
        },$hockey_m);

        $hockey_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','HOC')
            ->where('category','W')
            ->get();
        $hockey_w=array_map(function($item){
            return (array) $item;
        },$hockey_w);


        $karate_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','KAR')
            ->where('category','M')
            ->get();
        $karate_m=array_map(function($item){
            return (array) $item;
        },$karate_m);

        $karate_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','KAR')
            ->where('category','W')
            ->get();
        $karate_w=array_map(function($item){
            return (array) $item;
        },$karate_w);


        $netball_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','NRT')
            ->where('category','W')
            ->get();
        $netball_w=array_map(function($item){
            return (array) $item;
        },$netball_w);


        $roadrace_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','RR')
            ->where('category','M')
            ->get();
        $roadrace_m=array_map(function($item){
            return (array) $item;
        },$roadrace_m);


        $rowing_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','RR')
            ->where('category','M')
            ->get();
        $rowing_m=array_map(function($item){
            return (array) $item;
        },$rowing_m);


        $rugby_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','RUG')
            ->where('category','M')
            ->get();
        $rugby_m=array_map(function($item){
            return (array) $item;
        },$rugby_m);


        $swiming_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','SWM')
            ->where('category','M')
            ->get();
        $swiming_m=array_map(function($item){
            return (array) $item;
        },$swiming_m);


        $swiming_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','SWM')
            ->where('category','W')
            ->get();
        $swiming_w=array_map(function($item){
            return (array) $item;
        },$swiming_w);


        $tabletennis_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TT')
            ->where('category','M')
            ->get();
        $tabletennis_m=array_map(function($item){
            return (array) $item;
        },$tabletennis_m);


        $tabletennis_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TT')
            ->where('category','W')
            ->get();
        $tabletennis_w=array_map(function($item){
            return (array) $item;
        },$tabletennis_w);


        $taekwondo_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TAE')
            ->where('category','M')
            ->get();
        $taekwondo_m=array_map(function($item){
            return (array) $item;
        },$taekwondo_m);



        $taekwondo_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TAE')
            ->where('category','W')
            ->get();
        $taekwondo_w=array_map(function($item){
            return (array) $item;
        },$taekwondo_w);


        $tennis_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TEN')
            ->where('category','M')
            ->get();
        $tennis_m=array_map(function($item){
            return (array) $item;
        },$tennis_m);


        $tennis_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TEN')
            ->where('category','W')
            ->get();
        $tennis_w=array_map(function($item){
            return (array) $item;
        },$tennis_w);

        $taf_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TAF')
            ->where('category','M')
            ->get();
        $taf_m=array_map(function($item){
            return (array) $item;
        },$taf_m);


        $taf_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','TAF')
            ->where('category','W')
            ->get();
        $taf_w=array_map(function($item){
            return (array) $item;
        },$taf_w);


        $volleyball_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','VB')
            ->where('category','M')
            ->get();
        $volleyball_m=array_map(function($item){
            return (array) $item;
        },$volleyball_m);


        $volleyball_w = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','VB')
            ->where('category','W')
            ->get();
        $volleyball_w=array_map(function($item){
            return (array) $item;
        },$volleyball_w);


        $wl_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','WL')
            ->where('category','M')
            ->get();
        $wl_m=array_map(function($item){
            return (array) $item;
        },$wl_m);


        $wrl_m = DB::table('points')
            ->select('points','u_code')
            ->where('g_code','WRL')
            ->where('category','M')
            ->get();
        $wrl_m=array_map(function($item){
            return (array) $item;
        },$wrl_m);


        return view('points',compact('badminton_m','badminton_w','baseball_m','basketball_m',
            'basketball_w','carrom_w','carrom_m','chess_m','chess_w','cricket_m','elle_m','elle_w',
        'football_m','hockey_m','hockey_w','karate_m','karate_w','netball_w','roadrace_m','rowing_m',
        'rugby_m','swiming_m','swiming_w','tabletennis_m','tabletennis_w','taekwondo_m','taekwondo_w',
            'tennis_m','tennis_w','taf_m','taf_w','volleyball_m','volleyball_w','wl_m','wrl_m'));

    }
}