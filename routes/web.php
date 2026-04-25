<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\GearItemController;

Route::resource('gear-items', GearItemController::class);

Route::get('/ausruestung', function () {
    $gearItems = \App\Models\GearItem::all();
    return view('ausruestung', compact('gearItems'));
})->name('ausruestung');