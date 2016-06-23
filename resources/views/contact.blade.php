@extends('layouts.master')

@section('header')

	<h1>
    	CONTACT
    </h1>
    <hr>
    <h3>
    	<span class="small">
    		Send me your comments and queries.<br>
    		Fill the form below or email me at {{ Html::mailto('mail@bitlab.pt') }}
    	</span>
    </h3>

@stop

@section('content')

	<div class="spacer40"></div>
	<div class="col-md-6 col-centered">
		{!! BootForm::open(array('url' => 'contact')) !!}
			{!! BootForm::text('name') !!}
			{!! BootForm::email() !!}
			{!! BootForm::textarea('message') !!}
			{!! BootForm::submit('Send') !!}
		{!! BootForm::close() !!}
	</div>

@stop