<?php

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

//Route::get('/', 'PlanetController@index');

Route::get('/{planet_name?}', 'PlanetController@index');

Route::post('/search', 'SearchController@index');

/*

Route::get('/test/cars','CarsController@index')->name('cars');

Route::post('/test/cars-insert', 'CarsController@insert')->name('cars-insert');

Route::get('/test/cars-update','CarsController@update')->name('cars-update');

Route::get('/test/cars-delete','CarsController@delete')->name('cars-delete');

*/

Route::get('/test/about','SupportersController@index')->name('supporters');

Route::post('/test/about/supporters-insert','SupportersController@insert')->name('supporters-insert');

Route::get('/test/about/supporters/delete/{id}','SupportersController@delete')->name('supporters-delete');

Route::get('/test/about/supporters/edit/{id}','SupportersController@edit')->name('supporters-edit'); //envoi de la page du formulaire edit.blade.php

//Route::post('/test/about/supporters/update/{id}','SupportersController@update')->name('supporters-update');//envoi des données du formulaire = sauvegarde des données + vue confirmation.php





/*Route::get('/contact', 'ContactController@index');

Route::post('/contact-ok', 'ContactController@send');

Route::get('/test/{id}', function($id){
	echo('Test');
	echo($id);
});
*/
