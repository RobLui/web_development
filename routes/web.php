<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// --------DASHBOARD----------
// ---------------------------
    Route::get('dashboard', 'DashboardController@index')
        ->name('dashboard')
        ->middleware('auth')
    ;

// --------COMPETITION--------
// ---------------------------
    Route::get('competition', 'CompetitionController@index')
    ->name('show_competition')
    ;
    //NEW
    Route::get('competition/create', 'CompetitionController@create')
    ->name('create_competition')
    ->middleware('auth')
    ;
    Route::post('competition/create', 'CompetitionController@create')
    ->name('create_competition')
    ->middleware('auth')
    ;
    //EDIT
    Route::get('competition/edit', 'CompetitionController@edit')
    ->name('edit_competition')
    ->middleware('auth')
    ;
    Route::post('competition/edit', 'CompetitionController@edit')
    ->name('edit_competition')
    ->middleware('auth')
    ;

// --------QUESTIONS--------
// -------------------------
    Route::get('competition/questions', 'QuestionController@index')
    ->name('show_questions')
    ;
    Route::get('competition/questions/create', 'QuestionController@create')
    ->name('create_questions')
    ->middleware('auth')
    ;
    Route::post('competition/questions/create', 'QuestionController@create')
    ->name('create_questions')
    ->middleware('auth')
    ;
    Route::get('competition/questions/edit/{id}', 'QuestionController@edit')
    ->name('edit_questions')
    ->middleware('auth')
    ;
    Route::post('competition/questions/edit/{id}', 'QuestionController@edit')
    ->name('edit_questions')
    ->middleware('auth')
    ;


// --------REGISTRATIONS-------
// ----------------------------
    Route::get('competition/registration', 'RegistrationController@index')
    ->name('registration')
    ;


// --------PARTICIPANTS--------
// ----------------------------
    Route::get('competition/participants', 'ParticipantController@index')
    ->name('show_participants')
    ->middleware('auth')
    ;
    Route::post('competition/participants', 'ParticipantController@create')
    ->name('create_participants')
    ;
    Route::get('competition/participants/edit/{id}', 'ParticipantController@edit')
        ->name('edit_participants')
        ->middleware('auth');
    ;
    Route::post('competition/participants/edit/{id}', 'ParticipantController@edit')
        ->name('edit_participants')
        ->middleware('auth');
    ;

// -----------CONFIG-----------
// ----------------------------
    Route::get('/config', 'ConfigController@index')
        ->name('config')
        ->middleware('auth');
    ;
    Route::get('/config/emailmanager/show', 'ConfigController@show')
        ->name('show_email_manager')
        ->middleware('auth')
    ;
    Route::get('/config/emailmanager/create', 'ConfigController@create')
        ->name('create_email_manager')
        ->middleware('auth')
    ;
    Route::post('/config/emailmanager/create', 'ConfigController@create')
        ->name('create_email_manager')
        ->middleware('auth')
    ;
    Route::get('/config/emailmanager/edit', 'ConfigController@edit')
        ->name('edit_email_manager')
        ->middleware('auth')
    ;
    Route::post('/config/emailmanager/edit', 'ConfigController@edit')
        ->name('edit_email_manager')
        ->middleware('auth')
    ;

// -----------PERIODES---------
// ----------------------------
Route::post('/periods/create', 'PeriodController@create')
    ->name('create_period')
    ->middleware('auth');
;
Route::post('/periods/edit/{id}', 'PeriodController@edit')
    ->name('edit_period')
    ->middleware('auth');
;
Route::get('/periods/edit/{id}', 'PeriodController@edit')
    ->name('edit_period')
    ->middleware('auth');
;

// --------EXCEL------------
// -------------------------
Route::post('competition/participants/excel', 'ParticipantController@DownloadExcel')
    ->name('create_excel')
    ->middleware('auth');
;

// --------SEND MAIL---------
// --------------------------
Route::post('competition/participants/mail', 'ParticipantController@SendMail')
    ->name('send_mail')
    ->middleware('auth');
;

// --------SECRET-----------
// -------------------------
Route::get('/secret', 'QuestionController@index')
    ->name('secret')
;
Route::post('/secret/store', 'QuestionController@store')
    ->name('secret_store')
;
