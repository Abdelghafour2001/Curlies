<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;

Route::get('/admin/comments', [AdminController::class,'comments']);
Route::get('/admin/comments/{id}/delete',[AdminController::class,'delete_comment']);
Route::get('/admin/users', [AdminController::class,'users']);
Route::get('/admin/users/{id}/delete',[AdminController::class,'delete_user']);
Route::get('/', [HomeController::class,'index']);
Route::get('/account', [HomeController::class,'account']);
Route::get('/astuces', [HomeController::class,'astuces']);
Route::get('/curls101', [HomeController::class,'curls101']);
Route::get('/routine', [HomeController::class,'routine']);
Route::get('/popular', [HomeController::class,'popular']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/favoris', [HomeController::class,'favoris']);
Route::get('/prods', [HomeController::class,'prods']);
Route::get('/detail/{id}', [HomeController::class,'detail']);
Route::post('/save-comment/{id}', [HomeController::class,'save_comment']);
Route::get('/detail/{id}/delete-comment/{cid}', [HomeController::class,'delete_comment']);
Route::get('/like/{id}', [HomeController::class,'like']);
Route::get('/admin/login', [AdminController::class,'login']);
Route::post('/admin/login', [AdminController::class,'submit_login']);
Route::get('/admin/logout', [AdminController::class,'logout']);
Route::get('/admin/dashboard', [AdminController::class,'dashboard']);
Route::resource('admin/category',CategoryController::class);
Route::get('/admin/category/{id}/delete',[CategoryController::class,'destroy']);
Route::resource('admin/post',PostController::class);
Route::get('/admin/post/{id}/delete',[PostController::class,'destroy']);
//Route::get('/register', [RegisterController::class,'register']);
//Route::post('/register', [RegisterController::class,'submit_register']);
//Route::get('/userlogin', [UserLoginController::class,'userlogin']);
//Route::post('/userlogin', [UserLoginController::class,'submit_userlogin']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'save'])->name('contact.store');