<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
		<title>Authentication App With Laravel 4</title>
	</head>
	<body>
		<div>
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">CoDev</a></li>
							<li>{{ HTML::link('users/login', 'Login') }}</li>
							<li>{{ HTML::link('users/register', 'Register') }}</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		 <div class="container">
		    @if(Session::has('message'))
		        <p class="alert">{{ Session::get('message') }}</p>
		    @endif
		</div>
		<div>
			{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
			    <h2 class="form-signup-heading">Please Register</h2>
			 
			    <ul>
			        @foreach($errors->all() as $error)
			            <li>{{ $error }}</li>
			        @endforeach
			    </ul>
			 
			    {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'User Name')) }}
			    <br />
			    {{ Form::text('fullname', null, array('class'=>'form-control', 'placeholder'=>'Full name')) }}
			    <br />
			    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
			    <br />
			    {{ Form::text('website', null, array('class'=>'form-control', 'placeholder'=>'Website')) }}
			    <br />
			    {{ Form::textarea('about', null, array('class'=>'form-control', 'placeholder'=>'About')) }}
			    <br />
			    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
			    <br />
			    {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
			    <br />
			 
			    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
			{{ Form::close() }}
		</div>
		<!--<div class="container">
		    <div class="row">
		        <div class="col-xs-12"></div>
		        <div class="col-xs-9 col-sm-8"></div>
		        <div class="col-xs-3 col-sm-4"></div>
		        <div class="col-xs-12"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-xs-12"></div>
		    </div>
		</div>-->
	</body>
</html>