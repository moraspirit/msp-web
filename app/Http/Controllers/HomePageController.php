<?php namespace App\Http\Controllers;

use App\event;
use DB;
use App\Sport;

class HomePageController extends Controller {
    
    public function index(){

        $recent[] = ['men'=>'UOM won the men match','women'=>'UOM won the women match'];

        $messages [] = [ 'news1'=> 'Foodball match todday','news2'=>'cricket tomorrow',
            'news3'=>'news 3','news4'=>'news 4','news5'=>'news5 test for long text awefa awefaewf awefaewf ehe sdfbs e5eh'];

        return view('homepage',compact('messages','recent'));
    }

    public function viewEvents(){

        return view('eventspage');
    }

    public function viewCalendar(){

       return view('calendar');
    }

    public function getdata(){

        //$user = DB::connection('mongodb')->collection('test')->get();

        DB::connection('mongodb')->collection('test')->insert(array(
            'item' => "ABCD2",
            'details' => array('model' => "2016", 'manufacturer' => "dilu"),
            'stock' => array('size' => "M", 'qty' => "100"),
            'catagory' => "testdb"
        ));

        /*return view('homepage');*/

        $dbdata = Sport::all();
        return $dbdata;
    }



}
    
    