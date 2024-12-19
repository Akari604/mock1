<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FavoriteController; 

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

Route::middleware('auth')->group(function () {
    Route::get('/',[ItemController::class, 'index']);
    Route::get('/mypage',[ItemController::class, 'store']);
    Route::post('/mypage',[ItemController::class, 'create']);
    Route::get('/mypage/profile',[ItemController::class, 'editProfile']);
    Route::post('/mypage/profile',[ItemController::class, 'updateProfile']);
    Route::get('/item/{item_id}',[ItemController::class, 'getDetail']);
    Route::get('/item/{item_id}/like',[FavoriteController::class, 'likeStore']);
    Route::post('/item/{item_id}/unlike',[FavoriteController::class, 'unlike']);
    Route::get('/purchase/{item_id}',[ItemController::class, 'getPurchase']);
    Route::get('/purchase/address/{item_id}',[ItemController::class, 'getAddress']);
    Route::get('/sell',[ItemController::class, 'getSell']);

    Route::post('/item/{comment_id}/comments', [CommentController::class, 'store']);
    Route::get('/comments/{comment_id}', [CommentController::class, 'destroy']);
});

Route::get('/',[ItemController::class, 'index']);
Route::get('/item/{item_id}',[ItemController::class, 'getDetail']);
Route::post('/item/{item_id}',[ItemController::class, 'getLike']);




