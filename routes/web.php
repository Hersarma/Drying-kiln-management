<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function (){

    /*Dashboard*/
    Route::get('/','HomeController@index')->name('home');
    Route::get('dashboard','HomeController@index')->name('home');

    /*Clients*/

     Route::group(['prefix' => 'clients'], function(){
        Route::get('/', 'ClientController@index')->name('clients-index');
        Route::post('/', 'ClientController@store')->name('clients-store');
        Route::post('/update/{client}', 'ClientController@update')->name('clients-update');
        Route::get('/delete/{client}', 'ClientController@destroy')->name('clients-delete');
        Route::post('/delete', 'ClientController@destroyChecked')->name('delete-checked-clients');
        Route::post('/{client}', 'ClientController@update')->name('clients-update');
        Route::get('/show/{client}', 'ClientController@show')->name('clients-show');
    });

    /*Timber*/

    Route::group(['prefix' => 'timber'], function(){
        Route::get('/incoming', 'TimberIncomingController@index')->name('timber-incoming');
        Route::get('/outgoing', 'TimberOutgoingController@index')->name('timber-outgoing');
        Route::post('/', 'TimberIncomingController@store')->name('store-timber-incoming');
        Route::get('/delete/{timber}', 'TimberIncomingController@destroy')->name('delete-timber');
        Route::post('/delete', 'TimberIncomingController@destroyChecked')->name('delete-checked-timber');
        Route::get('/show/{timber}', 'TimberIncomingController@show')->name('show-timber');
    }); 
});

require __DIR__.'/auth.php';
