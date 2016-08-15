@extends('layout')

@section('content')
	<div class="traits">
    <h3>Ask yourself the following:</h3>
    <div class="question">
        <h2>{{$questions->question}}</h2>
    </div>
    <div class="titless">
        <span class="cs">{{$socialism}}</span>
        <span class="sc">{{$capitalism}}</span>
    </div>
    <div class="scaleArea">
        <div id="slider"></div>
    </div>
    <div class="navbuttons">
        <!-- <button class="Prev btn"><i class="fa fa-arrow-left"></i> Prev</button> -->
        <button class="Next btn">Next <i class="fa fa-arrow-right"></i></button>
        <button class="Fin btn">Finish <i class="fa fa-arrow-right"></i></button>
    </div>
        <div class="final animated fadeIn">
        <canvas id="graph" width="300" height="300"></canvas>
        <div class="tally">
            <div class="percentage"></div>
            <div class="theTraits"></div>
        </div>
    </div>
    </div>
@stop