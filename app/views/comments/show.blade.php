@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
		<h1>{{ $bill_id }}</h1>
		<p>{{$bill_info[0]['title']}}</p>
		<p><a href="{{$bill_info[0]['url2']}}">read the bill</a></p>
		
			<ul>
				@foreach ($comments as $comment)
					<li>{{ $comment->comment }}</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
