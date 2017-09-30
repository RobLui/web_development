<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// --------HOME--------
// --------------------
Route::get('/home', 'HomeController@index')
    ->name('home')
    ;

// --------COMPETITION--------
// ---------------------------
Route::get('competition', 'CompetitionController@index')
    ->name('competition')
    ;

// --------QUESTIONS--------
// -------------------------
Route::get('competition/questions', 'QuestionController@index')
    ->name('showQ')
    ;
Route::get('competition/questions/create', 'QuestionController@create')
    ->name('createQ')
    ;
Route::get('competition/questions/edit/{id}', 'QuestionController@edit')
    ->name('editQ')
    ;

// --------REGISTRATIONS--------
// -----------------------------
Route::get('competition/registration', 'RegistrationController@index')
    ->name('registration')
    ;
Route::post('competition/registration', 'RegistrationController@create')
    ->name('newregistration')
    ;

// --------PARTICIPANTS--------
// ----------------------------
Route::get('competition/participants', 'ParticipantController@index')
    ->name('participants')
    ;




