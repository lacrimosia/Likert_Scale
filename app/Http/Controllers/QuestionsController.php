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

    public function incrementSlider($id){

    	// updates the database slider value
        $num = 0;
        $num+=1;
    	$add = DB::table('questions')->where('id', 1)->update(array('slider_value' => $num));
    	//$value = DB::table('questions')->first()->slider_value;
       // $questions = DB::table('questions')->simplePaginate(1);
      //  $questions = $id;
    	return view('test')->with(['add'=>$add,'value'=>$value]);
       //  $questions = DB::table('questions')->where('id', '1')->get();
        // return view('test')->with(['questions'=>$questions]);
    }
}
