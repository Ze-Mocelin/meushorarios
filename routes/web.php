<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
$controller = 'App\Http\Controllers';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/cursos', [App\Http\Controllers\HomeController::class, 'cursos'])->name('cursos');
Route::post('cursos/create', [App\Http\Controllers\CursosController::class, 'create'])->name('curso.create');
Route::post('cursos/delete/{id}',[App\Http\Controllers\CursosController::class, 'destroy'])->name('curso.delete');
Route::post('cursos/edit/{id}',[App\Http\Controllers\CursosController::class, 'update'])->name('curso.edit');
Route::get('admin/turmas', [App\Http\Controllers\HomeController::class, 'turmas'])->name('turmas');
Route::post('turmas/create', [App\Http\Controllers\TurmaController::class, 'create'])->name('turma.create');
Route::post('turmas/delete/{id}',[App\Http\Controllers\TurmaController::class, 'destroy'])->name('turma.delete');
Route::post('turmas/edit/{id}',[App\Http\Controllers\TurmaController::class, 'update'])->name('turma.edit');
Route::get('admin/professores', [App\Http\Controllers\HomeController::class, 'professores'])->name('professores');
Route::post('professores/create', [App\Http\Controllers\ProfessorController::class, 'create'])->name('professor.create');
Route::post('professores/delete/{id}',[App\Http\Controllers\ProfessorController::class, 'destroy'])->name('professor.delete');
Route::post('professores/edit/{id}',[App\Http\Controllers\ProfessorController::class, 'update'])->name('professor.edit');
Route::get('admin/disciplinas', [App\Http\Controllers\HomeController::class, 'disciplinas'])->name('disciplinas');
Route::post('disciplinas/create', [App\Http\Controllers\DisciplinaController::class, 'create'])->name('disciplina.create');
Route::post('disciplinas/delete/{id}',[App\Http\Controllers\DisciplinaController::class, 'destroy'])->name('disciplina.delete');
Route::post('disciplinas/edit/{id}',[App\Http\Controllers\DisciplinaController::class, 'update'])->name('disciplina.edit');
Auth::routes();

Route::get('/home', function() {
    return view('cursos');
})->name('home')->middleware('auth');
