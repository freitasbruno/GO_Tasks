@extends('layouts.master')

@section('header')

	<div class="header">
		<h1>Welcome to GO</h1>
		<h3>{{ $theEmail }}</h3>
	    <hr class="simple-line">
	</div>

@stop

@section('content') 
    <a href="{{ URL::to('login') }}" class="myBtn">Login</a>
@stop