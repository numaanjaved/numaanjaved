<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('laravel');
});

Auth::routes();



Route::middleware(['middleware' => 'auth'])->group(function(){
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::resource('admin/roles', App\Http\Controllers\RoleController::class)->names([
        'index' => 'admin.roles.index',
        'create' => 'admin.roles.create',
        'store' => 'admin.roles.store',
        'edit' => 'admin.roles.edit'
    ])->except([
        'update' => 'admin.roles.update'
    ]);
    Route::POST('admin/roles/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('admin.roles.update');
});
