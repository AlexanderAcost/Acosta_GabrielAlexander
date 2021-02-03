<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Model\Meditorial;
use App\Model\Mlibro;

class LibroController extends Controller
{
    public function formregistro (){
        $editoriales = DB::table('editorial')->get();
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
        return view('Libro.vlistalibro', ['libros' => $libros]);

    }
    public function formeditar ($idlibro){
        $libro = Mlibro::findOrFail($idlibro);
        $editorial = Meditorial::all();
        return view('Libro.vformactualizar', compact('libro','editorial'));
    }
    public function editar (Request $request, $idlibro){
        $libro = Mlibro::findOrFail($idlibro);
        $libro->ISBN = $request->input('isbn');
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('cantidad');
        $libro->editorial_fk = $request->input('editorial');
        $libro->save();
        return redirect('libro/lista');
    }
}
