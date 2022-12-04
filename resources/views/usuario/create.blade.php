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
                    {!! Form::select('facultad', array('Option 1' => 'Option 1', 'Option 2' => 'Option 2', 'Option 3' => 'Option 3'),'', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6" id="turno" hidden>
                    {!! Form::label('turno', 'Turno') !!}
                    {!! Form::select('turno', array('Mañana' => 'Mañana', 'Tarde' => 'Tarde', 'Noche' => 'Noche'),'', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-6" id="escuela" hidden>
                    {!! Form::label('escuela', 'Escuela') !!}
                    {!! Form::select('escuela', array('Option 1' => 'Option 1', 'Option 2' => 'Option 2', 'Option 3' => 'Option 3'),'', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-6" id="contraseña" hidden>
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::password('password', ['class' => 'form-control pwstrength']) !!}
                </div>
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>

