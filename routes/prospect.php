<?php

use Illuminate\Support\Facades\Route;
/*
 *
 *
 * Here is where you can register all your prospect admin routes
 *
 */


Route::get('/', function () {
    return "YaY !!! prospect route works";
});

/*
 * Message System
 */

Route::get('conversation', 'Conversations\ConversationController@index')->name('member.conversations');
Route::get('conversation/show/{user}', 'Conversations\ConversationController@show')->name('member.conversation.show');
Route::post('conversation/show/{user}', 'Conversations\ConversationController@store')->name('member.conversation.store');
