@extends('layouts.master')

@section

		{{--@foreach($users as $user)--}}
			{{--<li>{{ link_to($user->username, $user->username); }}</li>--}}
		{{--@endforeach--}}

		{{ Form::open(array('url' => 'dashboard')) }}
		<div class="form-group">
			{{Form::label('email', 'E-Mail Address') }}
			{{ Form::text('email', 'example@gmail.com') }}
</div>
<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
</div>
<br/><br/>
			{{ Form::submit('Sign in') }}
        {{ Form::close() }}





@stop
