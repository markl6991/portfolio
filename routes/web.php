<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::get('/', function () {
    return view('pages.home');
});


Route::get('/crypto-data', function () {

    $response = Http::get(
        'https://api.coingecko.com/api/v3/coins/markets',
        [
            'vs_currency' => 'usd',
            'order' => 'market_cap_desc',
            'per_page' => 6,
            'page' => 1,
        ]
    );

    return $response->json();
});

/*
|--------------------------------------------------------------------------
| GitHub API
|--------------------------------------------------------------------------
*/

Route::get('/github-profile', function () {

    $response = Http::get(
        'https://api.github.com/users/markl6991'
    );

    return $response->json();
});

/*
|--------------------------------------------------------------------------
| GitHub Repositories
|--------------------------------------------------------------------------
*/

Route::get('/github-repos', function () {

    $response = Http::get(
        'https://api.github.com/users/markl6991/repos'
    );

    return $response->json();
});

/*
|--------------------------------------------------------------------------
| Weather API
|--------------------------------------------------------------------------
*/

Route::get('/weather', function () {

    $city = request('city', 'Manila');

    $response = Http::get(
        'https://wttr.in/' . $city . '?format=j1'
    );

    return $response->json();
});

/*
|--------------------------------------------------------------------------
| Anime API
|--------------------------------------------------------------------------
*/

Route::get('/anime-trending', function () {

    $response = Http::get(
        'https://api.jikan.moe/v4/top/anime'
    );

    return $response->json();
});