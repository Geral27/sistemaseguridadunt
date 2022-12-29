<div style="width: 80%; margin: 0px auto; padding: 15px;">
    <img style="float: left; margin-right: 15px; width: 140px;" src="img/untlogo1.png">
    <aside style="padding: 50px; font-family: Arial, Helvetica, sans-serif; ">UNIVERSIDAD NACIONAL DE TRUJILLO - SISE</aside>
    <div style="clear: both;"></div>
</div>
<p style="font-family: Arial, Helvetica, sans-serif;">Lista de Dispositivos</p>
<div class="card-body p-0">
    <table style="border-collapse: collapse; width: 100%;">
        <tr>
          
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">CÓDIGO</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">TIPO</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">MARCA</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">COLOR</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">SERIE</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">FACULTAD</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">ESCUELA</td>
            <td style="border: black 1px solid; text-align: center; font-family: Arial, Helvetica, sans-serif; background-color:rgb(180, 178, 178); font-size: 10px;">ALUMNO</td>
            @foreach ($dispositivo as $us)
        </tr>
          <tr>
            <td style="border: black 1px solid;  font-family: Arial, Helvetica, sans-serif; font-size: 10px;" >{{$us->codigodispositivo}}</td>
            
            <td style="border: black 1px solid;  font-family: Arial, Helvetica, sans-serif; font-size: 10px;">{{$us->tipodispositivo}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->marca}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->color}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->serie}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif;">{{$us->facultad}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->escuela}}</td>
            <td style="border: black 1px solid; font-size: 10px; font-family: Arial, Helvetica, sans-serif; ">{{$us->user->name}}</td>
          </tr>
    
          @endforeach 
    </table>
</div>
 
