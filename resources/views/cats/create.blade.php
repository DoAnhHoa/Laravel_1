@extends('layouts.app')
@section('header')
	<!--<h2>Add a new cat</h2>-->
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	<div class="panel-heading"><h2>Add a new cat</h2></div>
				<div class="panel-body">
					{!! Form::open(['class' => 'form-horizontal', 'url' => 'cats']) !!}
					@include('partials.forms.cat')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop