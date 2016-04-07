<?php namespace App\Http\Controllers;

use App\event;
use DB;
class HomePageController extends Controller {
    
    public function index(){
        return view('homepage');
    }

    public function viewEvents(){

        return view('events');
    }

    public function getData(){

        $results = DB::select('select * from events');
        return $results;
    }
}
    
    