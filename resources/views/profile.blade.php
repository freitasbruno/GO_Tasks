<?php
	$user = Auth::user();
	$current_group_id = session()->get('current_group');
	
	if($current_group_id != 0){
		$current_group = Group::find($current_group_id);
	}else{
		$current_group = null;
	}
	
	$group_matches = array('user_id' => $user->id, 'parent_id' => $current_group_id, 'visible' => 1);
	$groups = Group::where($group_matches)->orderBy('name')->get();
	 
?>

@extends('layouts.master')

@section('header')
		<h1>{{ $user->name }}</h1>
	    <hr>
	    <a href="{{ URL::to('logout') }}" class="btn btn-info myBtn">LOGOUT</a>
	    <div class="spacer60"></div>
	</div>

@stop

@section('content') 

	<div class="col-md-4 col-centered text-center">
    	@if($current_group_id == 0)
        	<h2>My Groups</h2>
        @else
        	<h2>
        		<a href="{{ URL::to('profile/' . $current_group->parent_id) }}">
        			<span class="glyphicon glyphicon-menu-left small" aria-hidden="true"></span>
        		</a>
        		&ensp;{{ $current_group->name }}
        	</h2>
        @endif
        <div class="spacer20"></div>
    </div>
    
    <div class="row"></div>
    	@foreach($groups as $group)
    		@include('layouts.groupBtn')
		@endforeach
		
		@include('layouts.newGroup')
		
	</div>

@stop