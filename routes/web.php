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



//도서관소식 알림 게시판 리스트
Route::get('/board', 'LocalinfoController@index')->name('list');
Route::get('/board/write', 'LocalinfoController@create');
Route::post('/board/store', 'LocalinfoController@store')->name('store');
Route::get('/board/{id}' ,'LocalinfoController@show')->name('show');

Route::get('/board/{id}/edit', 'LocalinfoController@edit');
Route::put('/board/{id}', 'LocalinfoController@update')->name('update');

Route::delete('/board/{id}','LocalinfoController@destroy')->name('delete');
//--------------------------------------------------------------

Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit')->name('upload');
 




//--------------------------------------------------------------
Route::get('/test', function(){
    return view('board.test');
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
