<?php

namespace App\Http\Controllers;

use App\Models\Legalizacao;
use App\Models\Funcionario;
use App\Models\Empresa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $Legalizacao = Legalizacao::with('Agencia', 'Funcionario')->get();
            $Agencia = Empresa::where('tipo_empresa_id', '=', 3)->get();
            $Funcionario = Funcionario::where('empresa_id', '=', 1)->get();
            return view('home', compact(['Agencia', 'Funcionario', 'Legalizacao'])); 
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
            Legalizacao::create([
                  'bl' => $request['bl'],
                  'navio' => $request['navio'],
                  'viagem' => $request['viagem'],
                  'eta' => $request['eta'],
                  'produto' => $request['produto'],
                  'agencia_id' => $request['agencia'],
                  'funcionario_id' => $request['funcionario']
                ]); 
                 
            return redirect()->back();
            
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Legalizacao $legalizacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Legalizacao $legalizacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Legalizacao $legalizacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Legalizacao $legalizacao)
    {
        //
    }
}
