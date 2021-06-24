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
    width:50%;
    font-family: Comic Sans MS;
}
table{
    border: solid green 1px;
    background-color: green;
    width:50%;
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
    background-color: blue;
}
a{
    font-family: Comic Sans MS;
    color: white;
}
</style>
<center><h1> MERCOSUR - LISTA DE PRODUCTOS</h1></center>
    <center><button><a href="{{ route('paises.index') }}">REGRESAR A PAGINA PRINCIPAL</a></button></center>
<center>
    <br>
    <div id="form">
        <table widht="100%" border="1" cellpadding="23" align="center">
            <tr>
                <td>Pais</td>
                <td>Mostrar Productos</td>
            </tr>
            <tr>
                <td>Brasil</td>
                <td><button><a href="{{ route('productos3.index') }}">click aqui</a></button> </td>
            </tr>
            <tr>
                <td>Argentina</td>
                <td><button><a href="{{ route('productos.index') }}">click aqui</a></button> </td>
            </tr>
            <tr>
                <td>Bolivia</td>
                <td><button><a href="{{ route('productos2.index') }}">click aqui</a></button> </td>
            </tr>
            <tr>
                <td>Uruguay</td>
                <td><button><a href="{{ route('productos5.index') }}">click aqui</a></button> </td>
            </tr>
            <tr>
                <td>Paraguay</td>
                <td><button><a href="{{ route('productos4.index') }}">click aqui</a></button> </td>
            </tr>
            <tr>
                <td>Venezuela</td>
                <td><button><a href="{{ route('productos6.index') }}">click aqui</a></button> </td>
            </tr>
        </table>
        
    </div>
</center>
</body>
@endsection