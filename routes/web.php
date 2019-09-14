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

Route::get('/', 'Admin\DashboardController@start')->name('dashboard.start');
Route::post('/get-databoard', 'DataBoardController@getDataBoard')->name('get_data_boards');
Route::post('/get-board-current', 'DataBoardController@getBoardCurrent')->name('get_board_current');
Route::post('/get-status-planning', 'DataBoardController@getStatusPlanning')->name('get_status_planning');
Route::post('/get-last-modified', 'DataBoardController@getLastModified')->name('get_last_modified');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');