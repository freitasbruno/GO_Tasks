<!DOCTYPE html>
<html>
	<head>
	    <title>GO</title>
		<!-- General CSS -->
	    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	    
	    <!-- Custom CSS -->
		<link rel="stylesheet" href="{{ URL::asset('/css/custom.css') }}" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>		
		<!-- JS Files -->
		<script type="text/javascript" src="{{ URL::asset('/js/custom.js') }}"></script>
	</head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">GO</div>
                <div class="small">Group Organizer . Basic Template</div>
                @if(Auth::check())
                	<a href="{{ URL::to('profile') }}" class="myBtn">MY PROFILE</a>
                @else
                	<a href="{{ URL::to('login') }}" class="myBtn">LOGIN</a>
                @endif
            </div>
        </div>
    </body>
</html>
