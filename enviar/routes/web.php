<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneroLivroController;
use App\Http\Controllers\PrateleiraController;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PrateleiraLivroController;
use App\Http\Controllers\DevolucaoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EspecialidadeController;
/*
use App\Http\Controllers\DeclaracaoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\TabelastesteController;

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Senha do Admin: Chinangol2024




Route::get('/p', [EmployeeController::class, 'showEmployees']);
Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);
Route::get('/declaracao/agencia/{id}', [DeclaracaoController::class, 'agenciaPDF'])->name('declaracaoAgencia');
Route::get('/declaracao/despachante/{id}', [DeclaracaoController::class, 'despachantePDF'])->name('declaracaoDespachante');
Route::get('/declaracao/termo/{id}', [DeclaracaoController::class, 'termoPDF'])->name('declaracaoTermo');

Auth::routes();

Route::get('/', [LegalizacaoController::class, 'index'])->name('home');
//Route::get('/empresa', [App\Http\Controllers\EmpresaController::class, 'index']);
Route::resources([
    'empresa' => EmpresaController::class, 
    'funcionario'  => FuncionarioController::class,
    'legalizacao' => LegalizacaoController::class
]);
*/
Route::get('/', function () {
    return view('login');
});
Route::get('/home', [GeneroLivroController::class,'index']);
Auth::routes();
Route::resources([
    'categoriaLivro' => GeneroLivroController::class, 
    'curso' => CursoController::class, 
    'emprestimo' => EmprestimoController::class,
    'estudante' => EstudanteController::class, 
    'devolucao' => DevolucaoController::class,
    'docente' => DocenteController::class, 
    'livro' => LivroController::class, 
    'prateleira' => PrateleiraController::class,
    'especialidade' => EspecialidadeController::class,
    'prateleiraLivro' => PrateleiraLivroController::class,
]);
Route::post('/solicitarEmprestimo', [EmprestimoController::class, 'solicitar'])->name('solicitarEmprestimo');
Route::get('/relatorio/estudante', [EstudanteController::class,'PDF']);
Route::get('/relatorio/docente', [DocenteController::class,'PDF']);
Route::post('/relatorio/emprestimo', [EmprestimoController::class,'PDF']);