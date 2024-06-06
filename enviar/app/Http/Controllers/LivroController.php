<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\GeneroLivro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $Livros = Livro::with('GeneroLivro')->get();
            $Generos = GeneroLivro::all();
            return view('livro', compact(['Livros','Generos'])); 
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
          
            if($request->id == null){ 
                Livro::create([
                    'titulo' => $request['titulo'],
                    'autor' => $request['autor'],
                    'editora' => $request['editora'],
                    'ano_edicao' => $request['anoedicao'],
                    'genero_livro_id' => $request['genero'],
                    'observacao' => $request['observacao']                    
                ]); 
            }
            else{
                $Livro = GeneroLivro::findOrFail($request->id);
               
            }      
            return redirect()->back();          
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        //
    }
}
