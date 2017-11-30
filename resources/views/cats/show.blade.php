@extends('layouts.app')
@section('header')
	<a href="{{url('/')}}">Back to</a>
	<h2>{{$cat->name}}</h2>
	<p>Last edited: {{ $cat->updated_at->diffForHumans() }}</p>
	@if (Auth::check() && Auth::user()->canEdit($cat))
		<a class="btn btn-primary" href="{{url('cats/'.$cat->id.'/edit')}}">Edit</a>
	@endif	
	@if (Auth::check() && Auth::user()->isAdmin())
		<a class="btn btn-primary" href="{{url('cats/'.$cat->id.'/delete')}}">Delete</a>
	@endif
@stop
@section('content')
	<h2>Date of birth {{$cat->date_of_bith}}</h2>
	<p>
		@if ($cat->breed)
			<a href="{{url('/cats/breeds/'.$cat->breed->name)}}">{{$cat->breed->name}}</a>
		@endif
	</p>
@stop