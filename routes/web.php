<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $comics = config('db_comics');

    $actions = config('db_actions');

    return view('characters', compact('comics', 'actions'));
})->name('characters');

Route::get('/comics', function () {

    $comics = config('db_comics');

    $actions = config('db_actions');
    return view('comics', compact('comics', 'actions'));
})->name('comics');
