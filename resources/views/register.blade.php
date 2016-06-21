@extends('layouts.master')

@section('header')

	<div class="header">
		<h1>REGISTER</h1>
	    <hr class="simple-line">
	</div>

@stop

@section('content') 

	<div class="contact-form">
		{!! Form::open(array('url' => 'register')) !!}
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name') !!}
			<br>
			{!! Form::label('email', 'Email Address') !!}
			{!! Form::text('email') !!}
			<br>
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password') !!}
			<div class="spacer20"></div>
			{!! Form::submit('Register', array('class' => 'formBtn')) !!}
		{!! Form::close() !!}
	</div>
	<div class="spacer40"></div>
	<div class="text-center">
    	<h4><a href="{{ URL::to('login') }}" >Already a user? Login here!</a></h4>
    </div>

@stop