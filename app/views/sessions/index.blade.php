@extends('layouts.master')


@section('content')

<h1>Login</h1>
	<div class="col-md-4">
    		{{ Form::open(['route' => 'sessions.store']) }}
                    	<div class="form-group">
                    			{{ Form::label('email', 'E-Mail Address') }}
                    			{{ Form::email('email') }}
                    	</div>
                    	<div class="form-group">
                    			{{ Form::label('password', 'Password') }}
                    			{{ Form::password('password') }}
                    	</div>
                    			{{ Form::submit('Sign in') }}
                            {{ Form::close() }}
	</div>

	<div class="col-md-8">


	</div>
@stop