<?php

use Illuminate\Support\Facades\Route;
/*
 *
 *
 * Here is where you can register all your prospect admin routes
 *
 */


Route::get('/', function () {
    return "YaY !!! agent route works";
});

Route::get('inscription', 'Agent\Auth\RegisterController@showRegistrationForm')->name('agent.register');
Route::post('inscription', 'Agent\Auth\RegisterController@register')->name('agent.register');

Route::get('dashboard', 'Agent\DashboardController@index')->name('agent.dashboard');


/*
 * Project resource
 */
Route::resource('actions', 'Agent\ProjectController');

/*
 * Message System
 */

Route::get('conversation', 'Conversations\ConversationController@index')->name('agent.conversations');
Route::get('conversation/show/{user}', 'Conversations\ConversationController@show')->name('conversation.show');
Route::post('conversation/show/{user}', 'Conversations\ConversationController@store')->name('conversation.store');
