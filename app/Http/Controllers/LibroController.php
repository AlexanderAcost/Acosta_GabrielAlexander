<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Meditorial;
use App\Models\Mlibro;

class LibroController extends Controller
{
    public function formregistro (){
        $editoriales = Meditorial::all();
        // $editoriales = DB::table('editorial')->get(); Ese mas rapido para consultas
        return view('Libro.vformregistro', ['editoriales' => $editoriales]);
    }
    public function registro (Request $request){
        $libro = new Mlibro();
        $libro->ISBN = $request->input('isbn');
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('cantidad');
        $libro->editorial_fk = $request->input('editorial');
        $libro->save();
        return redirect('libro/lista');
    }
    public function listar (){
        $libros = DB::table('libro as lib')
                    ->join('editorial as edit', 'lib.editorial_fk', '=', 'edit.id')
                    ->select('lib.id','lib.ISBN','lib.titulo','lib.precio','lib.stock','lib.editorial_fk','edit.nombre',)
                    ->orderBy('lib.id', 'asc')
                    ->get();
        return view('Libro.vlistarlibro', ['libros' => $libros]);

    }
    public function formeditar ($idlibro){
        $libro = Mlibro::findOrFail($idlibro);
        $editorial = Meditorial::all();
        return view('Libro.vformactualizar', compact('libro','editorial'));
    }
    public function editar (Request $request,$id){
        $libro = Mlibro::findOrFail($id);
        $libro->ISBN = $request->input('isbn');
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('cantidad');
        $libro->editorial_fk = $request->input('editorial');
        $libro->save();
        return redirect('libro/lista');
    }
}
