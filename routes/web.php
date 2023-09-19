<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri: '/', action: [HomeController::class,'index'])->name('home');
Route::get(uri: '/users', action:[UserController::class,'index'])->name('users.index');
Route::get(uri: '/users/create', action:[UserController::class,'create'])->name('users.create');
Route::post(uri: '/users', action:[UserController::class,'store'])->name('users.store');
Route::get(uri: '/users/{user}', action:[UserController::class,'show'])->name('users.show');
Route::get(uri: '/users/{user}/edit', action:[UserController::class,'edit'])->name('users.edit');
Route::put(uri: '/users/{user}', action:[UserController::class,'update'])->name('users.update');
Route::delete(uri: '/users/{user}', action:[UserController::class,'destroy'])->name('users.destroy');
