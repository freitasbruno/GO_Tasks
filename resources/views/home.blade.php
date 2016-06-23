@extends('layouts.master')

@section('header')

	<h1>
    	GO Tasks
    </h1>
    <hr>
    <h3>
    	Task Manager
    </h3>
    <h3 class="intro">
    	<span class="small">
    		GO Tasks is a Task manager that uses a Group hierarchy structure.
    		It is based on GO . Group Organizer, supports user authentication and includes models for GROUPS, ITEMS and TASKS, with interfaces for creating, renaming and deleting instances. 
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