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

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    Route::resource('admin/roles', App\Http\Controllers\RoleController::class)->names([
        'index' => 'admin.roles.index',
        'create' => 'admin.roles.create',
        'store' => 'admin.roles.store',
        'edit' => 'admin.roles.edit'
    ])->except([
        'update' => 'admin.roles.update'
    ]);
    Route::POST('admin/roles/{role}/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.roles.update');

    Route::resource('admin/users', App\Http\Controllers\UserController::class)->names([
        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'edit' => 'admin.users.edit'
    ])->except([
        'update' => 'admin.users.update'
    ]);
    Route::POST('admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
});

Route::middleware(['auth', 'member'])->group(function(){
    Route::get('member/home', [App\Http\Controllers\HomeController::class, 'index'])->name('member.home');
});
