@extends('principal')
@section('contenido')
    
<h1 class="text-center">Formulario De Registro Libro</h1>

    <div class="container"> 
    <form action="{{url('libro/registro')}}" method="POST" >
        @csrf
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" name="isbn" placeholder="ISBN libro" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" name="titulo" placeholder="Titulo Del Libro" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>    
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">#</span>
            </div>
            <input type="number" class="form-control" name="precio" placeholder="Precio Del Libro" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">#</span>
            </div>
            <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <br>
        
         <!-- Etiquetas de tipo Select -->
         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="editorial">Editorial</label>   
            </div>
            <select class="custom-select" id="editorial" name="editorial" required>
                <option value="" disable >Selecione una Editorial</option>
                @foreach($editoriales as $e)
                <option value="{{$e->id}}">{{$e->nombre}}</option>
                @endforeach
            </select>
        </div>

        <br><br>
        <button type="submit" class="btn btn-success" onclick="return alerta()">Registrar</button>
        <br><br>

    </form>

@stop