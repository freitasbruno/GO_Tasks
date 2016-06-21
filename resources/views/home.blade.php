@extends('layouts.master')

@section('header')

	<div class="header">
		<h1>
	    	GO
	    </h1>
	    <hr class="simple-line">
	    <h3>
	    	Group Organizer
	    </h3>
	    <h3 class="text-center">
	    	<span class="small">
	    		GO is a boilerplate for creating apps that store information in a Group hierarchy structure. 
	    	</span>
	    </h3>
	</div>

@stop

@section('content') 

    @if(Auth::check())
    	<a href="{{ URL::to('profile') }}" class="myBtn">MY PROFILE</a>
    @else
    	<a href="{{ URL::to('login') }}" class="myBtn">LOGIN</a>
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
	
@stop