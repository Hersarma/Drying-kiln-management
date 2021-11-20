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
Route::post('/delete_checked_clients', 'ClientController@destroyChecked')->name('delete_checked_clients');
/*Timber*/
Route::resource('timberincoming', 'TimberIncomingController');
Route::resource('timberoutgoing', 'TimberOutgoingController');
Route::post('/delete_checked_incoming_timber', 'TimberIncomingController@destroyChecked')->name('delete_checked_incoming_timber');

/*Dry kiln*/
Route::resource('drykiln', 'DryKilnController');
Route::post('/create_drykiln_config', 'DryKilnConfigController@store')->name('create_drykiln_config');
Route::post('/update_drykiln_config/{drykilnconfig}', 'DryKilnConfigController@update')->name('update_drykiln_config');
Route::post('/delete_drykiln_config/{drykilnconfig}', 'DryKilnConfigController@destroy')->name('delete_drykiln_config');
Route::post('/create_drykiln_reading', 'DrykilnReadingsController@store')->name('create_drykiln_reading');

/*Search*/
Route::get('search_clients', 'SearchController@search_clients');

});
require __DIR__.'/auth.php';