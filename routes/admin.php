<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\user;


// Route::get('user', 'user@index');

Route::get('/', function(){
    return view('home');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
