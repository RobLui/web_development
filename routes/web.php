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

// --------QUESTIONS--------
// -------------------------
    Route::get('competition/prizes', 'PrizeController@index')
    ->name('showP')
    ;
    Route::get('competition/prize/create', 'PrizeController@create')
    ->name('createP')
    ;
    Route::get('competition/prize/edit/{id}', 'PrizeController@edit')
    ->name('editP');

// --------REGISTRATIONS--------
// -----------------------------
    Route::get('competition/registration', 'RegistrationController@index')
    ->name('registration')
    ;


// --------PARTICIPANTS--------
// ----------------------------
    Route::get('competition/participants', 'ParticipantController@index')
    ->name('participants')
    ;
    Route::post('competition/participants', 'ParticipantController@create')
    ->name('participantcreate')
    ;

// --------CONFIG--------
// ----------------------------
Route::get('/config', 'ConfigController@index')
    ->name('config')
;




