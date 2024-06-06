<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneroLivro;
use App\Models\Livro;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    //
    public function home(){
        try{
           
             $Livro = Livro::count();
              /*  $request->validate([
                    'password' => 'required|confirmed|min:4'
                ]);*/
               if(Auth::user()->id == 1 || Auth::user()->id == 2){
                 $Users = User::select(DB::raw('tipo_user_id as TipoUser, count(*) as Qtand'))
                     ->where('tipo_user_id', '<>', 1)
                    ->groupBy('tipo_user_id')
                    ->get();
                    return view('homeAdmin', compact(['Users','Livro'])); 
               } 
               else{
                return view('homeOther', compact(['Livro'])); 
               }
            
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }
    /*$users = DB::table('users')
             ->select(DB::raw('count(*) as user_count, status'))
             ->where('status', '<>', 1)
             ->groupBy('status')
             ->get();
             
             use Illuminate\Support\Facades\DB;
 
$users = DB::table('users')->count();
 
$price = DB::table('orders')->max('price');*/
}
