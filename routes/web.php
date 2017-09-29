<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Home
Route::get('/home', 'HomeController@index')->name('home');

// Competition
Route::get('competition', 'CompetitionController@index')->name('competition');
Route::get('competition/registration', 'RegistrationController@index')->name('registration');
Route::post('competition/registration', 'RegistrationController@create')->name('newregistration');

// Participants
Route::get('competition/participants', 'ParticipantController@index')->name('participants');




