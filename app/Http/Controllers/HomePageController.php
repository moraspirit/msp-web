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


       $summeryitems = DB::table('summaries')->orderBy('id', 'desc')->take(15)->get();

        foreach($summeryitems as $summeryitem){

            $sums1 = DB::table('universities')->where('uni_code',$summeryitem->t_a_code)->get();

            foreach($sums1 as $sum1){
                $logo1 = $sum1->logo;
                $name1 = $sum1->uni_name;
            }

            $sums2 = DB::table('universities')->where('uni_code',$summeryitem->t_b_code)->get();

            foreach($sums2 as $sum2){
                $logo2 = $sum2->logo;
                $name2 = $sum2->uni_name;
            }


           $summery [] = ['title'=>$summeryitem->heading, 'vs1'=> $summeryitem->t_a_code, 'vs2'=> $summeryitem->t_b_code,
                            'logo1'=>$logo1, 'logo2'=> $logo2 , 'dvs' => $name1.' '.'vs'.' '.$name2, 'won'=> $summeryitem->t_won,
                            'summery'=> $summeryitem->summery, 't_a_score'=>$summeryitem->t_a_score,'t_b_score'=> $summeryitem->t_b_score

            ];
        }
    return serialize($summery);
        return view('home',compact('summery','ovwomen','ovmen','ovall'));
    }


    public function getlive(){
        return view('live');
    }



}
    
    