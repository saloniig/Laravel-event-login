<?php

route::get('/', function () {
    return view('regis');
});

Route::post('/Postsaction','Admin\RegistrationFormController@store');


//route::resource('posts','RegistrationFormController');
//Route::post('/Postsaction','Admin\RegistrationFormController@store');
////Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    //Route::delete('registration-forms/destroy', 'RegistrationFormController@massDestroy')->name('registration-forms.massDestroy');
//Route::resource('registration-forms','RegistrationFormController');
//Route::post('/Postsaction','Admin\RegistrationFormController@store');
//});


Route::redirect('/login', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Registration Forms
    Route::delete('registration-forms/destroy', 'RegistrationFormController@massDestroy')->name('registration-forms.massDestroy');
    Route::resource('registration-forms', 'RegistrationFormController');

    // Attendances
    Route::delete('attendances/destroy', 'AttendanceController@massDestroy')->name('attendances.massDestroy');
    Route::resource('attendances', 'AttendanceController');
});
