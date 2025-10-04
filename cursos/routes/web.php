<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

//Email
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

//Nosotros
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'dataFormCursos')->name('cursos.dataFormCursos');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    Route::get('cursos/{id}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{id}', 'update')->name('cursos.update');
    Route::delete('cursos/{id}', 'destroy')->name('cursos.destroy');
});

Route::get('contactanos', function(){
    $correo = new ContactanosMailable;
    Mail::to('arupakasan86@gmail.com')->send($correo);
    return "Mensaje Enviado";
});

