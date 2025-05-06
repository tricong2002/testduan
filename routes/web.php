<?php

use App\Http\Controllers\Questions;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;


Route::get('/', [Questions::class, "index"]);
Route::get('/details/{id}', [Questions::class, "details"])->name('question.details');
Route::post('/checkan/{id}', [Questions::class, 'checkAnswer'])->name('checkan');
