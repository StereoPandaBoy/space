<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

route::get('/destination', function () {
    return view('destination');
});

route::get('/crew', function () {
    return view('crew');
});

route::get('/technology', function () {
    return view('technology');
});