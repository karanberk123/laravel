<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/signin', [AuthController::class, 'signin']);
Route::get('/signout', [AuthController::class, 'signout']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/registerAjax', [AuthController::class, 'registerAjax']);
Route::post('/signinAjax', [AuthController::class, 'signinAjax']);

Route::get('/blog', [BlogController::class, 'blog']);
Route::post('/blogAjax', [BlogController::class, 'blogAjax']);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/createblog', [AdminController::class, 'createBlog']);
Route::post('/admin/saveBlog', [AdminController::class, 'saveBlog']);
Route::post('/admin/createPostBlog', [AdminController::class, 'createPostBlog']);