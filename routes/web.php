<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});




Route::get('/register', function () {
    return view('register');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/predict', function () {
    return view('predict');
});




//<-------------------USER LOGIN -------------->raatraat hoga
Route::get('login',[UserController::class, 'index']);



Route::post('register_post',[UserController::class, 'register'])->name('register.index');
Route::post('login_post',[UserController::class, 'login'])->name('login.index');


Route::get('/dashboard',[UserController::class, 'dashboard']);



//setting
Route::get('setting', [ContactController::class, 'index'])->name('setting.index');
Route::view('admin/setting', 'dashboard.setting')->name('setting');
Route::get('setting/create', [ContactController::class, 'create'])->name('setting.create');
Route::post('setting_post', [ContactController::class, 'store'])->name('setting.store');
Route::get('setting/delete/{id}', [ContactController::class, 'destroy'])->name('setting.delete');



