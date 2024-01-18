<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PsicologoController;
use App\Http\Controllers\PsychologistController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name("home.index");

//Auth\Register Routes

Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post("/login", [AuthController::class, "auth"])->name("login.auth");
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::get('/cadastrar_psicologo', [PsychologistController::class, "create"])->name("cadastrar.psicologo.index");
Route::get('/cadastrar_paciente', [AuthController::class, "cadastrarPacienteView"])->name("cadastrar.paciente.index");
Route::post('/store/patient', [PatientController::class, 'store'])->name('store.patient');


Route::middleware('auth')->group(function(){
    Route::prefix('/pyschologist')->group(function(){
        Route::get('/index', [PsychologistController::class, 'index'])->name('pyschologist.index');
    });
});
