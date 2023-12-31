<?php

use App\Http\Controllers\CertificadoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ParticipanteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Facultades',FacultadController::class);
Route::resource('Carreras', CarreraController::class);
Route::resource('Cursos', CursoController::class);
Route::resource('Participantes',ParticipanteController::class);
Route::get('/VerificacionCertificado',[CertificadoController::class, 'verificacionCertificado'])->name('VerificarCertificado');
Route::post('/VerificacionCertificado/Curso',[CertificadoController::class, 'verificacionCertificadoCurso'])->name('curso');
