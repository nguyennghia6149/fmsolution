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

    Route::get('/company/about-us', array('as' => 'about-us','uses' => 'HomeController@staticAboutus'));

    Route::get('/company/contact', array('as' => 'contact','uses' => 'HomeController@staticContact'));

    Route::get('/company/testimonials', array('as' => 'testimonials','uses' => 'HomeController@staticTestimonials'));
    
    Route::get('/company/location', array('as' => 'location','uses' => 'HomeController@staticLocation'));

    Route::get('/services', array('as' => 'services','uses' => 'HomeController@staticServices'));

    Route::get('/industries', array('as' => 'industries','uses' => 'HomeController@staticIndustries'));

    Route::get('/equipment', array('as' => 'equipment','uses' => 'HomeController@staticEquipment'));

    Route::get('/portfolio', array('as' => 'portfolio','uses' => 'HomeController@staticPortfolio'));
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', array('as' => 'admin_dashboard'));

    Route::get('/boxes', array('as' => 'admin_boxes'));

    Route::get('/equipments', array('as' => 'admin_equipments'));

    Route::get('/emailpatterns', array('as' => 'admin_email_patterns'));

    Route::get('/testimonials', array('as' => 'admin_testimonials'));

    Route::get('/clients', array('as' => 'admin_clients'));

    Route::get('/portfolios', array('as' => 'admin_portfolios'));

    Route::get('/settings', array('as' => 'admin_settings'));

    Route::get('/error', array('as' => 'admin_error'));

    Route::controllers([
        '/dashboard' => 'DashboardController',
        '/boxes' => 'BoxesController',
        '/equipments' => 'EquipmentsController',
        '/emailpatterns' => 'EmailpatternsController',
        '/testimonials' => 'TestimonialsController',
        '/clients' => 'ClientsController',
        '/portfolios' => 'PortfoliosController',
        '/settings' => 'SettingsController',
    ]);
});

