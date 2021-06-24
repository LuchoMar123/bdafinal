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
    width:100%;
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
    background-color:cornflowerblue;
    width:200px;
    height:50px;
}

</style>
<center><h1> MERCOSUR - LISTA DE REPRESENTANTES</h1></center>
<center>
    <br><br>
    <div id="form">
        <table widht="100%" border="1" cellpadding="5" align="center">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Cargo</td>
                <td>Nacionalidad</td>
            </tr>
            </thead>
        @foreach($representantes as $socio)
            <tr>
                <td>{{$socio->id}}</td>
                <td>{{$socio->nombreso}}</td>
                <td>{{$socio->cargo}}</td>
                <td>{{$socio->nacionalidad}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <br><br>
    <button><a href="{{ route('paises.index') }}"><b> REGRESAR A PAGINA PRINCIPAL </b></a></button>
</center>
</body>
</html>
@endsection