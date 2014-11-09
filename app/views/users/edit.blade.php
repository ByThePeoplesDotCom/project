@extends('layout')

@section('content')
<div class="container" style="margin-top:75px">
<div class="row">
<div class="col-md-4">
	{{ Form::model($user) }}
		<div>
		{{ Form::label('name', 'Name: ') }}
		{{ Form::text('name') }}
		</div>
		<div>
			{{ Form::label('email', 'Email: ') }}
			{{ Form::text('email') }}
		</div>
		<div>
			{{ Form::submit('Update User') }}
		</div>
	{{Form::close() }}

@stop
