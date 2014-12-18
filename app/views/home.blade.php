@extends('layouts.master')

@section('content')

		{{--@foreach($users as $user)--}}
			{{--<li>{{ link_to($user->username, $user->username); }}</li>--}}
		{{--@endforeach--}}

		{{ Form::open(array('sessions' => 'sessions.store')) }}
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
