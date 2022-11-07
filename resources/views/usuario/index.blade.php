@extends('layout.plantilla')
@section('contenido')
<div class="section-header">
    <h1>Usuarios</h1>
</div>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Lista de Usuarios</h4>
          <div class="card-header-form">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
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
              </tr>
              @foreach ($user as $us)
              <tr>               
                    <td hidden>{{$us->id}}</td>
                    <td hidden>{{$us->dni}}</td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->codigoi}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->facultad}}</td>
                    <td>{{$us->escuela}}</td>
                    <td hidden>{{$us->direccion}}</td>
                    <td hidden>{{$us->telefono}}</td>
                    <td>{{$us->turno}}</td>
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

