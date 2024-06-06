<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tabelasteste;

class TabelastesteController extends Controller
{
    //
    public function index()
    {
        try{
            $tt = tabelasteste::all();   
            return $tt;    
            //return view('home', compact(['tt'])); 
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }

    //add
    public function store()
    {
        try{
            $tes = new tabelasteste();
            $tes->descricao = "Teste3";
            $tes->save();
            /*Legalizacao::create([
                  'bl' => $request['bl'],
                  
                ]); 
                 
            return redirect()->back();*/
            
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }
}
