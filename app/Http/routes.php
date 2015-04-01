<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'SeriesController@index');
/*
 * routes moeten naam hebben voor breadcrumb plugin
 */
Route::get('/', [
        'as' => 'home',
        'uses' => 'SeriesController@index'
    ]
);

Route::get('/series/{id}', [
        'as' => 'series_detail',
        'uses' => 'SeriesController@show'
    ]
);
Route::get('/series/{id}/actors', [
    'as' => 'series_actors',
    'uses' => 'SeriesController@show_actors'
]);

Route::get('/actors', 'ActorsController@index');
Route::get('/actors/{id}', 'ActorsController@show');

Route::get('home', 'HomeController@index');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
// Display all SQL executed in Eloquent
Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});
*/