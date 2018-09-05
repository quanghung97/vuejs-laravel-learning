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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/life-cycle', function () {
    return view('lifecycle');
});

Route::get('/force-update', function () {
    return view('forceupdate');
});

Route::get('/binding-html', function () {
    return view('bindinghtml');
});

Route::get('/v-model-binding', function () {
    return view('vmodelbinding');
});

Route::get('/api-calling', function () {
    return view('apicalling');
});

Route::resource('products', 'ProductController');
