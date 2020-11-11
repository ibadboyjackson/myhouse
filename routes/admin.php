<?php

use Illuminate\Support\Facades\Route;
/*
 *
 *
 * Here is where you can register all your prospect admin routes
 *
 */


Route::get('/', function () {
    return "YaY !!! admin route works";
});



Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::get('roles/ajouter', 'Admin\DashboardController@add')->name('admin.role');
Route::post('roles/ajouter', 'Admin\DashboardController@post');

Route::get('inscription', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('inscription', 'Admin\Auth\RegisterController@register')->name('admin.register');


/*
 * Message System
 */

Route::get('conversation', 'Conversations\ConversationController@index')->name('admin.conversations');
Route::get('conversation/show/{user}', 'Conversations\ConversationController@show')->name('admin.conversation.show');
Route::post('conversation/show/{user}', 'Conversations\ConversationController@store')->name('admin.conversation.store');
