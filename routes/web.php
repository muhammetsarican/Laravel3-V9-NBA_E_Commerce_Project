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

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin_index')->middleware([\App\Http\Middleware\Authenticate::class]);

Route::get('/allproducts', [\App\Http\Controllers\HomeController::class, 'allproducts'])->name('allproducts');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/cart', [\App\Http\Controllers\HomeController::class, 'cart'])->name('shopping_cart');
Route::get('/blog', [\App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/productdetail/{id}', [\App\Http\Controllers\HomeController::class, 'productdetail'])->name('productdetail');
Route::get('/product/{id}', [\App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/allproduct', [\App\Http\Controllers\HomeController::class, 'allproduct'])->name('allproduct');



Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('all_logout');
Route::get('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user_login');
Route::post('/user/logincheck2', [\App\Http\Controllers\UserController::class, 'userlogincheck'])->name('user_logincheck2');

Route::get('/user/register', [\App\Http\Controllers\UserController::class, 'register'])->name('user_register');
Route::post('/user/register/add', [\App\Http\Controllers\UserController::class, 'add'])->name('user_register_add');
Route::post('/user/logincheck', [\App\Http\Controllers\UserController::class, 'logincheck'])->name('user_logincheck');


Route::get('/admin/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [\App\Http\Controllers\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [\App\Http\Controllers\HomeController::class, 'adminlogout'])->name('admin_logout');

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/myprofile', [\App\Http\Controllers\UserController::class, 'index'])->name('user_profile');
    Route::get('/myreviews', [\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/deletemyreview/{id}', [\App\Http\Controllers\UserController::class, 'destroymyreview'])->name('destroymyreview');

});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
//    Route::get('/profile',[\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');
    //Shopcart
    Route::prefix('shopcart')->group(function () {
        Route::get('/', [\App\Http\Controllers\ShopcartController::class, 'index'])->name('admin_shopcart');
        Route::get('create', [\App\Http\Controllers\ShopcartController::class, 'create'])->name('admin_shopcart_add1');
        Route::post('store/{id}', [\App\Http\Controllers\ShopcartController::class, 'store'])->name('admin_shopcart_add');
        Route::get('edit/{id}', [\App\Http\Controllers\ShopcartController::class, 'edit'])->name('admin_shopcart_edit');
        Route::post('update/{id}', [\App\Http\Controllers\ShopcartController::class, 'update'])->name('admin_shopcart_update');
        Route::get('delete/{id}', [\App\Http\Controllers\ShopcartController::class, 'destroy'])->name('admin_shopcart_delete');
        Route::get('show', [\App\Http\Controllers\ShopcartController::class, 'show'])->name('admin_shopcart_show');
    });
    //Order
    Route::prefix('order')->group(function () {
        Route::get('/', [\App\Http\Controllers\OrderController::class, 'index'])->name('user_order');
        Route::post('create', [\App\Http\Controllers\OrderController::class, 'create'])->name('user_order_add');
        Route::post('store/{id}', [\App\Http\Controllers\OrderController::class, 'store'])->name('user_order_store');
        Route::get('edit/{id}', [\App\Http\Controllers\OrderController::class, 'edit'])->name('user_order_edit');
        Route::post('update/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->name('user_order_update');
        Route::get('delete/{id}', [\App\Http\Controllers\OrderController::class, 'destroy'])->name('user_order_delete');
        Route::get('show', [\App\Http\Controllers\OrderController::class, 'show'])->name('user_order_show');
    });
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin_home');
        //Category
        Route::prefix('category')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
            Route::get('add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
            Route::post('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
            Route::get('show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
        });
        //Product
        Route::prefix('product')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_product');
            Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
        });
        //Order
        Route::prefix('order')->group(function () {
            Route::get('/{status}', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin_order');
            Route::get('create/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'create'])->name('admin_order_add');
            Route::post('store/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'store'])->name('admin_order_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('admin_order_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin_order_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('admin_order_delete');
            Route::get('show', [\App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin_order_show');
        });
        //User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
            Route::get('create/{id}', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store/{id}', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');

            Route::get('role/{id}', [\App\Http\Controllers\Admin\UserController::class, 'userrole'])->name('user_role');
            Route::post('role/store/{id}', [\App\Http\Controllers\Admin\UserController::class, 'userrolesstore'])->name('user_role_add');
            Route::get('role/delete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'userrolesdelete'])->name('user_role_delete');

        });
        //Image
        Route::prefix('image')->group(function () {
            Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id},{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });
    });
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
