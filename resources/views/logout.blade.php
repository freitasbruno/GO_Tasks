@extends('layouts.master')

@section('header')

	<div class="header">
		<h1>LOGOUT</h1>
	    <hr class="simple-line">
	</div>

@stop

@section('content') 

    <h3>Goodbye!<br>You have logged out from GO</h3>
    <a href="{{ URL::to('login') }}" class="myBtn">Log back in?</a>
	
@stop