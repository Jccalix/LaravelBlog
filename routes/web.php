<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function (Request $request) {
    dd($request->all());
});

Route::put('/{id}', function (Request $request, $id) {
    return $id;
});