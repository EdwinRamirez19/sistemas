<!-- Id Cur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cur', 'Id Cur:') !!}
    {!! Form::text('id_cur', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombrecurso Cur Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreCurso_cur_det', 'Nombrecurso Cur Det:') !!}
    {!! Form::text('nombreCurso_cur_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigogrupo Gru Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigoGrupo_gru_det', 'Codigogrupo Gru Det:') !!}
    {!! Form::text('codigoGrupo_gru_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombredocente Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreDocente_det', 'Nombredocente Det:') !!}
    {!! Form::text('nombreDocente_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigoestudiante Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigoEstudiante_det', 'Codigoestudiante Det:') !!}
    {!! Form::text('codigoEstudiante_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreestudiante Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreEstudiante_det', 'Nombreestudiante Det:') !!}
    {!! Form::text('nombreEstudiante_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota1 Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota1_det', 'Nota1 Det:') !!}
    {!! Form::text('nota1_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota2 Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota2_det', 'Nota2 Det:') !!}
    {!! Form::text('nota2_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota3 Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota3_det', 'Nota3 Det:') !!}
    {!! Form::text('nota3_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Promedio Det Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promedio_det', 'Promedio Det:') !!}
    {!! Form::text('promedio_det', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('detalleNotas.index') !!}" class="btn btn-default">Cancel</a>
</div>
