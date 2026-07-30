<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('accueil');
});




route::get('/register', [AuthController::class, 'showSignUp'])->name('register');
route::post('/register', [AuthController::class, 'SignUp'])->name('SignUp');


route::get('/login', [AuthController::class, 'showFormLogin'])->name('Login');
route::post('/login', [AuthController::class, 'login'])->name('SignIn');


route::get('/dashboard',function(){return view('dashboard');})->name('dashboard')->middleware('auth');
route::get('/dashboard',function(){return view('dashboard');})->name('dashboard')->middleware('auth');


route::get('/listeAll', [TeamController::class, 'index'])->name('listeAll')->middleware('auth');

route::get('/listeAllgame', [GameController::class, 'index'])->name('listeAllgame')->middleware('auth');

//deconnection
route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//route pour importation

Route::get('/import-teams', [TeamController::class, 'syncApi']);
Route::get('/import-games', [GameController::class, 'syncApiGame']);