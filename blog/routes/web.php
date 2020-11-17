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

Route::get('/', 'Front@main');

Route::get('/kr/pop_01', 'Front@pop');
Route::get('/kr/pop_02', 'Front@pop');
Route::get('/kr/pop_03', 'Front@pop');
Route::get('/kr/pop_04', 'Front@pop');
Route::get('/kr/frame/pop01', 'Front@frame');
Route::get('/kr/frame/pop02', 'Front@frame');
Route::get('/kr/frame/pop03', 'Front@frame');

Route::post('/comment_action', 'Front@comment_action');

Route::get('/as_admin/login', 'Back@as_login');
Route::post('/as_admin/login_action', 'Back@as_login_action');

Route::get('/as_admin/message', 'Back@as_board_list');
Route::get('/as_admin/message/write_board_form', 'Back@write_board_form');
Route::post('/as_admin/message/write_board_action', 'Back@write_board_action');
Route::get('/as_admin/message/write_board_form/modify', 'Back@write_board_form');

Route::get('/as_admin/contest/list', 'Back@ey_board_list');
Route::get('/as_admin/inquiry/list', 'Back@ey_board_list');

Route::get('/as_admin/contest/ey_board_view', 'Back@ey_board_view');
Route::get('/as_admin/inquiry/ey_board_view', 'Back@ey_board_view');

Route::get('/as_admin/main_set', 'Back@main_set');
Route::post('/as_admin/change_main_set', 'Back@change_main_set');