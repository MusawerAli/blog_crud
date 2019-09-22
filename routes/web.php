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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('student', 'StudentController');
Route::get('ajaxdata','AjaxdataController@index')->name('ajaxdata');
Route::get('ajaxdata/getdata','AjaxdataController@getdata')->name('ajaxdata.getdata');

Route::post('ajaxdata/postdata','AjaxdataController@postdata')->name('aj.postdata');
Route::get('ajaxdata/fetchdata', 'AjaxdataController@fetchdata')->name('ajaxdata.fetchdata');
Route::get('ajaxdata.removedata','AjaxdataController@removedata')->name('aj.removedata');
Route::get('ajaxdata.massremove','AjaxdataController@massremove')->name('aj.massremove');
Route::get('/uploadfile','Uploadfilecontroller@index');
Route::post('/uploadfile','Uploadfilecontroller@upload');
Route::get('/main','MainController@index');
Route::get('/email_available','EmailAvailable@index');