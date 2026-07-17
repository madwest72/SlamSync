<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});




route::get('/register', [AuthController::class, 'showSignUp'])->name('register');
route::post('/register', [AuthController::class, 'SignUp'])->name('SignUp');

route::get('/login', [AuthController::class, 'showFormLogin'])->name('Login');
route::post('/login', [AuthController::class, 'login'])->name('SignIn');
route::get('/dashboard',function(){return view('dashboard');})->name('dashboard')->middleware('auth');
route::get('/dashboard',function(){return view('dashboard');})->name('dashboard')->middleware('auth');
route::post('/logout', [AuthController::class, 'logout'])->name('logout');