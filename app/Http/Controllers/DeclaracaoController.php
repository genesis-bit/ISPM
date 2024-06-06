<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Legalizacao;
//use PDF;
use Barryvdh\DomPDF\Facade\Pdf;


class DeclaracaoController extends Controller
{
    //
    public function showEmployees(){
        $employee = Employee::all();
        return view('index', compact('employee'));
      }

        // Generate PDF
    public function agenciaPDF(int $id) {
        try{
              $Legalizacao = Legalizacao::with('Agencia', 'Funcionario')->find($id);
              $pdf = PDF::loadView('declaracao.agencia',compact('Legalizacao'));
              return $pdf->stream();
        }
        catch(Exception $e){
              return response()->json($e, 400);
        }    
    }
    public function despachantePDF(int $id) {   
      try{
            $Legalizacao = Legalizacao::with('Agencia', 'Funcionario')->find($id);
            $pdf = PDF::loadView('declaracao.despachante',compact('Legalizacao'));
            return $pdf->stream();
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }     
   }
   public function termoPDF(int $id) {   
      try{
            $Legalizacao = Legalizacao::with('Agencia', 'Funcionario')->find($id);
            $pdf = PDF::loadView('declaracao.termo',compact('Legalizacao'));
            return $pdf->stream();
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }    
    }

      // Generate PDF
    public function createPDF() {
      // retreive all records from db
      $data = Employee::all();

     /* $pdf = Pdf::loadView('pdf');
      return $pdf->stream();
      return $pdf->download('invoice.pdf');
*/

      // share data to view
      view()->share('employee',$data);
      $pdf = PDF::loadView('index', compact('data'));
      return $pdf->stream();
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
}
