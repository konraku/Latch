<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ScraperController;

Route::post('/scrape', [ScraperController::class, 'scrape']);