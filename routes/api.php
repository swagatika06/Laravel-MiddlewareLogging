<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Middleware\LogRoute;

Route::get('/books', [BookController::class, 'getAllBooks'])->middleware('log.route');
Route::post('/books/', [BookController::class, 'createBook']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
