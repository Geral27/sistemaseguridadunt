<div class="modal fade" tabindex="-1" role="dialog" id="crearvdis" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Registrar Verificación Vehículo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => 'verificar/store', 'method' => 'get']) !!}
            @csrf
            <div class="row">
                    {!! Form::number('id', '', ['class' => 'form-control', 'hidden']) !!}
                <div class="form-group col-4">
                    {!! Form::label('codigodispositivo', 'Ingresar Placa') !!}
                    {!! Form::text('codigodispositivo', 'T3U-555', ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="form-group col-2">
                    <a type="button" id="btn-buscar" class="btn btn-info" style="margin-top: 30px;"><i class="fa fa-search"></i> Buscar</a>
                </div>
                <div class="form-group col-6">
                    {!! Form::label('id_user', 'Usuario') !!}
                    {!! Form::text('id_user', 'Leslie Eliana Roncal Sánchez', ['class' => 'form-control', 'readonly']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    {!! Form::label('tipodispositivo', 'Tipo') !!}
                    {!! Form::text('tipodispositivo', 'Auto', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('serie', 'Serie') !!}
                    {!! Form::text('serie', 'Kia Picanto Negro', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('marca', 'SOAT') !!}
                    {!! Form::text('marca', 'Vigente', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6" id="facultad">
                    {!! Form::label('facultad', 'Facultad') !!}
                    {!! Form::text('marca', 'Facultad de Ingeniería', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
                <div class="form-group col-6" id="escuela">
                    {!! Form::label('escuela', 'Escuela') !!}
                    {!! Form::text('marca', 'Escuela de Ingeniería de Sistemas', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6" id="facultad">
                    {!! Form::label('facultad', 'Vigilante') !!}
                    {!! Form::text('marca', 'Jose Antonio Roncal Monzon', ['class' => 'form-control', 'required']) !!}
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

@section('scripts')
<script>
    $(document).ready(function() {
        $('#btn-buscar').click(function() {
            $.ajax({
                url: "verificar/"+$('#codigodispositivo').val()+"/buscar",
                type: "GET",
                success: function(data) {
                    console.log(data);
                    if (data.length == 0) {
                        console.log("No se encontró el dispositivo")
                       /*  Swal.fire({
                            title: 'Error',
                            text: 'No se encontro el vehiculo',
                            icon: 'error',
                            confirmButtonText: 'Aceptar'
                        }) */
                    } else {
                        $('#codigodispositivo').val(data[0].codigodispositivo);
                        $('#tipodispositivo').val(data[0].tipodispositivo);
                        $('#serie').val(data[0].serie);
                        $('#marca').val(data[0].marca);
                        $('#facultad').val(data[0].facultad);
                        $('#escuela').val(data[0].escuela);
                        $('#id_user').val(data[0].user.name);
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    });
</script>
@endsection
