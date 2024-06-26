<?php

use App\Http\Controllers\BukutamuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;


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

// Route::get('/', function () {\
//     return view('front.portofolio');
// });
Route::match(['get','post'],'/',[BukutamuController::class,'store']);
Route::get('/back', function () {
    return view('back.index');
});
// Route::get('/login',[BukutamuController::class,'login']);
Route::get('/back',[BukutamuController::class,'index']);
Route::get('/cari',[BukutamuController::class,'cari']);
Route::get('/back/delete/{id}',[BukutamuController::class,'destroy']);
Route::match(['get','post'],'/back/update/{id}',[BukutamuController::class,'update']);
Route::get('/dashboard', function () {
    return view('back.layout.dashboard');
});
// Route::get('/back/bukutamu/delete/{id}',[TamuController::class,'destroy']);
// Route::match(['get','post'],'/back/bukutamu/update/{id}',[TamuController::class,'update']);

// Route::match(['get','post'],'/',[TamuController::class,'store']);
Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', BukutamuController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});
