<?php


Route::get('/', function () {
    return view('public.index');
});

Route::get('/reg', function () {
    return view('public.registration.registration_user');
});

Route::resource('/reg', 'UserRegistrationController');

Route::resource('/login', 'LoginController');

Route::resource('/loggedin/userHome', 'PublicHomeController');

Route::resource('/timeline', 'TimelineController');