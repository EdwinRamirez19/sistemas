<!-- Nombre Gru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_gru', 'Nombre Gru:') !!}
    {!! Form::text('nombre_gru', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Gru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_gru', 'Descripcion Gru:') !!}
    {!! Form::text('descripcion_gru', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('grupos.index') !!}" class="btn btn-default">Cancel</a>
</div>
