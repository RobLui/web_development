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
    ->name('getCompE')
    ;
    Route::post('competition/edit', 'CompetitionController@edit')
    ->name('postCompE')
    ;

// --------QUESTIONS--------
// -------------------------
    Route::get('competition/questions', 'QuestionController@index')
    ->name('showQ')
    ;
    Route::get('competition/questions/create', 'QuestionController@create')
    ->name('getCreateQ')
    ;
    Route::post('competition/questions/create', 'QuestionController@create')
    ->name('postCreateQ')
    ;
    Route::get('competition/questions/edit', 'QuestionController@edit')
    ->name('getEditQ')
    ;
    Route::post('competition/questions/edit', 'QuestionController@edit')
    ->name('postEditQ')
    ;

// --------PRIZES--------
// -------------------------
    Route::get('competition/prizes', 'PrizeController@index')
    ->name('showP')
    ;
    Route::get('competition/prizes/create', 'PrizeController@create')
    ->name('createP')
    ;
    Route::get('competition/prizes/edit/{id}', 'PrizeController@edit')
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
Route::get('/config/emailmanager/show', 'ConfigController@show')
    ->name('showEm')
;
Route::get('/config/emailmanager/create', 'ConfigController@create')
    ->name('createEm')
;
Route::get('/config/emailmanager/edit', 'ConfigController@edit')
    ->name('editEm')
;





