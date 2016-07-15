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

        $ovallitms = DB::table('scores')
            ->select('u_code',DB::raw('sum(score) as score'))
            ->groupBy('u_code')
            ->orderBy('score','desc')
            ->get();


        foreach($ovallitms as $ovitem){
            $unis = DB::table('universities')->where('uni_code',$ovitem->u_code)->get();

            foreach($unis as $uni){
                $logo = $uni->logo;
                $name = $uni->uni_name;
            }

            $ovall[] = ['score'=> $ovitem->score,'logo'=>$logo,'name'=>$name];
        }

        $marquee = array(['title'=>'Cricket','vs'=>'UOM vs UOC','won'=>'UOM','logo1'=>'UOM.png','logo2'=>'UOC.png'],
            ['title'=>'Volleyball','vs'=>'UOM vs UOC','won'=>'UOM','logo1'=>'UOM.png','logo2'=>'UOC.png'],
            ['title'=>'Track and field','vs'=>'UOJ vs UOK','won'=>'UOJ','logo1'=>'UOJ.png','logo2'=>'UOK.png']
            );



        return view('home',compact('marquee','ovwomen','ovmen','ovall'));
    }





}
    
    