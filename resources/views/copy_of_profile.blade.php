<?php
	$user = Auth::user();
	$current_group_id = session()->get('current_group');
	
	if($current_group_id != 0){
		$current_group = Group::find($current_group_id);
	}else{
		$current_group = null;
	}
	
	$group_matches = array('user_id' => $user->id, 'parent_id' => $current_group_id);
	$groups = Group::where($group_matches)->orderBy('name')->get();
	 
?>

@extends('layouts.master')

@section('header')

	<div class="header">
		<h1>{{ $user->name }}</h1>
	    <hr class="simple-line">
	    <a href="{{ URL::to('logout') }}" class="myBtn">LOGOUT</a>
	    <div class="spacer60"></div>
	    <!--
        <p>Your user ID is {{ session()->get('user_id') }}</p>
        <p>Current group is {{ session()->get('current_group') }}</p>
        -->
	</div>

@stop

@section('content') 

    <div class="row">
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
        
    	@foreach($groups as $group)
			<div class="col-md-4">
				<div class="groupBtn">
				<a href="{{ URL::to('profile/' . $group->id) }}">
					<div class="groupText">
						{{ $group->name }}
					</div>
				</a>
				<a class="editGroup" onClick="editGroup('{{ $group->name }}', '{{ $group->id }}')" href="#">
						<span class="glyphicon glyphicon-pencil small deleteBtn" aria-hidden="true"></span>
				</a>
				<a href="{{ URL::to('delete_group/' . $group->id) }}">
						<span class="glyphicon glyphicon-remove small deleteBtn" aria-hidden="true"></span>
				</a>
				</div>
			</div>
		@endforeach
		
		<div class="col-md-4">
			<div class="groupBtn" >
			{!! Form::open(array('url' => 'new_group')) !!}
				{!! csrf_field() !!}
				{!! Form::text('name', '', array('placeholder'=>'NEW GROUP', 'style'=>'float:left; width:80%; height:40px')) !!}
				{!! Form::submit('+', array('style'=>'width:20%; height:40px')) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>

@stop	

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/bootbox.min.js') }}"></script>
	
	<script>
		function editGroup(groupName, groupId) {
		   bootbox.prompt({
			  title: "Edit Group",
			  value: groupName,
			  callback: function(result) {
			  	console.log(groupName + " edited")
			  	post('/editGroup/', {name: groupName});
			  }
			});
		}
		
    </script>
@stop