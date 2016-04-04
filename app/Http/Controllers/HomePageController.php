<?php namespace App\Http\Controllers;

use App\event;

class HomePageController extends Controller {
    
    public function index(){
        return view('homepage');
    }
    
    public function viewEvents(){

        return view('events');
    }
}
    
    