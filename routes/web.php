<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ajak');
});
Route::post('/pilihan', function (illuminate\Http\Request $request) {
    return view('pilihan');
});
Route::post('/struk', function (Illuminate\Http\Request $request) {
    return view('struk', ['data' => $request->all()]);
});
