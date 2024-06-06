<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\GrauAcademico;
use App\Models\Especialidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;





class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $Grau = GrauAcademico::all();
            $Especialidades = Especialidade::all();
            $Docentes = Docente::with('GrauAcademico', 'Especialidade')->get();
            return view('docente', compact(['Docentes','Grau','Especialidades'])); 
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
            $usuario = new RegisterController();
            $doc = $usuario::usuario(['name' => $request['nome'], 'email' => $request['email'], 'tipo_user_id' => '3', 'password' => '0123456789']);

            if($request->id == null){ 
                Docente::create([
                    'id' => $doc['id'],
                    'nome' => $request['nome'],
                    'grau_academico_id' => $request['grau'],
                    'numero_professor' => $request['processo'],
                    'especialidade_id' => $request['especialidade'],
                    'numero_bilhete' => $request['bilhete'],
                    'contacto' => $request['contacto']                  
                ]); 
            }
            else{
                $Estudantes = Docente::findOrFail($request->id);
            
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
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        //
    }
    public function PDF() {
        try{
              $Docentes = Docente::OrderBy('nome')->get();
              $pdf = PDF::loadView('relatorio.docente',compact('Docentes'));
              return $pdf->stream();
        }
        catch(Exception $e){
              return response()->json($e, 400);
        }    
    }
}
