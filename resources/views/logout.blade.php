@extends('layouts.master')

@section('header')
	<h1>LOGOUT</h1>
    <hr>
@stop

@section('content') 
	<div class="spacer40"></div>
	<div class="col-md-6 col-centered text-center">
	    <h3>Goodbye!<br>You have logged out from GO</h3>
	    <h4><a href="{{ URL::to('login') }}">Log back in?</a></h4>
	</div>
@stop