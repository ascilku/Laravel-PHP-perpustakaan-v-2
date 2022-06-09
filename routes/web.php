<?php

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


//akses roles
Route::get('/login', [App\Http\Controllers\akses_roles\C_Akses::class, 'index'])->name('login');

Route::post('/login', [App\Http\Controllers\akses_roles\C_Akses::class, 'loginQuery'])->name('loginQuery');
Route::get('/login-logout' , [App\Http\Controllers\akses_roles\C_Akses::class, 'loginLogout'])->name('login-logout');
Route::post('/ubah-password' , [App\Http\Controllers\akses_roles\C_Akses::class, 'loginUbahPass'])->name('ubah-password');

//dashboard panel 
Route::get('/', [App\Http\Controllers\akses_roles\C_Dashboard::class, 'index'])->name('dashboard-panel');

//users
Route::get('/user/{key}', [App\Http\Controllers\user\C_User::class, 'index'])->name('user');
Route::post('/user', [App\Http\Controllers\user\C_User::class, 'userPost'])->name('user-post');
Route::get('/user-hapus', [App\Http\Controllers\user\C_User::class, 'userDelete'])->name('user_hapus');

//buku
Route::get('/buku/{key}', [App\Http\Controllers\buku\C_Buku::class, 'index'])->name('buku');
Route::get('/buku_hapus', [App\Http\Controllers\buku\C_Buku::class, 'bukuDelete'])->name('buku_hapus');
Route::post('/buku-post', [App\Http\Controllers\buku\C_Buku::class, 'bukuPost'])->name('buku-post');

//peminjaman
Route::post('/pinjam-post', [App\Http\Controllers\peminjaman\Peminjaman::class, 'bukuPostPinjam'])->name('pinjam-post');
Route::get('/pinjam', [App\Http\Controllers\peminjaman\Peminjaman::class, 'kembaliPinjam'])->name('pinjam');

//Pengarang
Route::get('/pengarang/{key}', [App\Http\Controllers\pengarang\C_Pengarang::class, 'index'])->name('pengarang');
Route::get('/pengarang_hapus', [App\Http\Controllers\pengarang\C_Pengarang::class, 'pengarangDelete'])->name('pengarang_hapus');
Route::post('/pengarang', [App\Http\Controllers\pengarang\C_Pengarang::class, 'pengarangPost'])->name('pengarang-post');


