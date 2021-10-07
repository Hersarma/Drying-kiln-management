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
    Route::resource('clients', 'ClientController');
    Route::post('/delete_checked', 'ClientController@destroyChecked')->name('delete_checked_clients');
     /*/Route::group(['prefix' => 'clients'], function(){
        Route::get('/', 'ClientController@index')->name('clients-index');
        Route::post('/', 'ClientController@store')->name('clients-store');
        Route::post('/update/{client}', 'ClientController@update')->name('clients-update');
        Route::get('/delete/{client}', 'ClientController@destroy')->name('clients-delete');
        
        Route::get('/show/{client}', 'ClientController@show')->name('clients-show');
    });*

    /*Timber*/
    Route::resource('timberIncoming', 'TimberIncomingController');
    Route::resource('timberOutgoing', 'TimberOutgoingController');
    Route::post('/delete_checked', 'TimberIncomingController@destroyChecked')->name('delete_checked_timber');
    /*Route::group(['prefix' => 'timber'], function(){
        Route::get('/incoming', 'TimberIncomingController@index')->name('timber-incoming');
        Route::get('/outgoing', 'TimberOutgoingController@index')->name('timber-outgoing');
        Route::post('/', 'TimberIncomingController@store')->name('store-timber-incoming');
        Route::get('/delete/{timberIncoming}', 'TimberIncomingController@destroy')->name('delete-timber');
        Route::post('/delete_checked', 'TimberIncomingController@destroyChecked')->name('delete_checked_timber');
        Route::get('/incoming/show/{timber}', 'TimberIncomingController@show')->name('show-timber-incoming');
    });*/

    /*Dry kiln*/
    Route::resource('drykiln', 'DryKilnController');
    /*Route::group(['prefix' => 'drykiln'], function(){
        Route::get('/', 'DryKilnController@index')->name('drykiln-index');
        Route::post('/', 'DryKilnController@store')->name('drykiln-store');
        Route::get('/show/{drykiln}', 'DryKilnController@show')->name('drykiln-show');
    });*/
    /*Search*/
     Route::get('/search_clients', 'SearchController@search_clients');
     Route::get('/search_timberincoming_clients', 'SearchController@search_timber_incoming_clients');
});

require __DIR__.'/auth.php';
