<?php


Route::get('/', function () {
    return view('public.index');
});


// Guest
Route::resource('/reg', 'UserRegistrationController');

Route::resource('/login', 'LoginController');



// Loggedin User
Route::group(['middleware'=>'login'], function (){

    Route::resource('/loggedin/userHome', 'PublicHomeController');

    Route::resource('/timeline', 'TimelineController');

});




// Admin
Route::resource('/admin', 'AdminUserController');
Route::resource('/category', 'AdminCategoryController');
Route::resource('/admins', 'AdminaddController');
Route::resource('/adminLogin', 'AdminLoginController');
Route::resource('/adminLoginF', 'AdminForgotPasswordController');


Route::get('/updates/{id}', ['as'=>'updates.id', 'uses'=>'AdminCategoryController@posts']);

