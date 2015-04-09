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

Route::get('/', 'HomeController@staticHome');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
//'before' => 'auth' : filter function
//'middleware' => 'foo|bar' :  Has Foo And Bar Middleware
//'namespace' => admin  :  Controllers Within The "App\Http\Controllers\Admin" Namespace
Route::group(array('prefix' => 'layout'), function () {

    Route::get('/homepage', array('as' => 'homepage','uses' => 'HomeController@staticHome'));

    Route::get('/error', array('as' => 'error','uses' => 'HomeController@error'));

    Route::get('/company', array('as' => 'company','uses' => 'HomeController@staticCompany'));

    Route::get('/services', array('as' => 'services','uses' => 'HomeController@staticServices'));

    Route::get('/industries', array('as' => 'industries','uses' => 'HomeController@staticIndustries'));

    Route::get('/equiment', array('as' => 'equiment','uses' => 'HomeController@staticEquiment'));

    Route::get('/location', array('as' => 'location','uses' => 'HomeController@staticLocation'));
});
