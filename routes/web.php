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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::group(['prefix'=>'personal'], function (){
        Route::get('/', [PersonalController::class, 'index'])->name('personal.index');  //127.0.0.1:8000/personal/
        Route::get('/create', [PersonalController::class, 'create'])->name('personal.create');  //127.0.0.1:8000/personal/create
        Route::post('/', [PersonalController::class, 'store'])->name('personal.store');  //127.0.0.1:8000/personal/
        Route::get('/{id}', [PersonalController::class, 'show'])->name('personal.show'); //127.0.0.1:8000/personal/83
        Route::get('/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit'); //127.0.0.1:8000/personal/83/edit
        Route::put('/{id}', [PersonalController::class, 'update'])->name('personal.update'); //127.0.0.1:8000/personal/83
        Route::get('/{id}/destroy', [PersonalController::class, 'destroy'])->name('personal.destroy'); ////127.0.0.1:8000/personal/83/destroy
    });

    Route::group(['prefix'=>'producto'], function (){
        Route::get('/', [ProductoController::class, 'index'])->name('producto.index');  //127.0.0.1:8000/personal/
        Route::get('/create', [ProductoController::class, 'create'])->name('producto.create');  //127.0.0.1:8000/personal/create
        Route::post('/', [ProductoController::class, 'store'])->name('producto.store');  //127.0.0.1:8000/personal/
        Route::get('/{id}', [ProductoController::class, 'show'])->name('producto.show'); //127.0.0.1:8000/personal/83
        Route::get('/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit'); //127.0.0.1:8000/personal/83/edit
        Route::put('/{id}', [ProductoController::class, 'update'])->name('producto.update'); //127.0.0.1:8000/personal/83
        Route::get('/{id}/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy'); ////127.0.0.1:8000/personal/83/destroy
    });
    
    Route::group(['prefix'=>'user'], function (){
        Route::get('/', [UserController::class, 'index'])->name('user.index');  
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit'); //127.0.0.1:8000/personal/83/edit
        Route::put('/{id}', [UserController::class, 'update'])->name('user.update'); //127.0.0.1:8000/personal/83
        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy'); ////127.0.0.1:8000/personal/83/destroy
    });
});