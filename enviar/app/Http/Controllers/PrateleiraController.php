<?php

namespace App\Http\Controllers;

use App\Models\Prateleira;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrateleiraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $Prateleiras = Prateleira::all();
            return view('view', compact(['Prateleiras'])); 
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
                Prateleira::create([
                    'descricao' => $request['descricao']
                ]); 
            }
            else{
                $Prateleira = Prateleira::findOrFail($request->id);
                $Prateleira->descricao = $request->descricao;
                $Prateleira->save();
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
    public function show(Prateleira $prateleira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prateleira $prateleira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prateleira $prateleira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        try{
            $Prateleira = Prateleira::findOrFail($id);
            $Prateleira->delete(); 
            return redirect()->back();
        }catch(Exception $e){
            return response()->json($e->getMessage(), 400); 
        }
    }
}
