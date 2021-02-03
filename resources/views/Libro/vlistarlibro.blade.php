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
                <th scope="col">ISBN</th>
                <th scope="col">TITULO</th>
                <th scope="col">STOCK</th>
                <th scope="col">ESTADO</th>
                <th scope="col">EDITORIAL</th>
                <th scope="col">PRECIO</th>
                <th scope="col">DESCUENTO</th>
                <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            <tbody class="table-success ">
                @foreach($libros as $l)
                <tr>
                <th scope="row">{{$l->id}}</th>
                <td> {{$l->ISBN}}</td>
                <td> {{$l->titulo}}</td>
                <td> {{$l->stock}}</td>
                
                <td> estado</td>

                <td> {{$l->editorial_fk}}</td> 
                <td> {{$l->precio}}</td> 

                <td> descuento</td>
                <td> 
                <a href="{{route('editarlibro', $l->id)}}"  class="btn btn-success">Editar</a> 
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<br><br><br><br>
@stop