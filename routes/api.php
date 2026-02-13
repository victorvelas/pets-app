<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    var_dump(123);exit;
    return $request->user();
})->middleware('auth:sanctum');
