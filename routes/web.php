<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/prodotti', function () {
    return view('products');
})->name('prodotti');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contatti');

Route::get('/prodotti/{id}', function ($id) {
    $data = [
        'id' => $id
    ];
    return view('prodotto' , $data);
})->name('prodotti.show');
