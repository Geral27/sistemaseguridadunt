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
            {!! Form::open(['url' => 'verificar/store2', 'method' => 'get']) !!}
            @csrf
            <div class="row">                   
                <div class="form-group col-4">
                    {!! Form::label('placa', 'Ingresar Placa') !!}
                    {!! Form::text('placa', '', ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="form-group col-2">
                    <a type="button" id="btn-buscar2" class="btn btn-info" style="margin-top: 30px;"><i class="fa fa-search"></i> Buscar</a>
                </div>
                {!! Form::text('idvehiculo', '', ['class' => 'form-control idvehiculo', 'hidden']) !!}
                <div class="form-group col-6">
                    {!! Form::label('id_user', 'Usuario') !!}
                    {!! Form::text('id_user', '', ['class' => 'form-control', 'readonly']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    {!! Form::label('tipovehiculo', 'Tipo') !!}
                    {!! Form::text('tipovehiculo', '', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('soat', 'SOAT') !!}
                    {!! Form::text('soat', '', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
                <div class="form-group col-4">
                    {!! Form::label('modelo', 'Modelo') !!}
                    {!! Form::text('modelo', '', ['class' => 'form-control', 'required', 'readonly']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    {!! Form::label('facultad', 'Facultad') !!}
                    {!! Form::text('facultad', '', ['class' => 'form-control facultad', 'required', 'readonly']) !!}
                </div>
                <div class="form-group col-6">
                    {!! Form::label('escuela', 'Escuela') !!}
                    {!! Form::text('escuela', '', ['class' => 'form-control escuela', 'required', 'readonly']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    {!! Form::label('id_vigi', 'Vigilante') !!}
                    @if (count($alumnos) > 0)
                    {!! Form::select('id_vigi',$alumnos,'', ['class' => 'form-control']) !!}
                    @endif   
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
        $('#btn-buscar2').click(function() {
            $.ajax({
                url: "verificar/"+$('#placa').val()+"/buscar2",
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
                        $('#placa').val(data[0].placa);
                        $('.idvehiculo').val(data[0].id);
                        $('#tipovehiculo').val(data[0].tipovehiculo);
                        $('#soat').val(data[0].soat);
                        $('#modelo').val(data[0].modelo);
                        $('.facultad').val(data[0].facultad);
                        $('.escuela').val(data[0].escuela);
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