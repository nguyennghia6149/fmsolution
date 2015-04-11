<?php

Route::get('/', 'HomeController@staticHome');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(array('prefix' => 'layout'), function () {

    Route::get('/homepage', array('as' => 'homepage','uses' => 'HomeController@staticHome'));

    Route::get('/error', array('as' => 'error','uses' => 'HomeController@error'));

    Route::get('/company', array('as' => 'company','uses' => 'HomeController@staticCompany'));

    Route::get('/services', array('as' => 'services','uses' => 'HomeController@staticServices'));

    Route::get('/industries', array('as' => 'industries','uses' => 'HomeController@staticIndustries'));

    Route::get('/equiment', array('as' => 'equiment','uses' => 'HomeController@staticEquiment'));

    Route::get('/portfolio', array('as' => 'portfolio','uses' => 'HomeController@staticPortfolio'));
});


Route::group(array('prefix' => 'admin', 'namespace' => 'Admin' ), function () {

    Route::get('/dashboard', array('as' => 'admin_dashboard', 'uses' => 'AdminController@staticDashboard'));

    Route::get('/widgets', array('as' => 'admin_widgets', 'uses' => 'AdminController@staticWidgets'));

    Route::get('/charts', array('as' => 'admin_charts', 'uses' => 'AdminController@staticCharts'));

    Route::get('/uielements', array('as' => 'admin_uielements', 'uses' => 'AdminController@staticUielements'));

    Route::get('/forms', array('as' => 'admin_forms', 'uses' => 'AdminController@staticForms'));

    Route::get('/tables', array('as' => 'admin_tables', 'uses' => 'AdminController@staticTables'));

    Route::get('/calendar', array('as' => 'admin_calendar', 'uses' => 'AdminController@staticCalendar'));

    Route::get('/mailbox', array('as' => 'admin_mailbox', 'uses' => 'AdminController@staticMailbox'));

    Route::get('/examples', array('as' => 'admin_examples', 'uses' => 'AdminController@staticExamples'));

    Route::get('/error', array('as' => 'admin_error', 'uses' => 'AdminController@error'));
});
