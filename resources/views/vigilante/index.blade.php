@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Lista de Vigilantes</h2>
                <div class="pull-right">
                    <div class="x_content">
                        <a type="button" class="btn btn-round btn-primary btn-sm" href="{{route('vigilante.create')}}"><i class="fa fa-user"></i>  Nuevo Vigilante</a>
                    </div>
                </div>
                <div class="clearfix"></div>
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
                        <th>Dni</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Turno</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vigilante as $itemvigilante)
                            <tr>
                                <td hidden>{{$itemvigilante->id}}</td>
                                <td>{{$itemvigilante->dni}}</td>
                                <td>{{$itemvigilante->nombres}}</td>
                                <td>{{$itemvigilante->apellidos}}</td>
                                <td>{{$itemvigilante->turno}}</td>
                                <td><a href="{{route('vigilante.edit', $itemvigilante->id)}}" type="button" id="btneditar"><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{route('vigilante.confirmar', $itemvigilante->id)}}" type="button" data-toggle="modal" data-target="#elimvigilante"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="elimvigilante">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title" id="nuevoVigilante">Eliminar Vigilante</h4>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('vigilante.destroy', $itemvigilante->id)}}" method="GET" novalidate id="editform">
                                                @method('delete')
                                                @csrf
                                                <p>¿Desea eliminar el vigilante?
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

