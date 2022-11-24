<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\BusursController;
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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\PanahsController;
use App\Http\Controllers\PetaksController;
use App\Http\Controllers\ResortsController;
use App\Http\Controllers\SpoorsController;

//Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
Route::get('/', [LoginController::class, 'default'])->middleware('guest')->name('default');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/aset', [AsetController::class, 'aset'])->name('aset');
	Route::post('/aset-store', [AsetController::class, 'store'])->name('aset.store');

	Route::get('/admin', [RegisterController::class, 'admin'])->name('admin');
	Route::post('/admin-store', [RegisterController::class, 'admin_store'])->name('admin.store');
	Route::get('/admin-destroy/{id}', [RegisterController::class, 'admin_destroy'])->name('admin.destroy');

	Route::get('/image', [RegisterController::class, 'image'])->name('image');
	Route::post('/orgz', [RegisterController::class, 'orgz'])->name('orgz');

	Route::get('/resort', [ResortsController::class, 'resort'])->name('resort');
	Route::post('/resort-store', [ResortsController::class, 'store'])->name('resort.store');
	Route::post('/resort-destroy', [ResortsController::class, 'destroy'])->name('resort.destroy');

	Route::get('/petak/{id}', [PetaksController::class, 'petak'])->name('petak');
	Route::post('/petak-store', [PetaksController::class, 'store'])->name('petak.store');

	Route::get('/petak_busur/{id}', [BusursController::class, 'busur'])->name('busur');
	Route::post('/petak_busur-store', [BusursController::class, 'store'])->name('busur.store');
	
	Route::get('/petak_panah/{id}', [PanahsController::class, 'panah'])->name('panah');
	Route::post('/petak_panah-store', [PanahsController::class, 'store'])->name('panah.store');

	Route::get('/petak_spoor/{id}', [SpoorsController::class, 'spoor'])->name('spoor');
	Route::post('/petak_spoor-store', [SpoorsController::class, 'store'])->name('spoor.store');

	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/about', [PageController::class, 'about'])->name('about');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});