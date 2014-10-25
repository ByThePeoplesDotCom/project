@extends('layout')

@section('content')
<div class="container" style="margin-top:50px">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
@foreach ($users as $user)
    <p>This is user {{ $user->name }}. Email is {{ $user->email }}</p>
    <p>Their username is {{ $user->username }}. They live in {{ $user->city }} 
    , {{ $user->state  }} and they're {{ $user->age }} years old. Their zipcode is {{ $user->zip }}
     and their street address is {{ $user->address }}. AND!! their lat/long is {{ $user->lat_long }} -- so, they are in legislative district: {{ $user->leg_district }}</p>
@endforeach
</div>

