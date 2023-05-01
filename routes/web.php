<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class,'index']);

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/bookdetail/{id}', [BookController::class,'show']);

Route::get('/category/{id}', [BookController::class,'showCategory']);

Route::get('/publisher',[BookController::class,'showAllPublisher']);
Route::get('/publisherDetail/{id}',[BookController::class,'showPublisher']);

Route::fallback([BookController::class,'index']);
