<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function listar(){
        $editoriales = DB::table('editoriales')->get();
        return view('Editorial.vlistareditorial', ['editoriales' => $editoriales]);
    }
}
