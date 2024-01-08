<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Mahasiswa;
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
    return view('auth.login');
});


//Route::get('/login',[App\Http\Controllers\LoginController::class,'index'])->name('login');
//Route::post('/login-proses',[App\Http\Controllers\LoginController::class,'login_proses'])->name('login-proses');
//Route::get('/logout',[App\Http\Controllers\LoginController::class,'logout'])->name('logout');

//Route::get('/register', [\App\Http\Controllers\LoginController::class,'register'])->name('register');
//Route::post('/register-proses',[\App\Http\Controllers\LoginController::class,'register_proses'])->name('register-proses');


//Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'] , function(){
    //Route::resource('/user', UserController::class);

    //Route::resource('/book', BookController::class);
    
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
//});

Route::resource('/user', UserController::class);

Route::resource('/book', BookController::class);

Route::resource('/student', StudentController::class);

Route::resource('/teacher', TeacherController::class);

Route::resource('/prodi', ProdiController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





