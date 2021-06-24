@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <title>Ejemplo CRUD</title>
</head>
<body>
<style>
@charset "utf-8";

@charset "utf-8";
#form{
    width: 500px;
    margin: 0 auto;
    text-align: center;

}
#form form input{
    width: 100%;
    height: 32px;
    
}
form button{
    width: 50%;
    height: 35px;
}
td{
    border: solid green 1px;
    background-image: url(../img/imagen.jpg);
    width:100%;
    font-family: Comic Sans MS;
}
table{
    border: solid green 1px;
    background-color: green;
    width:20%;
    border-radius: 5px;
}
body{
    background-image: url(../img/imagen2.png);
    background-size: 100% 100%;
    background-attachment: fixed;
}
h1{
    color: white;
    font-family: Comic Sans MS;
    font-size: 35px;
}
button{
    border-radius: 5px;
    background-color:cornflowerblue;
    width:200px;
    height:50px;
}

</style>
<center><h1> MERCOSUR - PAGINA PRINCIPAL</h1></center>
<center>
    <br><br>
    <div id="form">
        <table widht="100%" border="1" cellpadding="4" align="center">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Representante</td>
                <td>ID_Relacion</td>
                <td>Opcion</td>
            </tr>
            </thead>
            @foreach($paises as $pais)
            <tr>
                <td>{{$pais->id}}</td>
                <td>{{$pais->nombre}}</td>
                <td>{{$pais->id_socio}}</td>
                <td>{{$pais->id_relacion}}</td>
                <td><a href="{{ route('exportacionesu.index') }}">Consultar exportaciones</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <br><br>
    <button><a href="{{ route('representantesu.index') }}"><b> Mostrar Representantes</b></a></button>
    <button><a href="{{ route('relacionesu.index') }}"><b> Mostrar Relaciones </b></a> </button>
</center>
</body>
</html>
@endsection