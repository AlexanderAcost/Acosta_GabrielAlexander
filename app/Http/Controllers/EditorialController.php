<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Model\Meditorial;


class EditorialController extends Controller
{
    public function listar(){
        $editoriales = DB::table('editorial')->get();
        return view('Editorial.vlistareditorial', ['editoriales' => $editoriales]);
    }
}
