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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home_index');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/allproducts', [\App\Http\Controllers\HomeController::class, 'allproducts'])->name('allproducts');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('all_logout');
Route::get('/user_login', [\App\Http\Controllers\UserController::class, 'login'])->name('user_login');
Route::get('/user_register', [\App\Http\Controllers\UserController::class, 'register'])->name('user_register');
Route::post('/user/register/add', [\App\Http\Controllers\UserController::class, 'add'])->name('user_register_add');
Route::post('/user/logincheck', [\App\Http\Controllers\UserController::class, 'logincheck'])->name('user_logincheck');


Route::get('/admin', function () {
    return view('admin.index');
})->name('admin_index')->middleware([\App\Http\Middleware\Authenticate::class]);

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/myprofile', [\App\Http\Controllers\UserController::class, 'index'])->name('user_profile');
    Route::get('/myreviews', [\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/deletemyreview/{id}', [\App\Http\Controllers\UserController::class, 'destroymyreview'])->name('destroymyreview');

});




//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/', function () {
//        return view('home.index');
//    })->name('dashboard');
//});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');
