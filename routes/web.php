<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/api/sectors', 'SectorController');
Route::apiResource('/api/proveedors', 'ProveedorController');

Route::get('/', function () {
    return view('welcome');
});

