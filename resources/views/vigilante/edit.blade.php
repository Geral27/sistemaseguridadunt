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
                                <h2>Editar Vigilante</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form action="{{route('vigilante.update', $vigilante->id)}}" method="GET" novalidate id="editform">
                                    @method('put')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Dni</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control"  data-validate-length-range="9" data-validate-words="2" name="dni" required="required" id="txtdni1" value="{{$vigilante->dni}}" disabled/>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nombres</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" name="nombres" data-validate-length-range="100" type="text" required="required" id="txtnombres" value="{{$vigilante->nombres}}"/>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Apellidos</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" name="apellidos" required="required" type="text" data-validate-length-range="100" id="txtapellidos" value="{{$vigilante->apellidos}}"/>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Turno</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="turno" class="form-control" required name="turno">
                                                <option value="" selected disabled>----- Selecciona Turno ----</option>
                                                <option @if($vigilante->turno == "Mañana") selected @endif value="Mañana">Mañana</option>
                                                <option @if($vigilante->turno == "Tarde") selected @endif value="Tarde">Tarde</option>
                                                <option @if($vigilante->turno == "Noche") selected @endif value="Noche">Noche</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-4">
                                            <button type='submit' class="btn btn-round btn-primary btn-sm"><i class="fa fa-save"></i>  Editar</button>
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
