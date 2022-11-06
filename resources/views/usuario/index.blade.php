@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Lista de Usuarios</h2>
                <div class="pull-right">
                    <div class="x_content">
                        <a type="button" class="btn btn-round btn-primary btn-sm" href="{{route('usuario.create')}}"><i class="fa fa-user"></i>  Nuevo Usuario</a>
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
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Usuario</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario as $usu)
                            <tr>
                                
                            </tr>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="elimalumno">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title" id="nuevoAlumno">Eliminar Usuario</h4>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('usuario.destroy', $usu->id)}}" method="GET" novalidate id="editform">
                                                @method('delete')
                                                @csrf
                                                <p>¿Desea eliminar el usuario?
                                                <div class="form-group">
                                                    <div class="col-sm-6 offset-sm-3">
                                                        <button type='submit' class="btn btn-round btn-primary btn-sm"><i class="fa fa-check"></i>  Sí</button>
                                                        <a type='reset' class="btn btn-round btn-danger btn-sm" href="{{route('usuario/cancelar')}}"><i class="fa fa-arrow-left"></i>    No</a>
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

