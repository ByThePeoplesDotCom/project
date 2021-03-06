@extends('layout')

@section('content')

<div id="wrapper">
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><p style="font-size:50px; margin-top:75px;"><strong> {{ $user->username }} </strong></p></li>
			<li><h4>Details:</h4>
			<li><p><strong>Politicians from Disctrict #{{ $user->leg_district }}</strong></p></li>

			<div class="pols">
				@foreach ($q as $rep)
					<li><a href="#viewRep"><strong>{{ $rep['json.first_name'] }} {{ $rep['json.last_name'] }}</strong></a>
				@endforeach
			</div>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-9">
			<div class="row">
			<h4>Politicians from your district are the Primary Sponsor of these bills:</h4>
				<div class="col-md-4" style="height:400px; overflow-y:scroll;">
				<h4 style="background:black; color:white; text-align:center; "><strong>{{$q[0]['json.first_name']}} {{$q[0]['json.last_name']}}</strong></h4>
				@foreach($h1 as $v)
				<div style="border-style:dotted; border-width:2px; padding:5px; margin-bottom:5px;">
					<p><strong>{{ $v['name'] }}</strong></p>
					<p>{{ $v['title'] }}</p>
					<p><a href='{{ $v['url2'] }}'>Read the bill here.</a></p>
					<p>{{ $v['subjects'] }}</p>
					{{ Form::open(array('action' => 'CommentController@store')) }}
					{{ Form::textarea('comment', null, array('style' => 'width: 100%; height: 100px;', 'class' => 'form-control textbox')) }}
					{{ Form::hidden('bill_id', $v['name']) }}
					{{ Form::submit('Submit') }}
					{{ Form::close() }}
				</div>
				@endforeach
				</div>
				<div class="col-md-4" style="height:400px; overflow-y:scroll;">
				<h4 style="background:black; color:white; text-align:center;"><strong>{{$q[1]['json.first_name']}} {{$q[1]['json.last_name']}}</strong></h4>
				@foreach($h2 as $v2)
				<div style="border-style:dotted; border-width:2px; padding:5px; margin-bottom:5px; ">
						<p><strong>{{ $v2['name'] }}</strong></p>
						<p>{{ $v2['title'] }}</p>
						<p><a href='{{ $v2['url2'] }}'>Read the bill here.</a></p>
						<p>{{ $v2['subjects'] }}</p>
						{{ Form::open(array('action' => 'CommentController@store')) }}
						{{ Form::textarea('comment', null, array('style' => 'width:100%; height: 100px;', 'class' => 'form-control textbox')) }}
						{{ Form::hidden('bill_id', $v2['name']) }}
						{{ Form::submit('Submit') }}
						{{ Form::close() }}
				</div>
				@endforeach
				</div>
				<div class="col-md-4" style="height:400px; overflow-y:scroll;">
				<h4 style="background:black; color:white; text-align:center;"><strong>{{$q[2]['json.first_name']}} {{$q[2]['json.last_name']}}</strong></h4>
				@foreach($s as $v3)
				<div style="border-style:dotted; border-width:2px; padding:5px; margin-bottom:5px;">
						<p><strong>{{ $v3['name'] }}</strong></p>
						<p>{{ $v3['title'] }}</p>
						<p><a href='{{ $v3['url2'] }}'>Read the bill here.</a></p>
						<p>{{ $v3['subjects'] }}</p>
						{{ Form::open(array('action' => 'CommentController@store')) }}
						{{ Form::textarea('comment', null, array('style' => 'width: 100%; height: 100px;', 'class' => 'form-control textbox')) }}
						{{ Form::hidden('bill_id', $v3['name']) }}
						{{ Form::submit('Submit') }}
						{{ Form::close() }}
				</div>
				@endforeach
				</div>
	  	</div>
<div class="col-md-4">
@stop
