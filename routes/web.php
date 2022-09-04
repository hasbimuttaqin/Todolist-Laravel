<?php


use App\Http\Controllers\ListController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/list', [ListController::class, 'index'])->middleware('auth');

Route::get('/tambahtugas', [ListController::class, 'tambah'])->middleware('auth');
Route::post('/inserttugas', [ListController::class, 'insert']);

Route::get('/tampiltugas/{id}', [ListController::class, 'tampiltugas']);
Route::post('/updatetugas/{id}', [ListController::class, 'updatetugas']);

Route::get('/delete/{id}', [ListController::class, 'delete']);



Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses']);


Route::get('/register', [RegisterController::class, 'register']);
Route::post('/registeruser', [RegisterController::class, 'registeruser']);

Route::get('/logout', [LoginController::class, 'logout']);
