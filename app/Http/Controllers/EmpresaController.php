<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\TipoEmpresa;
use App\Models\Cargo;
//use Illuminate\Support\Facades\Validator;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try{
            $Empresas = Empresa::with('Funcionarios', 'TipoEmpresa')->get();
            $TipoEmpresa = TipoEmpresa::where('id','>', 1)->get();
            $Cargo = Cargo::all();
            return view('empresa', compact(['TipoEmpresa', 'Empresas', 'Cargo'])); 
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
        //
        try{
            if($request->idEmpresa == null){
                Empresa::create([
                    'nome' => $request['nomeEmpresa'],
                    'nif' => $request['nif'],
                    'endereco' => $request['endereco'],
                    'tipo_empresa_id' => $request['tipoEmpresa']
                ]); 
            }
            else{
                $Empresa = Empresa::find($request->idEmpresa);
                $Empresa->nome = $request->nomeEmpresa;
                $Empresa->nif = $request->nif;
                $Empresa->endereco = $request->endereco;
                $Empresa->tipo_empresa_id = $request->tipoEmpresa;
                $Empresa->save();
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
