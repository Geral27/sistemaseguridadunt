@extends('layout.plantilla')
@include('vehiculo.create')
@section('contenido')


<div class="section-header">
    <h1>Vehículos</h1>
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
                <h4>Lista de vehículos</h4>
                <div class="card-header-form">
                    <form>            
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>&nbsp;&nbsp;
                            <a href="#" class="btn btn-icon icon-left btn-info" data-toggle="modal" data-target="#crearve"><i class="fa fa-car"></i> Nuevo Vehículo</a>
                        </div>
                    </form>
                </div>         
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                        <th hidden>#</th>
                        <th>Código</th>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Placa</th>
                        <th>SOAT</th>
                        <th>Alumno</th>
                        <th>Facultad</th>
                        <th>Escuela</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehiculo as $ve)
                            <tr>
                                <td hidden>{{$ve->idvehiculo}}</td>
                                <td>{{$ve->codigovehiculo}}</td>
                                <td>{{$ve->tipovehiculo}}</td>
                                <td>{{$ve->modelo}}</td>
                                <td>{{$ve->placa}}</td>
                                <td>{{$ve->soat}}</td>
                                <td>{{$ve->id_user}}</td>
                                <td>{{$ve->facultad}}</td>
                                <td>{{$ve->escuela}}</td>
                                <td data-id="{{$ve->idvehiculo}}">
                                    <a href="#" data-toggle="modal" data-target="#editve{{$ve->idvehiculo}}" type="button" class="btneditar" style="color: orange;"><i class="fa fa-edit"></i></a>                             
                                </td>
                                <td><a href="#" type="button" data-toggle="modal" data-target="#destroyve{{$ve->idvehiculo}}" style="color: red;"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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

@section('modales')
    @foreach ($vehiculo as $ve)
        @include('vehiculo.edit')
    @endforeach
@endsection