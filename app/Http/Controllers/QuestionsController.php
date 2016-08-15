<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \DB;
use App\Http\Requests;

class QuestionsController extends Controller
{
    public function display(){
    	$socialism = "Socialism"; //title1
    	$capitalism = "Capitalism"; // title2
    	$questions = DB::table('questions')->first(); // display first record
   return view('question')->with(['socialism'=>$socialism, 'capitalism'=>$capitalism, 'questions'=>$questions]);
    }

    public function incrementSlider(){

    	// updates the database slider value
    	$add = DB::table('questions')->where('id', 1)->update(array('slider_value' => 12345678));
    	$value = DB::table('questions')->first()->slider_value;
    	return view('test')->with(['add'=>$add,'value'=>$value]);
    }
}
