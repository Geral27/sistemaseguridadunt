@extends('layout.plantilla')
@include('verificar.create1')
@section('contenido')
<div class="section-header">
    <h1>Verficar Dispositivos</h1>
</div>
@if (session('datos'))
    <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
        {{session('datos')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Lista de Dispositivos Verificados</h4>
                <div class="card-header-form">
                    <form>            
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>&nbsp;
                            <a href="#" class="btn btn-icon icon-left btn-info" data-toggle="modal" data-target="#crearvdis"><i class="fas fa-list"></i> Nueva Verificación</a>
                        </div>
                    </form>
                </div>         
            </div>
            @if (session('datos'))
                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    {{session('datos')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped" id="tabla">
                        
                            <th hidden>#</th>
                            <th>Usuario</th>
                            <th>Tipo</th>
                            <th>Serie</th>
                            <th>Facultad</th>
                            <th>Escuela</th>
                            <th>Fecha Verificación</th>
                            <th>Vigilante</th>
                            <th></th>
                            <th></th>
                        </tr>
                             
                        
                        <tr>    
                                <td hidden>1</td>
                                <td>Leslie Eliana Roncal Sánchez</td>
                                <td>Laptop</td>
                                <td>159644785Pu</td>
                                <td>Facultad de Estomatología</td>
                                <td>Escuela de Estomatología</td>
                                <td>2022-12-12</td>
                                <td>Jose Antonio Roncal Monzon</td>
                                <td >
                                    <a href="#" data-toggle="modal" data-target="#edit" type="button" class="btneditar" style="color: orange;"><i class="fa fa-edit"></i></a>                             
                                </td>
                                <td><a href="#" type="button" data-toggle="modal" data-target="#destroy" style="color: red;"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>    
                                <td hidden>1</td>
                                <td>Edward sanchez verastegui</td>
                                <td>Tablet</td>
                                <td>159644785Pu</td>
                                <td>Facultad de Ingeniería</td>
                                <td>Escuela de Ingeniería Metalúrgica</td>
                                <td>2022-12-12</td>
                                <td>Jose Antonio Roncal Monzon</td>
                                <td >
                                    <a href="#" data-toggle="modal" data-target="#edit" type="button" class="btneditar" style="color: orange;"><i class="fa fa-edit"></i></a>                             
                                </td>
                                <td><a href="#" type="button" data-toggle="modal" data-target="#destroy" style="color: red;"><i class="fa fa-trash"></i></a></td>
                            </tr>
                    </table>
                </div>
            </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

