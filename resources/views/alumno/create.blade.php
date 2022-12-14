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
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">C??digo de Matr??cula</label>
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
                                                <option value="Facultad de Ciencias Biol??gicas">Facultad de Ciencias Biol??gicas</option>
                                                <option value="Facultad de Ciencias Econ??micas">Facultad de Ciencias Econ??micas</option>
                                                <option value="Facultad de Farmacia y Bioqu??mica">Facultad de Farmacia y Bioqu??mica</option>
                                                <option value="Facultad de Educaci??n y Ciencias de la Comunicaci??n">Facultad de Educaci??n y Ciencias de la Comunicaci??n</option>
                                                <option value="Facultad de Medicina">Facultad de Medicina</option>
                                                <option value="Facultad de Estomatolog??a">Facultad de Estomatolog??a</option>
                                                <option value="Facultad de Ciencias Sociales">Facultad de Ciencias Sociales</option>
                                                <option value="Facultad de Ciencias F??sicas y Matem??ticas">Facultad de Ciencias F??sicas y Matem??ticas</option>
                                                <option value="Facultad de Derecho y Ciencias Pol??ticas">Facultad de Derecho y Ciencias Pol??ticas</option>
                                                <option value="Facultad de Ingenier??a">Facultad de Ingenier??a</option>
                                                <option value="Facultad de Ingenier??a Qu??mica">Facultad de Ingenier??a Qu??mica</option>
                                                <option value="Facultad de Enfermer??a">Facultad de Enfermer??a</option>
                                                <option value="Facultad de Ciencias Agropecuarias">Facultad de Ciencias Agropecuarias</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Escuela</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="escuela" class="form-control" required name="escuela">
                                                <option value="">---- Selecciona Escuela ----</option>
                                                <option value="Escuela de Biolog??a">Escuela de Biolog??a</option>
                                                <option value="Escuela de Biolog??a Pesquera">Escuela de Biolog??a Pesquera</option>
                                                <option value="Escuela de Microbiolog??a y Paristolog??a">Escuela de Microbiolog??a y Paristolog??a</option>
                                                <option value="Escuela de Farmacia y Bioqu??mica">Escuela de Farmacia y Bioqu??mica</option>
                                                <option value="Escuela de Educaci??n Inicial">Escuela de Educaci??n Inicial</option>
                                                <option value="Escuela de Educaci??n Primaria">Escuela de Educaci??n Primaria</option>
                                                <option value="Escuela de Educaci??n Secundaria">Escuela de Educaci??n Secundaria</option>
                                                <option value="Escuela de Ciencias de la Comunicaci??n">Escuela de Ciencias de la Comunicaci??n</option>
                                                <option value="Escuela de Medicina">Escuela de Medicina</option>
                                                <option value="Escuela de Estomatolog??a">Escuela de Estomatolog??a</option>
                                                <option value="Facultad de Ingenier??a">Facultad de Ingenier??a</option>
                                                <option value="Facultad de Ingenier??a Qu??mica">Facultad de Ingenier??a Qu??mica</option>
                                                <option value="Facultad de Enfermer??a">Facultad de Enfermer??a</option>
                                                <option value="Facultad de Ciencias Agropecuarias">Facultad de Ciencias Agropecuarias</option>
                                            </select>                    
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tel??fono</label>
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