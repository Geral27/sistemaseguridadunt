@extends('layout.plantilla')
@section('contenido')
<div class="container body">
    <div class="main_container">
        <div class="right_col" role="main" >
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Editar Dispositivo</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form action="{{route('dispositivo.update', $dispositivo->id)}}" method="GET" novalidate>
                                    @method('put')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Codigo</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control"  data-validate-length-range="9" data-validate-words="2" name="codigodispositivo" required="required" id="txtcodigo" value="{{$dispositivo->codigodispositivo}}"  readonly/>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tipo</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="tipodispositivo" class="form-control" required name="tipodispositivo">
                                                <option value="{{$dispositivo->tipodispositivo}}">{{$dispositivo->tipodispositivo}}</option>
                                                <option value="Laptop">Laptop</option>
                                                <option value="Tablet">Tablet</option>
                                                <option value="Mouse">Mouse</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Marca</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" name="marca" required="required" type="text" data-validate-length-range="100" id="txtmarca" value="{{$dispositivo->marca}}"/>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Color</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="color" data-validate-length-range="100" required='required' id="txtcolor" value="{{$dispositivo->color}}"/>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Serie</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="serie" data-validate-length-range="100" required='required' id="txtserie" value="{{$dispositivo->serie}}"/>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Alumno</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="facultad" class="form-control" required name="idalumno">
                                                @if($alumno->count())
                                                    @foreach($alumno as $a)
                                                        <option value="{{$a->id}}">{{$a->nombres}} {{$a->apellidos}}</option>
                                                    @endforeach
                                                    @else
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Facultad</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="facultad" class="form-control" required name="facultad">
                                                <option value="{{$dispositivo->facultad}}">{{$dispositivo->facultad}}</option>
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
                                                <option value="{{$dispositivo->escuela}}">{{$dispositivo->escuela}}</option>
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



