<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\Curso;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $Estudantes = Estudante::with('Curso')->get();
            $Cursos = Curso::all();
            return view('estudante', compact(['Estudantes','Cursos'])); 
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
       
    }

    /**
     * Store a newly created resource in storage.   
     */
    public function store(Request $request)
    {
        try{
            $usuario = new RegisterController();
            $est = $usuario::usuario(['name' => $request['nome'], 'email' => $request['email'], 'tipo_user_id' => '4', 'password' => '0123456789']);

            if($request->id == null){ 
                Estudante::create([
                    'id' => $est['id'],
                    'nome' => $request['nome'],
                    'curso_id' => $request['curso'],
                    'numero_estudante' => $request['processo'],
                    'numero_bilhete' => $request['bilhete'],
                    'contacto' => $request['contacto']                  
                ]); 
            }
            else{
                $Estudantes = Estudante::findOrFail($request->id);
               
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
    public function show(Estudante $estudante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudante $estudante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudante $estudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudante $estudante)
    {
        //
    }
    public function PDF() {
        try{
            $Estudantes = Estudante::OrderBy('nome')->get();
              $pdf = PDF::loadView('relatorio.estudante',compact('Estudantes'));
              return $pdf->stream();
        }
        catch(Exception $e){
              return response()->json($e, 400);
        }    
    }
}
