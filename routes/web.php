<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// --------DASHBOARD--------
// ---------------------------

Route::get('dashboard', 'DashboardController@index')
    ->name('dashboard')
;

// --------COMPETITION--------
// ---------------------------
    Route::get('competition', 'CompetitionController@index')
    ->name('competition')
    ;
    //NEW
    Route::get('competition/create', 'CompetitionController@create')
    ->name('competitioncreate')
    ;
    Route::post('competition/create', 'CompetitionController@create')
    ->name('competitioncreate')
    ;
    //EDIT
    Route::get('competition/edit', 'CompetitionController@edit')
    ->name('competitionedit')
    ;
    Route::post('competition/edit', 'CompetitionController@edit')
    ->name('competitionedit')
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
    ->name('registrationcreate')
    ;

// --------PARTICIPANTS--------
// ----------------------------
    Route::get('competition/participants', 'ParticipantController@index')
    ->name('participants')
    ;




