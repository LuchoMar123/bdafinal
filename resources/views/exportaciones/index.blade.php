@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo CRUD</title>
</head>
<body background="css/img/imagen2.jpg">
<style>
@charset "utf-8";
body{
    background-image: url(img/imagen.jpg);
}
#form{
    width: 450px;
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
    width:100%;
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

</style>
<center>
<center><h1> MERCOSUR - EXPORTACIONES</h1></center>
<center><button><a href="{{ route('paises.index') }}">REGRESAR A LA PAGINA PRINCIPAL</a></button></center><br>
    <div id="form">
        <form method="post" action="{{ route('exportaciones.store') }}">
        {{ csrf_field() }}
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td>
                        <input type="text" name="id_producto" id="id_producto" placeholder="ID del Producto">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre del pais a exportar" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Registrar</button>
                    </td>
                </tr>
            </table>
        </form>
        <br><br>
        <table widht="100%" border="1" cellpadding="10" align="center">
            <tr>
                <td>ID</td>
                <td>ID_Producto</td>
                <td>Nombre</td>
                <td>Cantidad</td>
                <td>Opcion 1</td>
            </tr>
            @foreach($exportaciones as $exportacion)
            <tr>
                <td>{{$exportacion->id}}</td>
                <td>{{$exportacion->id_producto}}</td>
                <td>{{$exportacion->nombre}}</td>
                <td>{{$exportacion->cantidad}}</td>
            
                <form action="{{route('exportaciones.destroy',$exportacion->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</center>
</body>
</html>
@endsection