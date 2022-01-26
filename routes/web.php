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
/*Incoming-Outgoing*/
Route::resource('incoming', 'IncomingController');
Route::resource('outgoing', 'OutgoingController');
Route::post('/delete_checked_incoming', 'IncomingController@destroyChecked')->name('delete_checked_incoming');
Route::post('/delete_checked_outgoing', 'OutgoingController@destroyChecked')->name('delete_checked_outgoing');

/*Dry kiln*/
Route::resource('drykiln', 'DryKilnController');
Route::get('/drying_proces/{drykiln}', 'DryingProcesController@index')->name('drying_proces');
Route::get('/drying_proces/show/{dryingProces}', 'DryingProcesController@show')->name('show_drying_proces');
Route::delete('/delete_drying_proces/{dryingProces}', 'DryingProcesController@destroy')->name('delete_drying_proces');
Route::post('/create_drykiln_config', 'DryKilnConfigController@store')->name('create_drykiln_config');
Route::post('/update_drykiln_config/{drykilnconfig}', 'DryKilnConfigController@update')->name('update_drykiln_config');
Route::post('/delete_drykiln_config/{drykilnconfig}', 'DryKilnConfigController@destroy')->name('delete_drykiln_config');
Route::post('/create_drykiln_reading', 'DryKilnReadingsController@store')->name('create_drykiln_reading');

Route::post('/delete_checked_drying_proces', 'DryingProcesController@destroyChecked')->name('delete_checked_drying_proces');

/*Mail*/
Route::get('/mail/inbox', 'MailController@index')->name('mail_index');
Route::get('/mail/inbox/show/{mail}', 'MailController@show')->name('mail_inbox_show');
Route::delete('/delete/{mail}', 'MailController@destroy')->name('mail_soft_delete');

/*Search*/
Route::get('search_clients', 'SearchController@search_clients');
Route::get('search_incomings', 'SearchController@search_incomings');
Route::get('search_outgoings', 'SearchController@search_outgoings');
});

/*Settings*/
Route::get('/settings/index', 'SettingsController@index')->name('settings_index');
Route::get('/settings/mail_config_show', 'SettingsController@mail_config_show')->name('mail_config_show');
/*Incoming*/
Route::post('/settings/create_mail_incoming_config', 'SettingsController@store_mail_incoming_config')->name('create_mail_incoming_config');
Route::post('/settings/update_mail_incoming_config/{mailConfigIncoming}', 'SettingsController@update_mail_incoming_config')->name('update_mail_incoming_config');
/*Outgoing*/
Route::post('/settings/create_mail_outgoing_config', 'SettingsController@store_mail_outgoing_config')->name('create_mail_outgoing_config');
Route::post('/settings/update_mail_outgoing_config/{mailConfigOutgoing}', 'SettingsController@update_mail_outgoing_config')->name('update_mail_outgoing_config');

require __DIR__.'/auth.php';