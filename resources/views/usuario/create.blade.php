<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Registrar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => 'usuario/store', 'method' => 'get']) !!}
            @csrf
            <div class="row">
                    {!! Form::number('user_id', '', ['class' => 'form-control', 'hidden']) !!}
                <div class="form-group col-3">
                    {!! Form::label('dni', 'Dni') !!}
                    {!! Form::text('dni', '', ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="form-group col-9">
                    {!! Form::label('name', 'Nombres y Apellidos') !!}
                    {!! Form::text('name', '', ['class' => 'form-control', 'required']) !!}
                </div>                                        
            </div>
            <div class="row">
                <div class="form-group col-12">
                    {!! Form::label('email', 'Correo UNT o Email') !!}
                    {!! Form::text('email', '', ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-9">
                    {!! Form::label('direccion', 'Dirección') !!}
                    {!! Form::text('direccion', '', ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="form-group col-3">
                    {!! Form::label('telefono', 'Teléfono') !!}
                    {!! Form::text('telefono', '', ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
            <div class="form-divider">
                Escoge el Rol
            </div>
            <div class="row">
                <div class="form-group col-4" style="text-align:center;">
                    <div class="form-check">
                        {!! Form::label('alumno', 'Alumno', ['class' => 'form-check-label']) !!}
                        {!! Form::radio('role_id', 'alumno',['class' => 'form-check-input', 'id' => 'alumno']) !!}
                    </div>
                </div>
                <div class="form-group col-4" style="text-align:center;">
                    <div class="form-check">
                        {!! Form::label('personal', 'Personal UNT', ['class' => 'form-check-label']) !!}
                        {!! Form::radio('role_id', 'personal', ['class' => 'form-check-input', 'id' => 'personal' ]) !!}
                    </div>
                </div>
                <div class="form-group col-4" style="text-align:center;">
                    <div class="form-check">
                        {!! Form::label('vigilante', 'Vigilante', ['class' => 'form-check-label']) !!}
                        {!! Form::radio('role_id', 'vigilante', ['class' => 'form-check-input', 'id' => 'vigilante']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6" id="codigoi" hidden>
                    {!! Form::label('codigoi', 'Codigo Institucional') !!}
                    {!! Form::text('codigoi', '', ['class' => 'form-control',]) !!}
                </div>
                <div class="form-group col-6" id="facultad" hidden>
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
                                                       'Facultad de Ciencias Agropecuarias' => 'Facultad de Ciencias Agropecuarias'),'', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6" id="turno" hidden>
                    {!! Form::label('turno', 'Turno') !!}
                    {!! Form::select('turno', array('Seleccione un turno' => 'Seleccione un turno','Mañana' => 'Mañana', 'Tarde' => 'Tarde', 'Noche' => 'Noche'),'', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-6" id="escuela" hidden>
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
                                                      'Escuela de Ingeniería Zootecnista' => 'Escuela de Ingeniería Zootecnista'),'', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-6" id="contraseña" hidden>
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::password('password', ['class' => 'form-control pwstrength']) !!}
                </div>
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>

