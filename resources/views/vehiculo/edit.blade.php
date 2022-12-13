<div class="modal fade" tabindex="-1" role="dialog" id="editve{{$ve->id}}" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar Vehícullo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::model($vehiculo, [ 'method' => 'patch','route' => ['vehiculo.update', $ve->id] ]) !!}
                @csrf
            <div class="row">
                    {!! Form::number('idvehiculo', $ve->id, ['class' => 'form-control', 'hidden']) !!}
                <div class="form-group col-4">
                    {!! Form::label('codigovehiculo', 'Código') !!}
                    {!! Form::text('codigovehiculo', $ve->codigovehiculo, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('tipovehiculo', 'Tipo de Vehículo') !!}
                    {!! Form::select('tipovehiculo', array('' => 'Seleccione un tipo','Auto' => 'Auto', 'Moto' => 'Moto'),$ve->tipovehiculo, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('modelo', 'Modelo') !!}
                    {!! Form::text('modelo', $ve->modelo, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    {!! Form::label('placa', 'Placa') !!}
                    {!! Form::text('placa', $ve->placa, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('soat', 'SOAT') !!}
                    {!! Form::select('soat', array('' => 'Seleccione un tipo','Vigente' => 'Vigente', 'No Vigente' => 'No Vigente'),$ve->soat, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-5">
                    {!! Form::label('id_user', 'Alumno') !!}
                    @if (count($alumnos) > 0)
                    {!! Form::select('id_user',$alumnos,$ve->id_user, ['class' => 'form-control']) !!}
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
                                                       'Facultad de Ciencias Agropecuarias' => 'Facultad de Ciencias Agropecuarias'),$ve->facultad, ['class' => 'form-control']) !!}
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
                                                      'Escuela de Ingeniería Zootecnista' => 'Escuela de Ingeniería Zootecnista'),$ve->escuela, ['class' => 'form-control']) !!}
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

<!-- Delete Modal -->
<div class="modal fade" id="destroyve{{$ve->id}}" tabindex="-1" role="dialog" data-backdrop="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Eliminar Vehículo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              {!! Form::model($vehiculo, [ 'method' => 'delete','route' => ['vehiculo.destroy', $ve->id] ]) !!}
                  <h6 class="text-center">¿Seguro que quiere eliminar a este vehículo?</h6>

          </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{Form::button('Eliminar', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
                {!! Form::close() !!}
            </div>
      </div>
    </div>
</div>
