<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $area->id !!}</p>
</div>

<!-- Nombre Cur Field -->
<div class="form-group">
    {!! Form::label('nombre_area', 'Nombre Area:') !!}
    <p>{!! $area->nombre_area !!}</p>
</div>

<!-- Descripcion Cur Field -->
<div class="form-group">
    {!! Form::label('descripcion_area', 'Descripcion Area:') !!}
    <p>{!! $area->descripcion_area !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $area->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $area->updated_at !!}</p>
</div>

