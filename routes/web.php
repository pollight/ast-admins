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

Route::get('/', 'Admin\DashboardController@start')->name('start');
Route::post('/get-databoard', 'DataBoardController@getDataBoard')->name('get_data_boards');
Route::post('/get-board-current', 'DataBoardController@getBoardCurrent')->name('get_board_current');
Route::post('/get-status-planning', 'DataBoardController@getStatusPlanning')->name('get_status_planning');
Route::post('/get-last-modified', 'DataBoardController@getLastModified')->name('get_last_modified');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('dashboard.logs');
Route::get('/recipes', 'Admin\RecipeController@index')->name('dashboard.recipes');
Route::get('/administration', 'DashboardController@administration')->name('dashboard.administration');
Route::get('/statistics', 'Admin\StatisticsController@index')->name('dashboard.statistics');
Route::post('/get_volume_graph', 'Admin\StatisticsController@get_volume');
Route::get('/diagnostics', 'Admin\DashboardController@diagnostics')->name('dashboard.diagnostics');
Route::get('/neural_network', 'Admin\DashboardController@neural_network')->name('dashboard.neural_network');



Route::get('/getReport', 'Admin\StatisticsController@creatOtchet');

Route::get('/recepts', 'Recepts@index');
Route::post('/Addrecepts', 'Recepts@addRecept');
Route::post('/redactRecept', 'Recepts@redact');
Route::post('/updateRecepts', 'Recepts@update');
Route::post('/deleteRecept', 'Recepts@deleteRecept');
Route::post('/selectrecept', 'Recepts@checRecept');

Route::post('/RestartNeuron', 'MachineInfoController@restartMAtriX');
Route::post('/RestartServer', 'MachineInfoController@resatartServer');											
Route::post('/startLesson', 'MachineInfoController@startLesson');
											

Route::get('/recipes/list', 'Admin\RecipeController@getRecipesList')->name('get_recipes_list');
Route::post('/recipes/create', 'Admin\RecipeController@create')->name('recipes_create');
Route::post('/recipes/delete', 'Admin\RecipeController@delete')->name('recipes_delete');

