@extends('layout.plantilla')
@section('contenido')
<div class="section-header">
    <h1>Usuarios</h1>
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
                <h4>Lista de Usuarios</h4>
                <div class="card-header-form">
                    <form>            
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>&nbsp;&nbsp;
                            <a href="#" class="btn btn-icon icon-left btn-info" data-toggle="modal" data-target="#exampleModal" id="btnNuevo"><i class="far fa-user"></i> Nuevo Usuario</a>
                        </div>
                    </form>
                </div>         
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped" id="tabla">
                    <tr>
                        <th hidden>#</th>
                        <th hidden>Dni</th>
                        <th>Nombres</th>
                        <th>Rol</th>
                        <th>Código Institucional</th>
                        <th>Email</th>
                        <th>Facultad</th>
                        <th>Escuela</th>
                        <th hidden>Dirección</th>
                        <th hidden>Teléfono</th>
                        <th>Turno</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($user as $us)
                    <tr>               
                        <td hidden>{{$us->id}}</td>
                        <td hidden>{{$us->dni}}</td>
                        <td>{{$us->name}}</td>
                        <td>
                        @foreach ($us->roles as $rol)
                            <p>{{$rol->display_name}}</p>    
                        @endforeach
                        </td>
                        <td>{{$us->codigoi}}</td>
                        <td>{{$us->email}}</td>
                        <td>{{$us->facultad}}</td>
                        <td>{{$us->escuela}}</td>
                        <td hidden>{{$us->direccion}}</td>
                        <td hidden>{{$us->telefono}}</td>
                        <td>{{$us->turno}}</td>
                        <td data-id="{{$us->id}}">
                            <a href="#" data-toggle="modal" data-target="#edit{{$us->id}}" type="button" class="btneditar" style="color: orange;"><i class="fa fa-edit"></i></a>                             
                        </td>
                        <td><a href="#" type="button" data-toggle="modal" data-target="#destroy{{$us->id}}" style="color: red;"><i class="fa fa-trash"></i></a></td>
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

@endsection

@section('modales')
    @foreach ($user as $us)
        @include('usuario.edit')
    @endforeach
@endsection





