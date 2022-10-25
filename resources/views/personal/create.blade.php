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
                                <h2>Nuevo Personal</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form action="{{route('personal.store')}}" method="GET" novalidate>
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
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-4">
                                            <button type='submit' class="btn btn-round btn-primary btn-sm"><i class="fa fa-save"></i>  Guardar</button>
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
