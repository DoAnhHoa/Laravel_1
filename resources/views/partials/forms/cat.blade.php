<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	<div class="form-controls">
		{!! Form::text('name', null, ['class' => 'form-controls']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('date_of_bith', 'Date of birth') !!}
	<div class="form-controls">
		{!! Form::date('date_of_bith', null, ['class' => 'form-controls']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('breed_id', 'Breed') !!}
	<div class="form-controls">
		{!! Form::select('breed_id', $breeds, null, ['class' => 'form-controls']) !!}
		<!--$breeds la mang gom value va ten-->
	</div>
</div>

{!! Form::submit('Save Cat', ['class' => 'btn btn-primary']) !!}