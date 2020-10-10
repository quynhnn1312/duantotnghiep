<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Router dành cho trang ngoài, bao gồm các trang index, contact,...
|
*/

//Trang chủ, nơi khách đến xem

Route::group([
    'namespace' => 'Frontend',
], function() {
    Route::get('/', 'HomeController@index')->name('get.home.page');
    Route::get('contact', 'ContactController@index')->name('get.contact.page');
    Route::get('about', 'AboutController@index')->name('get.about.page');
    Route::get('course', 'CourseController@index')->name('get.course.page');
    Route::get('blog', 'BlogController@index')->name('get.blog.page');
});

Route::get('register', function() {
    return "Register Page";
})->name('register');

Route::post('register', function() {
    return "Register Page";
});

//Login n Reset Password
Route::group([
    'namespace' => 'Auth',
], function() {
    //Login
    Route::get('login', 'LoginController@loginForm')->name('login');
    Route::post('login', 'LoginController@authenticate')->name('login');

    //Reset Password
    Route::get('reset-password', 'ResetPasswordController@resetForm')->name('reset-password');
    Route::post('reset-password', 'ResetPasswordController@sendResetToken')->name('reset-password');

    Route::get('change-password/{token}', 'ResetPasswordController@resetPasswordWithTokenForm')->name('reset-password-with-token');
    Route::post('change-password/{token}', 'ResetPasswordController@resetPasswordWithTokenPost')->name('reset-password-with-token');

	Route::get('logout', function(){
		Auth::guard('admin')->logout();
        Auth::guard('teacher')->logout();
        Auth::guard('student')->logout();

		return redirect()->route('login');
	})->name('logout');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth:admin'
], function() {

    Route::get('/', function() {
        return view('admin.dashboard.index');
    })->name('admin.index');
});

Route::group([
    'prefix' => 'teacher',
    'namespace' => 'Teacher',
    'middleware' => 'auth:teacher'
], function() {
    Route::get('/', function() {
        return view('teacher.notification.index');
    })->name('teacher.index');
});

Route::group([
    'prefix' => 'student',
    'namespace' => 'Student',
    'middleware' => 'auth:student'
], function() {
    Route::get('/', function() {
        return view('student.notification.index');
    })->name('student.index');
});

