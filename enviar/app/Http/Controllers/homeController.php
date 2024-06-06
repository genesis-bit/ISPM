<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneroLivro;

class homeController extends Controller
{
    //
    public function home(){
        try{
            $Grau = GrauAcademico::all();
            return view('ferramentas', compact(['Grau'])); 
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }
}
