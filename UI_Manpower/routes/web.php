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

//For Cms
Route::get('/ClientData', function () {
    return view('cms/ClientData');
});
Route::get('/Clientprofile', function () {
    return view('cms/Clientprofile');
});

Route::get('/WorkersData', function () {
    return view('cms/WorkersData');
});

Route::get('/ApplicationData', function () {
    return view('cms/ApplicationData');
});

Route::get('/Data_Management', function () {
    return view('cms/Data_Management');
});
