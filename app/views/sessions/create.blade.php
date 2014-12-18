@extends('layout')

@section('content')

<h1>Login</h1>

 {{ Form::open(array('route' => 'sessions.store')) }}
         	<div class="form-group">
         			{{Form::label('email', 'E-Mail Address') }}
         			{{ Form::email('email', 'example@gmail.com') }}
         	</div>
         	<div class="form-group">
         			{{ Form::label('password', 'Password') }}
         			{{ Form::password('password') }}
         	</div>
         			{{ Form::submit('Sign in') }}
 {{ Form::close() }}

@stop