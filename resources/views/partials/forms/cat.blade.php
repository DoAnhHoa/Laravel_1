
<!--<form class="form-horizontal">-->
	<div class="form-group">
		{!! Form::label('name', 'Name :', ['class' => 'col-md-4 control-label']) !!}

		<div class="col-md-6">
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('date_of_bith', 'Date of birth :', ['class' => 'col-md-4 control-label']) !!}

		<div class="col-md-6">
			{!! Form::date('date_of_bith', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('breed_id', 'Breed :', ['class' => 'col-md-4 control-label']) !!}

		<div class="col-md-6">
			{!! Form::select('breed_id', $breeds, null, ['class' => 'form-control']) !!}
			<!--$breeds la mang gom value va ten-->
		</div>
	</div>

	<div class="col-md-8 col-md-offset-4">
		{!! Form::submit('Save Cat', ['class' => 'btn btn-primary']) !!}
	</div>
<!--</form>	-->