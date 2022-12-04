@extends('layout.plantilla')
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
                            <a href="#" class="btn btn-icon icon-left btn-info" data-toggle="modal" data-target="#exampleModal"><i class="far fa-user"></i> Nuevo Vehículo</a>
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
                        @foreach ($vehiculo as $dis)
                            <tr>
                                <td hidden>{{$dis->id}}</td>
                                <td>{{$dis->codigovehiculo}}</td>
                                <td>{{$dis->tipovehiculo}}</td>
                                <td>{{$dis->modelo}}</td>
                                <td>{{$dis->placa}}</td>
                                <td>{{$dis->soat}}</td>
                                <td>{{$dis->alumno->nombres}} {{$dis->alumno->apellidos}}</td>
                                <td>{{$dis->facultad}}</td>
                                <td>{{$dis->escuela}}</td>
                                <td><a href="{{route('vehiculo.edit', $dis->id)}}" type="button" ><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{route('vehiculo.confirmar', $dis->id)}}" type="button" data-toggle="modal" data-target="#elimalumno"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="elimalumno">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title" id="nuevoAlumno">Eliminar Dispositivo</h4>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('vehiculo.destroy', $dis->id)}}" method="GET" novalidate id="editform">
                                                @method('delete')
                                                @csrf
                                                <p>¿Desea eliminar el vehiculo?
                                                <div class="form-group">
                                                    <div class="col-sm-6 offset-sm-3">
                                                        <button type='submit' class="btn btn-round btn-primary btn-sm"><i class="fa fa-check"></i>  Sí</button>
                                                        <a type='reset' class="btn btn-round btn-danger btn-sm" href="{{route('cancelar')}}"><i class="fa fa-arrow-left"></i>    No</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

