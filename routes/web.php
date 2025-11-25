<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* CAN USE PARAMETERS BASE ON THE URI (/teejay) */
// Route::get('/{username}', function ($username) {
//     return 'Hello ' . $username;
// });

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

Route::get('/customers', function () {
    $customers = [
        ["id" => 1, "name" => "Joe Smith", "email" => "joe@gmail.com"],
        ["id" => 2, "name" => "Chris P. Pata", "email" => "chris@gmail.com"]
    ];

    return view('customers.index', ["customers" => $customers]);
});

Route::get('/customers/{id}', function ($id) {
    return view('customers.customer_details', ["id" => $id]);
});