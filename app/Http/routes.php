<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

    Route::get('/home', function () {
        return view('notLogged');
    });

    Route::auth();

    Route::get('/', [
        'middleware' => 'auth',
        'uses' => 'ExerciceController@indexUser'
    ]);

    // ------ Users Routes ------

    Route::post('user/tutorial', [
        'middleware' => 'auth',
        'uses' => 'UserController@tutorialDone'
    ]);

    Route::get('exercice/get/{id}', [
        'middleware' => 'auth',
        'uses' => 'ExerciceController@display'
    ]);

    Route::get('exercice/success/{id}', [
        'middleware' => 'auth',
        'uses' => 'UserController@progressUp',
    ]);

    // ------ Exercice Managing Routes ------

    //Asking for the creating page
    Route::get('/exercice/create', [
        'middleware' => 'admin',
        'uses' => 'ExerciceController@create'
    ]);

    //Posting exercice
    Route::post('/exercice/create', [
        'middleware' => 'admin',
        'uses' => 'ExerciceController@create'
    ]);

    //Seeing all exercices
    Route::get('/exercice/list', [
        'middleware' => 'admin',
        'uses' => 'ExerciceController@index'
    ]);

    //Updating one exercice
    Route::post('/exercice/update', [
        'middleware' => 'admin',
        'uses' => 'ExerciceController@update'
    ]);

    //Delete one exercice
    Route::post('/exercice/delete', [
        'middleware' => 'admin',
        'uses' => 'ExerciceController@delete'
    ]);

    Route::get('/exercice/extra/', [
        'middleware' => 'auth',
        'uses' => 'ExerciceController@extras'
    ]);






});
