@extends('app')
@section('content')

	{{ Form::open(['url' => '/'.@$user->id, 'method' =>'put']) }}
		{{ HTML::ul($errors->all()) }}
		<!-- `Name` Field -->
		{{ Form::label('name', 'Name') }}
		{{ Form::text('user[name]', @$user->name) }} 
		<!-- `Email` Field -->
		{{ Form::label('email', 'Email') }}
		{{ Form::text('user[email]', @$user->email) }}
		<!-- `Phone` Field -->
		{{ Form::label('phone', 'Phone') }}
		{{ Form::text('user[phone]', @$user->phone) }}
		<!-- Form actions -->
		<a href='{{URL::previous()}}' >Cancel</a>
		<button type='submit' >Submit</button>
	{{ Form::close() }}
@stop
