<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sistema de Seguridad &mdash; UNT</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/modules/prism/prism.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">

  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app" >
    <div class="main-wrapper main-wrapper-1" >
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar" >
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right" >
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1" >
            <div class="d-sm-none d-lg-inline-block">Hola, {{auth()->user()->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item has-icon" style="text-align: center;">

              </a>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2" >
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img alt="image" src="assets/img/untlogo.png" class="rounded-circle mr-1" style="width: 100px; height: 75px;"><br>
            <a href="index.html">SISTEMA SEGURIDAD - UNT</a>
          </div><br>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SISE</a>
          </div><br>
          @auth
          <ul class="sidebar-menu">
            <li class="dropdown">
              <a href="{{URL::to('/dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Inicio</span></a>
            </li>
            {{-- <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-edit"></i><span>Registros</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{URL::to('/misdispositivos')}}">Dispositivos Electrónicos</a></li>
                <li><a class="nav-link" href="{{URL::to('/misvehiculos')}}">Vehículos</a></li>
              </ul>
            </li>                     --}}
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-edit"></i><span>Mantenedores</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{URL::to('/usuario')}}">Usuarios</a></li>
                <li><a class="nav-link" href="{{URL::to('/dispositivo')}}">Dispositivos Electrónicos</a></li>
                <li><a class="nav-link" href="{{URL::to('/vehiculo')}}">Vehículos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-desktop"></i><span>Verificación</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{URL::to('/verificar')}}">Dispositivos Electrónicos</a></li>
                <li><a class="nav-link" href="{{URL::to('/verificarv')}}">Vehículos</a></li>
              </ul>
            </li>
          </ul>
          @endauth
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content" >
        <section class="section">
          @yield('contenido')
        </section>
      </div>

       @include('usuario.create')

      @yield('modales')
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Universidad Nacional de Trujillo</a>
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="assets/modules/jquery.sparkline.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="assets/modules/prism/prism.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <script src="assets/js/page/bootstrap-modal.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  @yield('scripts')
  <script>
    $(document).ready(function() {
      $("input[name=role_id]").click(function () {
        var value = $("input:radio[name=role_id]:checked").val();
        if (value == 'alumno') {
            $("#codigoi").attr('hidden', false);
            $("#facultad").attr('hidden', false);
            $("#escuela").attr('hidden', false);
            $("#contraseña").attr('hidden', false);
            $("#turno").attr('hidden', true);
        }
        if (value == 'personal') {
            $("#codigoi").attr('hidden', false);
            $("#facultad").attr('hidden', false);
            $("#escuela").attr('hidden', false);
            $("#contraseña").attr('hidden', false);
            $("#turno").attr('hidden', true);
        }
        if (value == 'vigilante') {
            $("#turno").attr('hidden', false);
            $("#contraseña").attr('hidden', false);
            $("#codigoi").attr('hidden', true);
            $("#facultad").attr('hidden', true);
            $("#escuela").attr('hidden', true);
        }
      });
    });
    $("#btnNuevo").click(function () {
      $("input:radio[name=role_id]").attr("checked", false);
      var value = $("input:radio[name=role_id]:checked").val();
      if (value == 'alumno') {
        $("input:radio").prop("checked", false);
        $("#codigoi").attr('hidden', true);
        $("#facultad").attr('hidden', true);
        $("#escuela").attr('hidden', true);
        $("#contraseña").attr('hidden', true);
        $("#turno").attr('hidden', true);
      }
      if (value == 'personal') {
        $("input:radio").prop("checked", false);
        $("#codigoi").attr('hidden', true);
        $("#facultad").attr('hidden', true);
        $("#escuela").attr('hidden', true);
        $("#contraseña").attr('hidden', true);
        $("#turno").attr('hidden', true);
      }
      if (value == 'vigilante') {

        $("#codigoi").attr('hidden', true);
        $("#facultad").attr('hidden', true);
        $("#escuela").attr('hidden', true);
        $("#contraseña").attr('hidden', true);
        $("#turno").attr('hidden', true);
      }
    });
    $(".btneditar").click(function () {
      var idUser = $(this).parent().data('id');
      console.log(idUser)
      var texto = $("#texto-"+idUser).val()
      console.log(texto)
      if (texto == 'Alumno') {
        $(".codigoi").prop('hidden', false);
        $(".facultad").attr('hidden', false);
        $(".escuela").attr('hidden', false);
        $(".turno").attr('hidden', true);
      }
      if (texto == 'Personal') {
        $(".codigoi").prop('hidden', false);
        $(".facultad").attr('hidden', false);
        $(".escuela").attr('hidden', false);
        $(".turno").attr('hidden', true);
      }
      if (texto == 'Vigilante') {
        $(".codigoi").prop('hidden', true);
        $(".facultad").attr('hidden', true);
        $(".escuela").attr('hidden', true);
        $(".turno").attr('hidden', false);
      }
      /* $("input:radio[name=role_id]").attr("checked", false);    */
      $("input:radio[name=role_id_"+idUser+"]").val([texto.toLowerCase()])
      $("input[type=radio]").click(function () {
        var input = $(this).attr("name");
        var idUser = input.split("_")[2];
        var value = $("input:radio[name="+input+"]:checked").val();
        var texto = $("#texto-"+idUser).val(value);
        if (value == 'alumno') {
          $(".codigoi").prop('hidden', false).val("");
          $(".facultad").attr('hidden', false).val("");
          $(".escuela").attr('hidden', false).val("");
          $(".turno").attr('hidden', true).val("");
        }
        if (value == 'personal') {
          $(".codigoi").prop('hidden', false).val("");
          $(".facultad").attr('hidden', false).val("");
          $(".escuela").attr('hidden', false).val("");
          $(".turno").attr('hidden', true).val("");
        }
        if (value == 'vigilante') {
          $(".codigoi").prop('hidden', true).val("");
          $(".facultad").attr('hidden', true).val("");
          $(".escuela").attr('hidden', true).val("");
          $(".turno").attr('hidden', false).val("");
        }
      });
    });
  </script>

</body>
</html>
