@extends('layouts.master')

@section('header')

	<div class="header">
	    <h1>
	    	CONTACT
	    </h1>
	    <hr class="simple-line">
	    <h3>
	    	<span class="small">
	    		Send me your comments and queries.<br>
	    		Fill the form below or email me at {{ Html::mailto('mail@bitlab.pt') }}
	    	</span>
	    </h3>
	</div>

@stop

@section('content')

	<div class="content">
	    <div class="contact-form">
			{!! Form::open(array('url' => 'contact')) !!}
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name') !!}
				<br>
				{!! Form::label('email', 'Email Address') !!}
				{!! Form::text('email') !!}
				<br>
				{!! Form::label('message', 'Message') !!}
				{!! Form::textarea('message') !!}
				<br>
				{!! Form::submit('Send', array('class' => 'formBtn')) !!}
			{!! Form::close() !!}
		</div>
	</div>

@stop