<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MessageController;
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

//Route::get('/register', function () {
 //  return view('auth.register');
//});

Route::get('main/', function () {
return view('layouts.main');
});

Route::get('/', function () {
return view('welcome');
})->name('welcome');

Route::get('category/', function () {
return view('dashboard.category');
});

//Route::get('user/', function () {
//return view('dashboard.user');
//});
Route::get('/users', [AdminController::class,'indexUsers'])->name('index.user')->middleware('admin');

//book
Route::get('/books', [BookController::class, 'books'])->name('books')->middleware('auth')->middleware('admin');
Route::get('/addbook', [BookController::class, 'addbook'])->name('addbook');
Route::post('/create-book', [BookController::class, 'createBook'])->name('createbook');
Route::post('/deleteBook/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');

Route::get('rentslog/', function () {
return view('dashboard.rentlog');
});

Route::get('/dashboard',[LoginController::class,'landing'])->name('users')->middleware('user');


//kirim pesan
Route::get('/',[MessageController::class,'index'])->name('index');

Route::post('/',[MessageController::class,'store'])->name('store');

//memanggill register
Route::get('/register',[AuthController::class,'indexRegister'])->name('register');
Route::post('/register',[AuthController::class,'store'])->name('auth.store');
//memanggil login
Route::get('/login',[LoginController::class,'index'])->name('auth.index');
Route::post('/storelogin',[LoginController::class,'login'])->name('auth.login');


Route::get('/edituser/{id}' , [AdminController::class, 'editUser'])->name('editUser');

Route::put('/updateUser/{id}' , [AdminController::class, 'updateUser'])->name('updateUser');
Route::post('/deleteUser/{id}' , [AdminController::class, 'deleteUser'])->name('deleteUser');

Route::get('/dashboard-user', [UserController::class, 'index'])->name('user')->middleware('user');