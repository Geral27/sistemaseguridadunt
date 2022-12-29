@extends('layout.plantilla')
@section('contenido')
<div class="section-header">
    <h1>Verificar Dispositivos</h1>
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
                            <a href="{{route('verificar.verificardispdf')}}" class="btn btn-icon icon-left btn-warning"  ><i class="far fa-file"></i> Reporte PDF</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped" id="tabla">
                        <tr>
                            <th hidden>#</th>
                            <th>Usuario</th>
                            <th>Tipo</th>
                            <th>Serie</th>
                            <th>Facultad</th>
                            <th>Escuela</th>
                            <th>Fecha Verificación</th>
                            <th>Vigilante</th>
                        </tr>
                        @foreach ($verificardis as $ve)
                            <tr>
                                <td hidden>{{$ve->id}}</td>
                                <td>{{$ve->dispositivo->user->name}}</td>
                                <td>{{$ve->dispositivo->tipodispositivo}}</td>
                                <td>{{$ve->dispositivo->serie}}</td>
                                <td>{{$ve->dispositivo->facultad}}</td>
                                <td>{{$ve->dispositivo->escuela}}</td>
                                <td>{{$ve->created_at}}</td>
                                <td>{{$ve->user->name}}</td>
                            </tr>
                        @endforeach
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

@section('modales')
    @include('verificar.create1')
@endsection

