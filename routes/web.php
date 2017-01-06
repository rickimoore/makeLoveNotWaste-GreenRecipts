<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/client/purchases', function () {
    return view('client-purchases');
});

Route::get('/client/statistics', function () {
    return view('client-statistics');
});

Route::get('/client/item/{id}', function ($id) {
    return view('item', ['item_id' => $id]);
});

Route::get('/purchases', function () {
    return view('purchases');
});

Route::get('/new-receipt', function () {
    return view('recipts');
});

Route::get('/purchases/{id}/{date}', function ($id, $date) {
    return view('purchase-detail', ['client' => $id, 'date' => $date]);
});

Route::get('/statistics', function () {
    return view('statistics');
});
