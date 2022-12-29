
<div style="width: 80%; margin: 0px auto; padding: 15px;">
    <img style="float: left; margin-right: 15px; width: 140px;" src="img/untlogo1.png">
    <aside style="padding: 50px; font-family: Arial, Helvetica, sans-serif; ">UNIVERSIDAD NACIONAL DE TRUJILLO - SISE</aside>
    <div style="clear: both;"></div>
</div>
<p style="font-family: Arial, Helvetica, sans-serif;">Lista de Usuarios</p>
<div class="card-body p-0">
    <table style="border-collapse: collapse; width: 100%;">
        <tr>
          
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">DNI</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">NOMBRES</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">ROL</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">COD. INST</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">FCAULTAD</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">ESCUELA</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">TURNO</td></b>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">EMAIL</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">DIRECCIÓN</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">TELÉFONO</td></b>
            @foreach ($user as $us)
        </tr>
          <tr>
            <td style="border: black 1px solid;  font-family: Arial, Helvetica, sans-serif; font-size: 10px;" >{{$us->dni}}</td>
            
            <td style="border: black 1px solid;  font-family: Arial, Helvetica, sans-serif; font-size: 10px;">{{$us->name}}</td>
            
            <td style="border: black 1px solid; font-family: Arial, Helvetica, sans-serif; font-size: 10px;">
                @foreach ($us->roles as $rol)
                <p>{{$rol->display_name}}</p>    
            @endforeach
            </td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->codigoi}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->facultad}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->escuela}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif;">{{$us->turno}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->email}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->direccion}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif;">{{$us->telefono}}</td>
          </tr>
    
          @endforeach 
    </table>
</div>
 
