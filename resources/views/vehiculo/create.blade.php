<div class="modal fade" tabindex="-1" role="dialog" id="crearve" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Registrar Vehículo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => 'vehiculo/store', 'method' => 'get']) !!}
            @csrf
            <div class="row">
                    {!! Form::number('idvehiculo', '', ['class' => 'form-control', 'hidden']) !!}
                <div class="form-group col-4">
                    {!! Form::label('codigovehiculo', 'Código') !!}
                    {!! Form::text('codigovehiculo', '', ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('tipovehiculo', 'Tipo de Dispositivo') !!}
                    {!! Form::select('tipovehiculo', array('' => 'Seleccione un tipo','Auto' => 'Auto', 'Moto' => 'Moto'),'', ['class' => 'form-control']) !!}
                </div> 
                <div class="form-group col-4">
                    {!! Form::label('modelo', 'Modelo') !!}
                    {!! Form::text('modelo', '', ['class' => 'form-control', 'required']) !!}
                </div>                                
            </div>
            <div class="row">
                <div class="form-group col-3">
                    {!! Form::label('placa', 'Placa') !!}
                    {!! Form::text('placa', '', ['class' => 'form-control', 'required']) !!}
                </div>    
                <div class="form-group col-4">
                    {!! Form::label('soat', 'SOAT') !!}
                    {!! Form::select('soat', array('' => 'Seleccione un tipo','Vigente' => 'Vigente', 'No Vigente' => 'No Vigente'),'', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-5">
                    {!! Form::label('id_user', 'Alumno') !!}
                    @if (count($alumnos) > 0)
                    {!! Form::select('id_user',$alumnos,'', ['class' => 'form-control']) !!}
                    @endif                        
                </div> 
            </div>
            <div class="row">
                <div class="form-group col-6" id="facultad">
                    {!! Form::label('facultad', 'Facultad') !!}
                    {!! Form::select('facultad', array('Selecciona una facultad' => 'Selecciona una facultad', 
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
                <div class="form-group col-6" id="escuela">
                    {!! Form::label('escuela', 'Escuela') !!}
                    {!! Form::select('escuela', array('Seleccione una escuela' => 'Seleccione una escuela', 
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
