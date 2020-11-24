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
Route::get('/en', 'Front@main');
Route::get('/zh', 'Front@main');
Route::get('/fe', 'Front@main');
Route::get('/ja', 'Front@main');
Route::get('/es', 'Front@main');
Route::get('/vi', 'Front@main');


Route::get('/kr/pop_01', 'Front@pop');
Route::get('/kr/pop_02', 'Front@pop');
Route::get('/kr/pop_03', 'Front@pop');
Route::get('/kr/pop_04', 'Front@pop');
Route::get('/kr/frame/pop01', 'Front@frame');
Route::get('/kr/frame/pop02', 'Front@frame');
Route::get('/kr/frame/pop03', 'Front@frame');

Route::get('/en/pop_01', 'Front@pop');
Route::get('/en/pop_02', 'Front@pop');
Route::get('/en/pop_03', 'Front@pop');
Route::get('/en/pop_04', 'Front@pop');
Route::get('/en/frame/pop01', 'Front@frame');
Route::get('/en/frame/pop02', 'Front@frame');
Route::get('/en/frame/pop03', 'Front@frame');

Route::get('/zh/pop_01', 'Front@pop');
Route::get('/zh/pop_02', 'Front@pop');
Route::get('/zh/pop_03', 'Front@pop');
Route::get('/zh/pop_04', 'Front@pop');
Route::get('/zh/frame/pop01', 'Front@frame');
Route::get('/zh/frame/pop02', 'Front@frame');
Route::get('/zh/frame/pop03', 'Front@frame');

Route::get('/fe/pop_01', 'Front@pop');
Route::get('/fe/pop_02', 'Front@pop');
Route::get('/fe/pop_03', 'Front@pop');
Route::get('/fe/pop_04', 'Front@pop');
Route::get('/fe/frame/pop01', 'Front@frame');
Route::get('/fe/frame/pop02', 'Front@frame');
Route::get('/fe/frame/pop03', 'Front@frame');

Route::get('/ja/pop_01', 'Front@pop');
Route::get('/ja/pop_02', 'Front@pop');
Route::get('/ja/pop_03', 'Front@pop');
Route::get('/ja/pop_04', 'Front@pop');
Route::get('/ja/frame/pop01', 'Front@frame');
Route::get('/ja/frame/pop02', 'Front@frame');
Route::get('/ja/frame/pop03', 'Front@frame');

Route::get('/es/pop_01', 'Front@pop');
Route::get('/es/pop_02', 'Front@pop');
Route::get('/es/pop_03', 'Front@pop');
Route::get('/es/pop_04', 'Front@pop');
Route::get('/es/frame/pop01', 'Front@frame');
Route::get('/es/frame/pop02', 'Front@frame');
Route::get('/es/frame/pop03', 'Front@frame');

Route::get('/vi/pop_01', 'Front@pop');
Route::get('/vi/pop_02', 'Front@pop');
Route::get('/vi/pop_03', 'Front@pop');
Route::get('/vi/pop_04', 'Front@pop');
Route::get('/vi/frame/pop01', 'Front@frame');
Route::get('/vi/frame/pop02', 'Front@frame');
Route::get('/vi/frame/pop03', 'Front@frame');

Route::post('/comment_action', 'Front@comment_action');
Route::post('/check_apply', 'Front@check_apply');

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

Route::post('/as_admin/delete', 'Back@del_data');