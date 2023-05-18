<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceTouristController;


Route::controller(PlaceTouristController::class)->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/places/{place_id}', 'show_info')->name('show_info');

});

?>
