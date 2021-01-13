<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/quote',
    function () {
        return view('quotes::random');
    }
);
