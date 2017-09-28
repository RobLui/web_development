<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/competition', 'CompetitionController@index')->name('competition');
Route::get('/competition/registration', 'RegistrationController@index')->name('registration');



