<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/weather/{city}', function(string $city){

    $temp = rand(-20, 35);

    return view('weather', ['city' => $city, 'temp' => $temp]);
});
