@extends('layouts.master')

@section('header')

	<h1>
    	GO
    </h1>
    <hr>
    <h3>
    	Group Organizer
    </h3>
    <h3 class="intro">
    	<span class="small">
    		GO is a boilerplate for creating apps that store information in a Group hierarchy structure.
    		It supports user authentication and includes a GROUP model, with interfaces for creating, renaming and deleting groups. 
    	</span>
    </h3>

@stop

@section('content') 

	<div class="spacer20"></div>
	<div class="col-md-4 col-centered text-center">
	    @if(Auth::check())
	    	<a href="{{ URL::to('profile') }}" class="myBtn">MY PROFILE</a>
	    @else
	    	<a href="{{ URL::to('login') }}" class="btn btn-info myBtn">LOGIN</a>
	    @endif
	
		<div class="spacer60"></div>
		<h3>DOWNLOAD</h3>
		<h3 class="text-center">
	    	<span class="small">
	    		GO is a Open Source project, the source code is available on Github for download!
	    	</span>
	    	<div class="spacer20"></div>
	    	<a href="{{ URL::to('https://github.com/freitasbruno/GO.git') }}" target="blank"><img src="{{ asset('images/GitHub-Mark-64px.png') }}" /></a>
	    </h3>
	</div>
	
@stop