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
    ->name('create_competition')
    ;
    Route::post('competition/create', 'CompetitionController@create')
    ->name('create_competition')
    ;
    //EDIT
    Route::get('competition/edit', 'CompetitionController@edit')
    ->name('edit_competition')
    ;
    Route::post('competition/edit', 'CompetitionController@edit')
    ->name('edit_competition')
    ;

// --------QUESTIONS--------
// -------------------------
    Route::get('competition/questions', 'QuestionController@index')
    ->name('show_questions')
    ;
    Route::get('competition/questions/create', 'QuestionController@create')
    ->name('create_questions')
    ;
    Route::post('competition/questions/create', 'QuestionController@create')
    ->name('create_questions')
    ;
    Route::get('competition/questions/edit', 'QuestionController@edit')
    ->name('edit_questions')
    ;
    Route::post('competition/questions/edit', 'QuestionController@edit')
    ->name('edit_questions')
    ;

// --------PRIZES--------
// -------------------------
    Route::get('competition/prizes', 'PrizeController@index')
    ->name('show_prizes')
    ;
    Route::get('competition/prizes/create', 'PrizeController@create')
    ->name('create_prizes')
    ;
    Route::post('competition/prizes/create', 'PrizeController@create')
    ->name('create_prizes')
    ;
    Route::get('competition/prizes/edit/{id}', 'PrizeController@edit')
    ->name('edit_prizes');


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
    ->name('create_participants')
    ;

// --------CONFIG--------
// ----------------------------
Route::get('/config', 'ConfigController@index')
    ->name('config')
;
Route::get('/config/emailmanager/show', 'ConfigController@show')
    ->name('show_email_manager')
;
Route::get('/config/emailmanager/create', 'ConfigController@create')
    ->name('create_email_manager')
;
Route::post('/config/emailmanager/create', 'ConfigController@create')
    ->name('create_email_manager')
;
Route::get('/config/emailmanager/edit', 'ConfigController@edit')
    ->name('edit_email_manager')
;
Route::post('/config/emailmanager/edit', 'ConfigController@edit')
    ->name('edit_email_manager')
;





