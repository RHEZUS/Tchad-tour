<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrashController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/dashboard/articles/list',[ArticleController::class, 'articleList'])->name('articles');
Route::get('/dashboard/articles/form',[ArticleController::class, 'form'])->name('articleForm');
Route::post('/dashboard/articles/form',[ArticleController::class, 'store'])->name('articleStore');

Route::get('/dashboard/articles/update/{id}',[ArticleController::class, 'edit']);
Route::post('/dashboard/articles/update',[ArticleController::class, 'update'])->name('articleUpdate');

Route::get('/dashboard/packages/list',[PackageController::class, 'packageList'])->name('packages');
Route::get('/dashboard/profiles/list',[ProfileController::class, 'profileList'])->name('profiles');
Route::get('/dashboard/trash',[TrashController::class,'Trash'])->name('trash');

Auth::routes();

Route::get('/blog', [ArticleController::class, 'blog'])->name('blog');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
