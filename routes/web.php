<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OptionController;

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

Route::get('/', [IndexController::class, 'welcome'])->name('welcome');
Route::get('/product/{slug}', [IndexController::class, 'showProduct'])->name('product');
Route::get('/catalog/{slug}', [IndexController::class, 'showCategory'])->name('category');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

Route::post('/order-create', [IndexController::class, 'addOrder'])->name('add-order');

Route::get('/sitemap.xml', [IndexController::class, 'sitemap'])->name('sitemap');


require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/posts',PostController::class);
    Route::resource('/users',UserController::class);
    Route::resource('/question_answers',QuestionAnswerController::class);
    Route::resource('/orders',OrderController::class);
    Route::resource('/services',ServiceController::class);
    Route::resource('/option',OptionController::class);

});
