<?php

use Illuminate\Support\Facades\Route;
/*
 *
 *
 * Here is where you can register all your prospect admin routes
 *
 */


Route::get('/', function () {
    return "YaY !!! promoteur route works";
});

Route::get('inscription', 'Promoter\Auth\RegisterController@showRegistrationForm')->name('promoter.register');
Route::post('inscription', 'Promoter\Auth\RegisterController@register')->name('promoter.register');


Route::get('dashboard', 'Promoter\DashboardController@index')->name('promoter.dashboard');
/*
 * Message System
 */

Route::get('conversation', 'Conversations\ConversationController@index')->name('promoter.conversations');
Route::get('conversation/show/{user}', 'Conversations\ConversationController@show')->name('promoter.conversation.show');
Route::post('conversation/show/{user}', 'Conversations\ConversationController@store')->name('promoter.conversation.store');
