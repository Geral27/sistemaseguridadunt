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
                                <h2>Nuevo Usuario</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form action="{{route('usuario.store')}}" method="GET" novalidate id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nombres</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input class="form-control" name="nombres" data-validate-length-range="100" type="text" required="required" id="txtnombres" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Apellidos</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input class="form-control" name="apellidos" required="required" type="text" data-validate-length-range="100" id="txtapellidos" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input class="form-control" type="email" class='email' name="email" data-validate-linked='email' required='required' id="txtemail"/>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Rol</label>
                                        <div class="col-md-9 col-sm-9">
                                            <select id="idrol" class="form-control" required name="idrol">
                                                <option value="">---- Selecciona Rol ----</option>
                                                @if($rol->count())
                                                    @foreach($rol as $a)
                                                        <option value="{{$a->idrol}}">{{$a->descripcion}}</option>
                                                    @endforeach
                                                    @else
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Usuario</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input class="form-control" name="usuario" data-validate-length-range="100" type="text" required="required" id="txtusuario" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Contraseña</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="password" class="form-control" value="" name="contraseña">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-4">
                                            <button type='submit' class="btn btn-round btn-primary btn-sm"><i class="fa fa-save"></i>  Submit</button>
                                            <a type='reset' class="btn btn-round btn-danger btn-sm" href="{{route('usuario/cancelar')}}"><i class="fa fa-arrow-left"></i>    Cancelar</a>
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

