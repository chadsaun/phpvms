<div class="row">
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('subfleet_id', 'Subfleet:') !!}
    {!! Form::select('subfleet_id', $subfleets, null, ['class' => 'form-control select2', 'placeholder' => 'Select Subfleet']) !!}
</div>

<!-- Registration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration', 'Registration:') !!}
    {!! Form::text('registration', null, ['class' => 'form-control']) !!}
</div>

<!-- Tail Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tail_number', 'Tail Number:') !!}
    {!! Form::text('tail_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Active Field -->
<div class="form-group col-12">
    {!! Form::label('active', 'Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0, false) !!}
        {!! Form::checkbox('active', 1, null) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="pull-right">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('admin.aircraft.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>
</div>
