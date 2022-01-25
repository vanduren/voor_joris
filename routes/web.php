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

Route::get('/', function () {
    return view('index');
})->name('root');

Route::get('/twee', function () {
    return view('twee');
})->name('twee');

Route::get('/twee_form', function () {
    return view('twee_form');
})->name('twee_form');

Route::post('/twee', function(){
    dd(request()->all());
})->name('twee_post');
