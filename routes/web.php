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

Route::get('/players', function () {
    $players = [
        ["id" => 304674585, "ign" => "Player1"],
        ["id" => 284695734, "ign" => "Chris P. Pata"]
    ];

    return view('players.index', ["players" => $players]);
});

Route::get('/player/{id}', function ($id) {
    $players = [
        ["id" => 304674585, "ign" => "Player1", "current_rank" => "Mythical Honor", "highest_rank" => "Mythical Immortal"],
        ["id" => 284695734, "ign" => "Chris P. Pata", "current_rank" => "Mythical Honor", "highest_rank" => "Mythical Immortal"]
    ];

    $player = findArrayByKey($players, $id);
    return view('players.player_details', ["player" => $player]);
});