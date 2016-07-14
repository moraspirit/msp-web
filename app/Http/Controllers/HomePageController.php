<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\App;
use App\Entity\Score;

class HomePageController extends Controller {
    
    public function index(){

        $ovmenitms = DB::table('scores')
            ->select('u_code',DB::raw('sum(score) as score'))
            ->groupBy('u_code')
            ->where('category','M')
            ->orderBy('score','desc')
            ->get();

        foreach($ovmenitms as $ovitem){
            $ovmen[] = ['u_code'=> $ovitem->u_code,'score'=> $ovitem->score];
        }

        $ovwomenitms = DB::table('scores')
            ->select('u_code',DB::raw('sum(score) as score'))
            ->groupBy('u_code')
            ->where('category','F')
            ->orderBy('score','desc')
            ->get();

        foreach($ovwomenitms as $ovwoitem){
            $ovwomen[] = ['u_code'=> $ovwoitem->u_code,'score'=> $ovwoitem->score];
        }


        $marquee = array(['title'=>'Cricket','vs'=>'UOM vs UOC','won'=>'UOM'],
            ['title'=>'Volleyball','vs'=>'UOM vs UOC','won'=>'UOM']
            );

        return view('home',compact('marquee','ovwomen','ovmen'));
    }





}
    
    