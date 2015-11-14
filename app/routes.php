<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);

Route::get('local-edition', ['as' => 'localedition.index', 'uses' => 'LocaleditionController@index']);

Route::get('they', ['as' => 'they.index', 'uses' => 'TheyController@index']);

Route::group(array('prefix' => 'people'), function() {

    Route::get('/', ['as' => 'people.index', 'uses' => 'PeopleController@index']);
    Route::get('{person_url_slug}',  ['as' => 'person.show', 'uses' => 'PeopleController@show']);
});
