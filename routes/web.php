<?php

use Geffest\Quotes\Controllers\RandomQuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/quote', [RandomQuoteController::class, 'index']);
