<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/structure', function () {
    return view('pages.structure');
});

Route::get('/kabinet', function () {
    return view('pages.kabinet');
});

Route::get('/kominfo', function() {
    return view('pages.kabinet.kominfo');
});

Route::get('/pendidikan', function() {
    return view('pages.kabinet.pendidikan');
});
Route::get('/agama', function() {
    return view('pages.kabinet.agama');
});
Route::get('/sosial', function() {
    return view('pages.kabinet.sosial');
});
Route::get('/ekonomi', function() {
    return view('pages.kabinet.ekonomi');
});

// Admin Routes
Route::get('/index', function () {
    return view('admin.index');
});

// Arsip Routes
Route::resource('arsip', ArsipController::class);

// Departement Routes
Route::resource('dept', DeptController::class);

// Prodi Routes
Route::resource('prodi', ProdiController::class);

// Member Routes
Route::resource('member', MemberController::class);

// Authenthication Routes
Route::get('register', [RegisterController::class, 'index']);
Route::post('/register-act', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);

?>