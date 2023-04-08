<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
    if (auth()->user()) {
        return redirect()->route('dashboard');
    }

    return view('welcome');
});


// *Rota para "painel"
Route::middleware('auth')
    ->controller(DashboardController::class)
    ->group(function () {
        Route::get('/painel', 'index')->name('dashboard');
    });


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
Route::middleware(['auth', 'role:admin'])
    ->resource('alunos', StudentController::class)
    ->parameters(['alunos' => 'student'])
    ->names([
        'index'   => 'student.index',
        'store'   => 'student.store',
        'create'  => 'student.create',
        'show'    => 'student.show',
        'update'  => 'student.update',
        'destroy' => 'student.destroy',
        'edit'    => 'student.edit'
]);


// *Rotas para "professores"
Route::middleware('auth')
    ->resource('professores', TeacherController::class)
    ->parameters(['professores' => 'teacher'])
    ->names([
        'index'   => 'teacher.index',
        'store'   => 'teacher.store',
        'create'  => 'teacher.create',
        'show'    => 'teacher.show',
        'update'  => 'teacher.update',
        'destroy' => 'teacher.destroy',
        'edit'    => 'teacher.edit'
]);


// *Rotas para "turmas"
Route::middleware('auth')
    ->resource('turmas', SchoolClassController::class)
    ->parameters(['turmas' => 'school_class'])
    ->names([
        'index'   => 'school_class.index',
        'store'   => 'school_class.store',
        'create'  => 'school_class.create',
        'show'    => 'school_class.show',
        'update'  => 'school_class.update',
        'destroy' => 'school_class.destroy',
        'edit'    => 'school_class.edit'
]);


// *Rotas para "escola"
Route::middleware('auth')
    ->resource('escola', SchoolController::class)
    ->parameters(['escola' => 'school'])
    ->names([
        'index'   => 'school.index',
        'store'   => 'school.store',
        'create'  => 'school.create',
        'show'    => 'school.show',
        'update'  => 'school.update',
        'destroy' => 'school.destroy',
        'edit'    => 'school.edit'
]);







// *Rota




// auth.php
require __DIR__ . '/auth.php';
