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

Route::get('/jobs', function () {
    return view('jobs');
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

Route::get('/application', function () {
    return view('cms/application');
});

Route::get('/Data_Management', function () {
    return view('cms/Data_Management');
});

Route::get('/home', function () {
    return view('cms/home');
});

Route::get('/aboutus', function () {
    return view('cms/aboutus');
});

Route::get('/job', function () {
    return view('cms/job');
});

Route::get('/joblisting', function () {
    return view('cms/joblisting');
});

Route::get('/News', function () {
    return view('cms/News');
});

Route::get('/Newslisting', function () {
    return view('cms/Newslisting');
});

Route::get('/CU', function () {
    return view('cms/CU');
});

Route::get('/CardsA', function () {
    return view('cms/CardsA');
});

Route::get('/CardsT', function () {
    return view('cms/CardsT');
});

Route::get('/CardsS', function () {
    return view('cms/CardsS');
});

Route::get('/CardsSP', function () {
    return view('cms/CardsSP');
});

Route::get('/Partner', function () {
    return view('cms/partner');
});

Route::get('/Value', function () {
    return view('cms/value');
});

Route::get('/Crewnnect', function () {
    return view('cms/Crewnnect');
});