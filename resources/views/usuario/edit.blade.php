<div class="modal fade" tabindex="-1" role="dialog" id="edit{{$us->id}}" data-backdrop="true">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::model($user, [ 'method' => 'patch','route' => ['usuario.update', $us->id] ]) !!}
                @csrf
                <div class="row">
                        {!! Form::text('user_id', $us->id, ['class' => 'form-control', 'hidden']) !!}
                    <div class="form-group col-3">
                        {!! Form::label('dni', 'Dni') !!}
                        {!! Form::text('dni', $us->dni, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group col-9">
                        {!! Form::label('name', 'Nombres y Apellidos') !!}
                        {!! Form::text('name', $us->name, ['class' => 'form-control', 'required']) !!}
                    </div>                                        
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        {!! Form::label('email', 'Correo UNT o Email') !!}
                        {!! Form::text('email', $us->email, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-9">
                        {!! Form::label('direccion', 'Dirección') !!}
                        {!! Form::text('direccion', $us->direccion, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group col-3">
                        {!! Form::label('telefono', 'Teléfono') !!}
                        {!! Form::text('telefono', $us->telefono, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="form-divider">
                    Escoge el Rol
                </div>
                @foreach ($us->roles as $rol)
                    <input type="text" value="{{$rol->display_name}}" id="texto-{{$us->id}}">  
                    <div class="row">
                        <div class="form-group col-4" style="text-align:center;">
                            <div class="form-check">
                                {!! Form::label('alumno', 'Alumno', ['class' => 'form-check-label']) !!}
                                {!! Form::radio('role_id_'.$us->id, 'alumno',['class' => 'form-check-input', 'id' => 'alumno']) !!}
                            </div>
                        </div>
                        <div class="form-group col-4" style="text-align:center;">
                            <div class="form-check">
                                {!! Form::label('personal', 'Personal UNT', ['class' => 'form-check-label']) !!}
                                {!! Form::radio('role_id_'.$us->id, 'personal', ['class' => 'form-check-input', 'id' => 'personal' ]) !!}
                            </div>
                        </div>
                        <div class="form-group col-4" style="text-align:center;">
                            <div class="form-check">
                                {!! Form::label('vigilante', 'Vigilante', ['class' => 'form-check-label']) !!}
                                {!! Form::radio('role_id_'.$us->id, 'vigilante', ['class' => 'form-check-input', 'id' => 'vigilante']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 codigoi" id="codigoi" hidden>
                            {!! Form::label('codigoi', 'Codigo Institucional') !!}
                            {!! Form::text('codigoi', $us->codigoi, ['class' => 'form-control codigoi',]) !!}
                        </div>
                        <div class="form-group col-6 facultad" id="facultad" hidden>
                            {!! Form::label('facultad', 'Facultad') !!}
                            {!! Form::select('facultad', array('' => 'Selecciona una facultad', 
                                                                'Facultad de Ciencias Biológicas' => 'Facultad de Ciencias Biológicas', 
                                                                'Facultad de Farmacia y Bioquímica' => 'Facultad de Farmacia y Bioquímica',
                                                                'Facultad de Educación y Ciencias de la Comunicación' => 'Facultad de Educación y Ciencias de la Comunicación',
                                                                'Facultad de Medicina' => 'Facultad de Medicina',
                                                                'Facultad de Estomatología' => 'Facultad de Estomatología', 
                                                                'Facultad de Ciencias Sociales' => 'Facultad de Ciencias Sociales',
                                                                'Facultad de Ciencias Físicas y Matemáticas' => 'Facultad de Ciencias Físicas y Matemáticas',
                                                                'Facultad de Ciencias Económicas' => 'Facultad de Ciencias Económicas',
                                                                'Facultad de Derecho y Ciencias Políticas' => 'Facultad de Derecho y Ciencias Políticas', 
                                                                'Facultad de Ingeniería' => 'Facultad de Ingeniería',
                                                                'Facultad de Ingeniería Química' => 'Facultad de Ingeniería Química',
                                                                'Facultad de Enfermería' => 'Facultad de Enfermería',
                                                                'Facultad de Ciencias Agropecuarias' => 'Facultad de Ciencias Agropecuarias'),$us->facultad, ['class' => 'form-control facultad']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 escuela" id="escuela" hidden>
                            {!! Form::label('escuela', 'Escuela') !!}
                            {!! Form::select('escuela', array('' => 'Seleccione una escuela', 
                                                                'Escuela de Biología' => 'Escuela de Biología', 
                                                                'Escuela de Biología Pesquera' => 'Escuela de Biología Pesquera', 
                                                                'Escuela de Microbiología y Paristología' => 'Escuela de Microbiología y Paristología', 
                                                                'Escuela de Farmacia y Bioquímica' => 'Escuela de Farmacia y Bioquímica', 
                                                                'Escuela de Educación Inicial' => 'Escuela de Educación Inicial', 
                                                                'Escuela de Educación Primaria' => 'Escuela de Educación Primaria', 
                                                                'Escuela de Educación Secundaria' => 'Escuela de Educación Secundaria', 
                                                                'Escuela de Ciencias de la Comunicación' => 'Escuela de Ciencias de la Comunicación', 
                                                                'Escuela de Medicina' => 'Escuela de Medicina', 
                                                                'Escuela de Estomatología' => 'Escuela de Estomatología', 
                                                                'Escuela de Antropología' => 'Escuela de Antropología', 
                                                                'Escuela de Arqueología' => 'Escuela de Arqueología', 
                                                                'Escuela de Trabajo Social' => 'Escuela de Trabajo Social', 
                                                                'Escuela de Turismo' => 'Escuela de Turismo', 
                                                                'Escuela de Historia' => 'Escuela de Historia', 
                                                                'Escuela de Estadística' => 'Escuela de Estadística', 
                                                                'Escuela de Física' => 'Escuela de Física', 
                                                                'Escuela de Matemáticas' => 'Escuela de Matemáticas', 
                                                                'Escuela de Ingeniería Informática' => 'Escuela de Ingeniería Informática', 
                                                                'Escuela de Administración' => 'Escuela de Administración', 
                                                                'Escuela de Contabilidad' => 'Escuela de Contabilidad', 
                                                                'Escuela de Economía' => 'Escuela de Economía', 
                                                                'Escuela de Derecho' => 'Escuela de Derecho', 
                                                                'Escuela de Ciencia política y Gobernabilidad' => 'Escuela de Ciencia política y Gobernabilidad', 
                                                                'Escuela de Ingeniería Industrial' => 'Escuela de Ingeniería Industrial', 
                                                                'Escuela de Ingeniería Mecánica' => 'Escuela de Ingeniería Mecánica', 
                                                                'Escuela de Ingeniería Metalúrgica' => 'Escuela de Ingeniería Metalúrgica', 
                                                                'Escuela de Ingeniería de Materiales' => 'Escuela de Ingeniería de Materiales', 
                                                                'Escuela de Ingeniería de Sistemas' => 'Escuela de Ingeniería de Sistemas', 
                                                                'Escuela de Ingeniería Minas' => 'Escuela de Ingeniería Minas', 
                                                                'Escuela de Ingeniería Mecatrónica' => 'Escuela de Ingeniería Mecatrónica', 
                                                                'Escuela de Ingeniería Civil' => 'Escuela de Ingeniería Civil', 
                                                                'Escuela de Arquitectura' => 'Escuela de Arquitectura', 
                                                                'Escuela de Ingeniería Química' => 'Escuela de Ingeniería Química', 
                                                                'Escuela de Ingeniería Ambiental' => 'Escuela de Ingeniería Ambiental', 
                                                                'Escuela de Enfermería' => 'Escuela de Enfermería', 
                                                                'Escuela de Ingeniería Agroindustrial' => 'Escuela de Ingeniería Agroindustrial', 
                                                                'Escuela de Ingeniería Agrícola' => 'Escuela de Ingeniería Agrícola', 
                                                                'Escuela de Ingeniería Agrónoma' => 'Escuela de Ingeniería Agrónoma', 
                                                                'Escuela de Ingeniería Zootecnista' => 'Escuela de Ingeniería Zootecnista'),$us->escuela, ['class' => 'form-control escuela']) !!}
                        </div>
                        <div class="form-group col-6 turno" id="turno" hidden>
                            {!! Form::label('turno', 'Turno') !!}
                            {!! Form::select('turno', array('' => 'Selecciona un turno', 'Mañana' => 'Mañana', 'Tarde' => 'Tarde', 'Noche' => 'Noche'),$us->turno, ['class' => 'form-control turno']) !!}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{Form::button('Guardar', ['class' => 'btn btn-primary', 'type' => 'submit'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="destroy{{$us->id}}" tabindex="-1" role="dialog" data-backdrop="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Eliminar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              {!! Form::model($user, [ 'method' => 'delete','route' => ['usuario.destroy', $us->id] ]) !!}
                  <h6 class="text-center">¿Seguro que quiere eliminar a {{$us->name}}?</h6>
                  
          </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{Form::button('Eliminar', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
                {!! Form::close() !!}
            </div>
      </div>
    </div>
</div>