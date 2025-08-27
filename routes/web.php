<?php

use App\Http\Controllers\Moncontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Moncontroller::class,"index"]);
Route::post('/store',[Moncontroller::class,"store"]);
