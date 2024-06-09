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

Route::delete('/{id}', function ($id) {
    return $id;
});

Route::get("/hello", function () {
    return response('<h1>Hello there</h1>', 200);
});

Route::get('/test', function () {
    $test = "Test again";
    return "<h1>" . $test . "</h1>";
});
