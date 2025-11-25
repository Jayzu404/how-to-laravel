<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function (){
    return view('auth_pages.login');
});

Route::get('/signup', function () {
    return view('auth_pages.sign_up');
});