<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolController;
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


// !Rota para teste
// Route::get('/teste', function () {
//     return view('dashboard/students/index');
// })->name('teste');


// *Rota para "bem-vindo"
Route::get('/', function () {
    return view('welcome');
});


// *Rota para "painel"
Route::get('/painel', function () {
    return view('dashboard/index');
})->middleware('auth')->name('dashboard');


// *Rota para "perfil"
Route::middleware('auth')
    ->controller(ProfileController::class)
    ->name('profile.')
    ->group(function () {
        Route::get('/perfil', 'edit')->name('edit');
        Route::patch('/perfil', 'update')->name('update');
        Route::delete('/perfil', 'destroy')->name('destroy');
    });


// *Rota para "alunos"
Route::resource('alunos', StudentController::class)
    ->names([
        'index'   => 'students.index',
        'store'   => 'students.store',
        'create'  => 'students.create',
        'show'    => 'students.show',
        'update'  => 'students.update',
        'destroy' => 'students.destroy',
        'edit'    => 'students.edit'
    ]);


// *Rotas para "escola"
Route::resource('escola', SchoolController::class)
    ->names([
        'index'   => 'schools.index',
        'store'   => 'schools.store',
        'create'  => 'schools.create',
        'show'    => 'schools.show',
        'update'  => 'schools.update',
        'destroy' => 'schools.destroy',
        'edit'    => 'schools.edit'
    ]);


// *Rota




// auth.php
require __DIR__ . '/auth.php';
