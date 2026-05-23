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