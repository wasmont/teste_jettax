<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\ProcessNFE;
use App\Http\Controllers\NFEController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', function () {
    // Para rodar imediatamente JOB queue SYNC
    ProcessNFE::dispatch();
    return "A rotina de ler XML NFE foi executada!!!";
});

// Route::get('/listar-nfe-cliente', function () {
//     return view('nfe');
//     // return "Listar";
// });

Route::get('/listar-nfe-cliente/{id}', [NFEController::class, 'listarNotas']); // Listar dados de NFE's para um cliente específico no caso sempre será "1" default parâmetro
Route::post('/listar-nfe-produto', [NFEController::class, 'listarProdutos']); // Listar os produtos da NFE