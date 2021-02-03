<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function formregistro (){
        $editoriales = DB::table('editoriales')->get();
        return view('Libro.vformregistro', ['editoriales' => $editoriales]);
    }
    public function registro (){

    }
    public function listar (){

    }
    public function formeditar (){

    }
    public function editar (){

    }
}
