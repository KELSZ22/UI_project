<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ClientManager;

Route::get('/', function () {
    return view('login');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/Contactus', function () {
    return view('Contactus');
});


Route::get('/aboutus', function () {
    return view('aboutUs');
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
})->name('home');

Route::get('/Aboutus', function () {
    return view('cms/Aboutus');
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

Route::get('/login', [AuthManager::class, 'login'])->name(name:'login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name(name:'login.post');

Route::get('/registration',[AuthManager::class, 'registration'])->name(name:'registration');
Route::post('/registration',[AuthManager::class, 'registrationPost'])->name(name:'registration.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name(name:'logout');

//for application dashboard

Route::get('/applicationdash', function () {
    return view('applicantDashboard/applicationdash');
});

Route::get('/applicantlogin', function () {
    return view('applicantDashboard/applicantlogin');
});


//for Client
Route::get('/clientregistration', function () {
    return view('Clients/clientregistration');
});

Route::get('/clientlogin', [ClientManager::class, 'clientlogin'])->name(name:'clientlogin');
Route::post('/clientlogin', [ClientManager::class, 'clientloginPost'])->name(name:'clientlogin.post');

Route::get('/clientregistration',[ClientManager::class, 'clientregistration'])->name(name:'clientregistration');
Route::post('/clientregistration',[ClientManager::class, 'clientregistrationPost'])->name(name:'clientregistration.post');

Route::get('/clientlogout', [ClientManager::class, 'clientlogout'])->name(name:'clientlogout');


