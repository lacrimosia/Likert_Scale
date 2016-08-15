<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertQuestionsIntoDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('question');
            $table->integer('slider_value');
        });


        // questions
        $data = array(
            array(
                "question" => "Which system is it fair to everyone?",
                "slider_value" => "0"
                ),
            array(
                "question" => "Which system provides an enhanced quality of life for the majority over time?",
                "slider_value" => "0"
                ),
            array(
                "question" => "Which system offers employment stability and economic security for the majority?",
                "slider_value" => "0"
                ),
            array(
                "question" => "Which system wastes fewer resources?",
                "slider_value" => "0"
                ),
            array(
                "question" => "Which system offers sufficient opportunities for all to do meaningful work?",
                "slider_value" => "0"
                )

            );


        DB::table('questions')->insert($data); // insert into questions table
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
