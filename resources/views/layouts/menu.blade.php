




<li class="{{ Request::is('examples*') ? 'active' : '' }}">
    <a href="{!! route('examples.index') !!}"><i class="fa fa-edit"></i><span>Examples</span></a>
</li>



<li class="{{ Request::is('periodos*') ? 'active' : '' }}">
    <a href="{!! route('periodos.index') !!}"><i class="fa fa-edit"></i><span>Periodos</span></a>
</li>

<li class="{{ Request::is('seguimientos*') ? 'active' : '' }}">
    <a href="{!! route('seguimientos.index') !!}"><i class="fa fa-edit"></i><span>Seguimientos</span></a>
</li>

<li class="{{ Request::is('areas*') ? 'active' : '' }}">
    <a href="{!! route('areas.index') !!}"><i class="fa fa-edit"></i><span>Areas</span></a>
</li>

<li class="{{ Request::is('grupos*') ? 'active' : '' }}">
    <a href="{!! route('grupos.index') !!}"><i class="fa fa-edit"></i><span>Grupos</span></a>
</li>

<li class="{{ Request::is('cursos*') ? 'active' : '' }}">
    <a href="{!! route('cursos.index') !!}"><i class="fa fa-edit"></i><span>Cursos</span></a>
</li>

<li class="{{ Request::is('detalleNotas*') ? 'active' : '' }}">
    <a href="{!! route('detalleNotas.index') !!}"><i class="fa fa-edit"></i><span>Detalle Notas</span></a>
</li>

