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
Route::group(['middleware'=>'loginAdmin'], function (){
    Route::resource('/admin', 'AdminUserController');
    Route::resource('/category', 'AdminCategoryController');
    Route::resource('/admins', 'AdminaddController');

    Route::resource('/admindash', 'AdminDashboardController');
    Route::resource('/adminFAQ', 'AdminFAQController');
    Route::resource('/gallery', 'AdminpullphotoController');
    Route::resource('/likers', 'LikeprofileController');
});

//Forgot password
Route::resource('/adminLoginF', 'AdminForgotPasswordController');


Route::resource('/adminLogin', 'AdminLoginController');

Route::get('/updates/{id}', ['as'=>'updates.id', 'uses'=>'AdminCategoryController@posts']);


// External Pages
Route::get('/contact', function (){
    return view('public.contact');
});

Route::get('/about', function (){
    return view('public.about');
});

Route::resource('/ask', 'FAQController');
Route::resource('/FAQ', 'FAQController@create');
Route::resource('/reply', 'ReplyController');
