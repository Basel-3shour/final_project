<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserControllerLogin;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;



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

Auth::routes();
Route::get('/master', [StoreController::class, 'master'])->name('master');
Route::get('/', [StoreController::class, 'master'])->name('master');



Route::get('/login_new', [UserControllerLogin::class, 'loginRegister']);
Route::post('/login', [UserControllerLogin::class, 'login']);
Route::post('/register',[UserControllerLogin::class,'register']);

Route::get('/index', [UserController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/admin/profile', [UserController::class, 'showAdminProfile'])->name('show.admin.profile');;
Route::post('/admin/update/profile/{id}',[UserController::class,'updateProfile']);

Route::get('/admin/users/show', [UserController::class, 'showUser'])->name('show.users');;
Route::get('admin/users/edit/{id}',[UserController::class,'edit']);
Route::post('admin/users/update/{id}',[UserController::class,'update']);
Route::get('admin/users/delete/{id}',[UserController::class,'destroy']);
Route::get('home1',[UserController::class,'redirect'])->name('user.redirect');


Route::get('/admin/product/showaddproduct',[ProductController::class,'show_add_form']);

Route::post('/admin/product/addproduct',[ProductController::class,'addProduct']);
Route::get('/categories',[ProductController::class,'show_categories'])->name('show.allcategories');
Route::get('product{id}',[ProductController::class,'show_product'])->name('show.product');

Route::post('addtocart/{id}',[ProductController::class,'addToCart'])->name('product.addToCart');
Route::post('buy/{id}',[ProductController::class,'buyProduct'])->name('product.addToCart');




Route::get('/admin/products/show', [ProductController::class, 'showAllProducts'])->name('show.products');
Route::get('admin/products/edit/{id}',[ProductController::class,'edit']);
Route::post('admin/products/update/{id}',[ProductController::class,'update']);
Route::get('admin/products/delete/{id}',[ProductController::class,'destroy']);





Route::get('/admin/category/showaddcategory',[CategoryController::class,'show_add_form']);
Route::post('/admin/category/addcategory',[CategoryController::class,'addCategory']);

Route::get('/admin/categories/show', [CategoryController::class, 'showAllCategories'])->name('show.categories');
Route::get('admin/categories/edit/{id}',[CategoryController::class,'edit']);
Route::post('admin/categories/update/{id}',[CategoryController::class,'update']);
Route::get('admin/categories/delete/{id}',[CategoryController::class,'destroy']);

Route::get('contactus',[StoreController::class,'contact_us']);
Route::get('about',[StoreController::class,'about']);

Route::get('catagoty/{id}',[CategoryController::class,'showProductCatagory']);
Route::get('showcart',[StoreController::class,'showcart'])->name('showcart');
Route::post('/addfeedback',[StoreController::class,'addFeedback']);

Route::get('showcart/edit/{id}',[CartController::class,'edit']);
Route::post('showcart/update/{id}',[CartController::class,'update']);
Route::get('showcart/delete/{id}',[CartController::class,'destroy']);
Route::get('/admin/massage', [CartController::class, 'showAllMessages'])->name('show.categories');
