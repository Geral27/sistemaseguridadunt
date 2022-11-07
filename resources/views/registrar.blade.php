<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">

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
    <div id="app">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img alt="image" src="assets/img/untlogo.png" style="width: 80px; height: 50px;">
                            <label style="font-size: 15px;">SISTEMA DE SEGURIDAD - UNT</label>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header"><h4>Registrate</h4></div>
                            <div class="card-body">
                                <form method="POST" action="{{route('usuario.registrar')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label for="dni">Dni</label>
                                            <input id="dni" type="text" class="form-control" name="dni">
                                        </div>
                                        <div class="form-group col-9">
                                            <label for="name">Nombres y Apellidos</label>
                                            <input id="name" type="text" class="form-control" name="name" autofocus>
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="email">Correo UNT o Email</label>
                                            <input id="email" type="email" class="form-control" name="email">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-9">
                                            <label for="direccion" class="d-block">Direccion</label>
                                            <input id="direccion" type="text" class="form-control" name="direccion">
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="telefono" class="d-block">Telefono</label>
                                            <input id="telefono" type="text" class="form-control" name="telefono">
                                        </div>
                                    </div>
                                    <div class="form-divider">
                                        Escoge el Rol
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6" style="text-align:center;">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="role_id" id="alumno" value="alumno">
                                              <label class="form-check-label" for="alumno">
                                                Alumno
                                              </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-6" style="text-align:center;">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="role_id" id="personal" value="personal">
                                              <label class="form-check-label" for="personal">
                                                Personal UNT
                                              </label>
                                            </div>
                                        </div>
                                       <!-- <div class="form-group col-4" style="text-align:center;">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="usuario" id="vigilante" value="vigilante">
                                              <label class="form-check-label" for="vigilante">
                                                Vigilante
                                              </label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6" id="codigoi" hidden>
                                            <label for="codigoi">Código Institucional</label>
                                            <input id="codigoi" type="text" class="form-control" name="codigoi" required>
                                        </div>
                                        <div class="form-group col-6" id="facultad" hidden>
                                            <label for="facultad">Facultad</label>
                                            <select class="form-control" id="facultad" name="facultad">
                                                <option value="Option 1">Option 1</option>
                                                <option value="Option 2">Option 2</option>
                                                <option value="Option 3">Option 3</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6" id="turno" hidden>
                                            <label for="turno">Turno</label>
                                            <input id="turno" type="text" class="form-control" name="turno">
                                        </div>
                                        <div class="form-group col-6" id="escuela" hidden>
                                            <label for="escuela">Escuela</label>
                                            <select class="form-control" id="escuela" name="escuela">
                                                <option value="Option 1">Option 1</option>
                                                <option value="Option 2">Option 2</option>
                                                <option value="Option 3">Option 3</option>
                                              </select>
                                        </div>
                                        <div class="form-group col-6" id="contraseña" hidden>
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                          Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        <div class="simple-footer">
                        Copyright &copy; Universidad Nacional de Trujillo - 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="assets/js/page/auth-register.js"></script>
    
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
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
    </script>
    </body>
</html>