<?php

use App\Http\Controllers\CrudopController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.adminHome')->middleware('is_admin');


Route::get('/crudops/create', [CrudopController::class, 'create'])->name('crudops.create');
 Route::get('/crudops/{crudop}', [CrudopController::class, 'show'])->name('crudops.show');

Route::post('/crudops', [CrudopController::class, 'store'])->name('crudops.store');
Route::get('/crudops/{crudop}/edit', [CrudopController::class, 'edit'])->name('crudops.edit');
 Route::put('/crudops/{crudop}', [CrudopController::class, 'update'])->name('crudops.update');
Route::delete('/crudops/{crudop}', [CrudopController::class, 'destroy'])->name('crudops.destroy');
  Route::get('/crudops', [CrudopController::class, 'index'])->name('crudops.index');
