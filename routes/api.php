<?php

use App\Http\Controllers\RajaOngkirController;
use Illuminate\Support\Facades\Route;



Route::get('/search/provinces', [RajaOngkirController::class, 'provinceIndex']);
Route::get('/search/cities', [RajaOngkirController::class, 'cityIndex']);
