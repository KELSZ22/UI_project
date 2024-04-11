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

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/applyNow', function () {
    return view('applyNow');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/Data_Management', function () {
    return view('cms/Data_Management');
});