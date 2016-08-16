<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\question;
use \DB;
use App\Http\Requests;

class QuestionsController extends Controller
{
    public function display($id){
    	$socialism = "Socialism"; //title1
    	$capitalism = "Capitalism"; // title2
    //	$questions = DB::table('questions')->first(); // display first record

      // randomized questions loaded from the database
      $randomQuestion = rand(1,5);
      $questions = question::find($id);
      $updateSlider = \App\question::find($id);
      $updateSlider->slider_value = 404;
      $updateSlider->save();
   return view('question')->with(['socialism'=>$socialism, 'capitalism'=>$capitalism, 'questions'=>$questions]);
    }

    public function incrementSlider(){

    	// updates the database slider value
    //    $num = 0;
    //    $num+=1;
  //  	$add = DB::table('questions')->where('id', 1)->update(array('slider_value' => $num));
    	//$value = DB::table('questions')->first()->slider_value;
       // $questions = DB::table('questions')->simplePaginate(1);
      //  $questions = $id;
    //	return view('test')->with(['add'=>$add,'value'=>$value]);
       //  $questions = DB::table('questions')->where('id', '1')->get();
    //  $question = new question; --- adds new record
      $num = rand(1, 5);
      $question = \App\question::find($num); // -- adds to existing recording with primary key of 1
      $question->slider_value = 32;
      $question->save();
         return view('test')->with(['question'=>$question]);
    }
}
