<!-- Id Seg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_seg', 'Id Seg:') !!}
    {!! Form::text('id_seg', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_area', 'Id Area:') !!}
    {!! Form::text('id_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Gru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_gru', 'Id Gru:') !!}
    {!! Form::text('id_gru', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Cur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_cur', 'Nombre Cur:') !!}
    {!! Form::text('nombre_cur', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Cur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_cur', 'Descripcion Cur:') !!}
    {!! Form::text('descripcion_cur', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Seg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_seg', 'Estado Seg:') !!}
    {!! Form::text('estado_seg', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cursos.index') !!}" class="btn btn-default">Cancel</a>
</div>
