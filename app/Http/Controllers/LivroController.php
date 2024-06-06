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
            $Livros = Livro::paginate(10);
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

            $request->validate([
                'titulo' => 'required|min:3',
                'autor' => 'required|string|min:4',
                'editora' => 'required|min:4',
                'anoedicao' => 'required|integer|min:4',
                'observacao' => 'required|min:4',
            ]);
          //before:date...'start_date' => 'required|date|after:tomorrow'...'email' => 'unique:users,email_address'
          $sms = "";
           if($request->id == null){ 
                Livro::create([
                    'titulo' => $request['titulo'],
                    'autor' => $request['autor'],
                    'editora' => $request['editora'],
                    'ano_edicao' => $request['anoedicao'],
                    'genero_livro_id' => $request['genero'],
                    'observacao' => $request['observacao']                    
                ]); 
                $sms = "Livro Adicionado com sucesso";
            }
            else{
                $Livro = Livro::findOrFail($request->id);
                $Livro->titulo = $request->titulo;
                $Livro->autor = $request->autor;
                $Livro->editora = $request->editora;
                $Livro->ano_edicao = $request->anoedicao;
                $Livro->genero_livro_id = $request->genero;
                $Livro->observacao = $request->observacao;
                $Livro->save();
                $sms = "Livro Atualizado com sucesso";
            }      
            return redirect()->back()->with([
                'StatusPositivo' => $sms,
            ]);        
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
    public function destroy($id)
    {       
        try{
            $Livro = Livro::findOrFail($id);
            $Livro->delete(); 
            return redirect()->back()->with([
                'StatusPositivo' => "Livro deletado com sucesso",
            ]);
        }catch(Exception $e){
            return response()->json($e->getMessage(), 400); 
        }
    }
}
