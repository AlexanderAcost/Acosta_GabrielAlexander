@extends('principal')
@section('contenido')
    
     
<h1 class="text-center">Formulario Edicion Libro</h1>



<div class="container"> 
    <form action="{{route('editarlibro', $libro->id )}}" method="POST" >
        @csrf
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" name="isbn" value="{{$libro->ISBN}}" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" name="titulo" value="{{$libro->titulo}}" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>    
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">#</span>
            </div>
            <input type="number" class="form-control" name="precio" value="{{$libro->precio}}" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">#</span>
            </div>
            <input type="number" class="form-control" name="cantidad" value="{{$libro->stock}}" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <br>
        
         <!-- Etiquetas de tipo Select -->
         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="editorial">Editorial</label>   
            </div>
            <select class="custom-select" id="editorial" name="editorial" required>
                <option value="{{$libro->editorial_fk}}" disable >Selecione una Editorial</option>
                @foreach($editorial as $e)
                <option value="{{$e->id}}">{{$e->nombre}}</option>
                @endforeach
            </select>
        </div>

        <br><br>
        <button type="submit" class="btn btn-success" onclick="return alerta()">Guardar Cambios</button>
        <br><br>

    </form>



    
@stop