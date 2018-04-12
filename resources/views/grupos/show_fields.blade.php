<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $grupo->id !!}</p>
</div>

<!-- Nombre Gru Field -->
<div class="form-group">
    {!! Form::label('nombre_gru', 'Nombre Gru:') !!}
    <p>{!! $grupo->nombre_gru !!}</p>
</div>

<!-- Descripcion Gru Field -->
<div class="form-group">
    {!! Form::label('descripcion_gru', 'Descripcion Gru:') !!}
    <p>{!! $grupo->descripcion_gru !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $grupo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $grupo->updated_at !!}</p>
</div>

