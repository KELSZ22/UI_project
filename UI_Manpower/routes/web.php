<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/Contactus', function () {
    return view('Contactus');
});

Route::get('/login', function () {
    return view('login');
});

<<<<<<< HEAD
Route::get('/aboutus', function () {
    return view('aboutus');
=======
Route::get('/applyNow', function () {
    return view('applyNow');
>>>>>>> 94a551cddb6463ffa8000e1351060d2810340e32
});