<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('address/{lat}/{long}/{rad}', 'Myhouse\Api\AddressController@address')->name('here.address');


    /*
      * Calendar route
      *
    */


Route::middleware('auth:api')->post('/calendar/add', 'Myhouse\Api\CalendarController@add');  
Route::middleware('auth:api')->put('/calendar/update', 'Myhouse\Api\CalendarController@update');   
Route::middleware('auth:api')->delete('/calendar/delete', 'Myhouse\Api\CalendarController@delete');   


Route::middleware('auth:api')->post('/calendar/pro/add', 'Myhouse\Api\CalendarController@proadd');  
Route::middleware('auth:api')->put('/calendar/pro/update', 'Myhouse\Api\CalendarController@proupdate');   
Route::middleware('auth:api')->delete('/calendar/pro/delete', 'Myhouse\Api\CalendarController@prodelete'); 


/*

  *
  *  Agenda Api route
  *

 */

Route::middleware('auth:api')->get('/agenda', 'Myhouse\Api\Menu\Particulier\AgendaController@index'); 
Route::middleware('auth:api')->get('/professionnelagenda', 'Myhouse\Api\Menu\Particulier\AgendaController@agenda'); 


/*
  *** Particulier results
*/

Route::get('/recherche/particuliers/online', 'Myhouse\Home\Api\HomeController@getinformations');


