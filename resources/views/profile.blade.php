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
	
	$item_matches = array('parent_id' => $current_group_id, 'visible' => 1);
	$groupItems = Item::where($item_matches)->orderBy('created_at')->get();
	
	foreach ($groupItems as $item){
		$task_match = array('parent_id' => $item->id);
		$task = Task::where($task_match)->get();
		$item['task'] = $task;
		$item['complete'] = $task[0]->complete;
	}
	
	$items = $groupItems->sortBy('complete');
?>

@extends('layouts.master')

@section('header')
	@if($current_group_id == 0)
		<h1>{{ $user->name }}</h1>
	    <hr>
	    <a href="{{ URL::to('logout') }}" class="btn btn-info myBtn">LOGOUT</a>
	    <div class="spacer60"></div>
	@endif
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
    
    @if($current_group_id != 0 && count($groups) == 0)
		<div class="col-md-8 col-centered">
	    	@include('layouts.new_task')
	    	<div class="spacer20"></div>
	    	@if(count($items) > 0)
		    	@foreach($items as $item)
					@include('layouts.task')
				@endforeach
				
				@if(count($items) > 9)
					<div class="spacer20"></div>
		    		@include('layouts.new_task')
		    		<div class="spacer60"></div>
		    	@endif
		    	
		    @endif
	    </div>
    @endif
    
    @if(count($items) == 0)
    	@foreach($groups as $group)
    		<div class="col-md-4">
    			@include('layouts.groupBtn')
    		</div>
		@endforeach
		
		@if(count($groups) == 0)
			<div class="spacer40"></div>
			<div class="col-md-8 col-centered" id="newGroup">
		@else
			<div class="col-md-4" id="newGroup">
		@endif
		@include('layouts.newGroup')
		</div>
	@endif
@stop