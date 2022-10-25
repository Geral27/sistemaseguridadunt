@extends('layout.plantilla')
@section('contenido')
<div class="container body">
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Nuevo Alumno</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form action="{{route('alumno.store')}}" method="GET" novalidate>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Dni</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control"  data-validate-length-range="9" data-validate-words="2" name="dni" required="required" id="txtdni"/>
                                            
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nombres</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" name="nombres" data-validate-length-range="100" type="text" required="required" id="txtnombres" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Apellidos</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" name="apellidos" required="required" type="text" data-validate-length-range="100" id="txtapellidos" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Código de Matrícula</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="codigomatricula" data-validate-length-range="100" required='required' id="txtcodigo"/>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Facultad</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="facultad" class="form-control" required name="facultad">
                                                <option value="">----- Selecciona Facultad ----</option>
                                                <option value="Facultad de Ciencias Agropecuarias">Facultad de Ciencias Agropecuarias</option>
                                                <option value="Facultad de Ciencias Biológicas">Facultad de Ciencias Biológicas</option>
                                                <option value="Facultad de Ciencias Económicas">Facultad de Ciencias Económicas</option>
                                                <option value="Facultad de Farmacia y Bioquímica">Facultad de Farmacia y Bioquímica</option>
                                                <option value="Facultad de Educación y Ciencias de la Comunicación">Facultad de Educación y Ciencias de la Comunicación</option>
                                                <option value="Facultad de Medicina">Facultad de Medicina</option>
                                                <option value="Facultad de Estomatología">Facultad de Estomatología</option>
                                                <option value="Facultad de Ciencias Sociales">Facultad de Ciencias Sociales</option>
                                                <option value="Facultad de Ciencias Físicas y Matemáticas">Facultad de Ciencias Físicas y Matemáticas</option>
                                                <option value="Facultad de Derecho y Ciencias Políticas">Facultad de Derecho y Ciencias Políticas</option>
                                                <option value="Facultad de Ingeniería">Facultad de Ingeniería</option>
                                                <option value="Facultad de Ingeniería Química">Facultad de Ingeniería Química</option>
                                                <option value="Facultad de Enfermería">Facultad de Enfermería</option>
                                                <option value="Facultad de Ciencias Agropecuarias">Facultad de Ciencias Agropecuarias</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Escuela</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="escuela" class="form-control" required name="escuela">
                                                <option value="">---- Selecciona Escuela ----</option>
                                                <option value="Escuela de Biología">Escuela de Biología</option>
                                                <option value="Escuela de Biología Pesquera">Escuela de Biología Pesquera</option>
                                                <option value="Escuela de Microbiología y Paristología">Escuela de Microbiología y Paristología</option>
                                                <option value="Escuela de Farmacia y Bioquímica">Escuela de Farmacia y Bioquímica</option>
                                                <option value="Escuela de Educación Inicial">Escuela de Educación Inicial</option>
                                                <option value="Escuela de Educación Primaria">Escuela de Educación Primaria</option>
                                                <option value="Escuela de Educación Secundaria">Escuela de Educación Secundaria</option>
                                                <option value="Escuela de Ciencias de la Comunicación">Escuela de Ciencias de la Comunicación</option>
                                                <option value="Escuela de Medicina">Escuela de Medicina</option>
                                                <option value="Escuela de Estomatología">Escuela de Estomatología</option>
                                                <option value="Facultad de Ingeniería">Facultad de Ingeniería</option>
                                                <option value="Facultad de Ingeniería Química">Facultad de Ingeniería Química</option>
                                                <option value="Facultad de Enfermería">Facultad de Enfermería</option>
                                                <option value="Facultad de Ciencias Agropecuarias">Facultad de Ciencias Agropecuarias</option>
                                            </select>                    
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Teléfono</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="tel" class='tel' name="telefono" required='required' data-validate-length-range="8,20" id="txttelefono"/>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Correo</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="email" class='email' name="correo" data-validate-linked='email' required='required' id="txtcorreo"/>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-4">
                                            <button type='submit' class="btn btn-round btn-primary btn-sm"><i class="fa fa-save"></i>  Submit</button>
                                            <a type='reset' class="btn btn-round btn-danger btn-sm" href="{{route('cancelar')}}"><i class="fa fa-arrow-left"></i>    Cancelar</a>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection