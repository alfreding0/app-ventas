<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

//redireccionando para deshabiliar welcome y register
Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('register', function(){
    return redirect()->route('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::group(['prefix'=>'personal'], function (){
        Route::get('/', [PersonalController::class, 'index'])->name('personal.index');
        Route::get('/create', [PersonalController::class, 'create'])->name('personal.create');
        Route::post('/', [PersonalController::class, 'store'])->name('personal.store');
        Route::get('/{id}', [PersonalController::class, 'show'])->name('personal.show');
        Route::get('/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
        Route::put('/{id}', [PersonalController::class, 'update'])->name('personal.update');
        Route::get('/{id}/destroy', [PersonalController::class, 'destroy'])->name('personal.destroy');
    });

    Route::group(['prefix'=>'producto'], function (){
        Route::get('/', [ProductoController::class, 'index'])->name('producto.index');
        Route::get('/create', [ProductoController::class, 'create'])->name('producto.create');
        Route::post('/', [ProductoController::class, 'store'])->name('producto.store');
        Route::get('/{id}', [ProductoController::class, 'show'])->name('producto.show');
        Route::get('/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
        Route::put('/{id}', [ProductoController::class, 'update'])->name('producto.update');
        Route::get('/{id}/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy');
    });
    
    Route::group(['prefix'=>'user'], function (){
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
    });
});