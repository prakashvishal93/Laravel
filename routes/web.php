<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home');
});

Route::get('/read-articles', function () {
    return view('read');
});

Route::get('write-article', function () {
    return view('write');
});

Route::get('artilces',[Controller::class,'articles']);
Route::post('/store-article', [ArticleController::class, 'store'])->name('store.article');
Route::get('/read-articles', [ArticleController::class, 'showArticles']);
Route::delete('/articles/{id}', [ArticleController::class, 'delete'])->name('articles.delete');
