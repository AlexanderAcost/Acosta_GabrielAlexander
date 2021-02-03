@extends('principal')
@section('contenido')
    
<br>
    <h1 class="text-center">Lista de  Editorial</h1>
    <br>
    <div class="container">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Telefono  </th>
                </tr>
            </thead>
            <tbody class="table-success ">
                @foreach($editoriales as $e)
                <tr>
                <th scope="row">{{$e->id}}</th>
                <td> {{$e->nombre}}</td>
                <td> {{$e->direccion}}</td>
                <td> {{$e->ciudad}}</td>
                <td> {{$e->telefono}}</td>        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<br><br><br><br>
@stop