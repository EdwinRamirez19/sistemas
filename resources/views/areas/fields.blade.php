<!-- Nombre Cur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_area', 'Nombre Area:') !!}
    {!! Form::text('nombre_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Cur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_area', 'Descripcion Area:') !!}
    {!! Form::text('descripcion_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areas.index') !!}" class="btn btn-default">Cancel</a>
</div>
