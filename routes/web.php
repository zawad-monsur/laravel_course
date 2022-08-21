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

Route::view('/', 'welcome');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('customers', function () {

    $customers = [
        'Zawad',
        'Monsur',
        'K.M.',
    ];


    return view('internals.customers', [
        'customers' => $customers,
    ]);
});
