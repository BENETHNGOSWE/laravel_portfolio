<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

    Route::get('/', [HomeController::class, 'homepage'])->name('homepage.homepage');
    Route::post('/storeemail', [HomeController::class, 'storeemail'])->name('homepage.homepage');
    Route::get('/welcome', [HomeController::class, 'homepage_method'])->name('website.index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('index');
    Route::get('/create', [HomeController::class, 'create'])->name('createproject.create');
    Route::post('/store', [HomeController::class, 'store'])->name('createproject.store');
    Route::put('/projects/update/{project}', [HomeController::class, 'update'])->name('projects.update');
    Route::delete('/projects/destroy/{project}', [HomeController::class, 'destroy'])->name('projects.destroy');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
