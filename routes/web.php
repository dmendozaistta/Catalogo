<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('contra.index');
});


Route::post('/contra', 'App\Http\Controllers\loginController@login')->name('login.login');

