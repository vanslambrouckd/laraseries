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

Route::get('/', 'SeriesController@index');

/*
 * series
 * routes moeten naam hebben voor breadcrumb plugin
 */
Route::get('series', [
        'as' => 'home',
        'uses' => 'SeriesController@index'
    ]
);

Route::get('series/create', 'SeriesController@create');
Route::post('series', 'SeriesController@store');
Route::get('series/{series}', [
        'as' => 'series_detail',
        'uses' => 'SeriesController@show'
    ]
);
Route::get('series/{id}/edit', 'SeriesController@edit');
Route::delete('series/{id}', 'SeriesController@destroy');
Route::patch('series/{id}', 'SeriesController@update');

Route::get('series/{id}/actors', [
    'as' => 'series_actors',
    'uses' => 'SeriesController@show_actors'
]);
Route::get('series/{serie_id}/actors/{id}', 'SeriesController@show_actor');

/*
 * actors
 */
Route::get('actors', 'ActorsController@index');
Route::get('actors/{id}/edit', 'ActorsController@edit');
Route::patch('actors/{id}', 'ActorsController@update');
Route::get('actors/{slug}', 'ActorsController@show');

Route::get('home', 'HomeController@index');

/*
 * authentication
 */
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