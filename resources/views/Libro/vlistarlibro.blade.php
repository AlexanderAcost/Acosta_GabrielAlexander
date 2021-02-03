@extends('principal')
@section('contenido')
    
<br>
    <h1 class="text-center">Lista de  Libros</h1>
    <br>
    <div class="text-end">
    <a href="{{url('libro/registro')}}"  class="btn btn-success">Registrar Nuevo Libro</a> 
    </div>
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

                @if($l->stock == 0)
                    <td> Agotado</td>               
                @endif
                @if($l->stock > 0 && $l->stock <= 10 )
                    <td> Ultimas Unidades</td>                
                @endif
                @if($l->stock > 10 )
                    <td> Disponible</td>                            
                @endif

                <td> {{$l->nombre}}</td> 
                <td> {{$l->precio}}</td> 

                @if($l->nombre == "Norma"  || $l->nombre == "La Santillana")
                    @php($descuento = ($l->precio)*0.05)       
                    <td> {{$descuento}}</td>              
                @else
                    <td>0</td>           
                @endif

                
                <td> 
                <a href="{{route('formeditarlibro', $l->id)}}"  class="btn btn-success">Editar</a> 
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<br><br><br><br>
@stop