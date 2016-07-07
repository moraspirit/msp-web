<?php namespace App\Http\Controllers;

use App\event;
use DB;
use App\Sport;

class HomePageController extends Controller {
    
    public function index(){
        return view('homepage');
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
    
    