@extends('layouts.app')
@section('header')
	<h2>Edit a cat</h2>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	<div class="panel-heading"><h2>Edit cat</h2></div>
				<div class="panel-body">
					{!! Form::model($cat, ['class' => 'form-horizontal', 'url' => 'cats/'.$cat->id, 'method' => 'put']) !!}
					@include('partials.forms.cat')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop