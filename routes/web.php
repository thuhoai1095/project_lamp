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
Route::get('/listall', "PostController@listAllPosts")->name("post.list");

Route::group(['prefix'=>'user'],function (){
    //user/personal/sua
    Route::group(['prefix'=>'personal'],function () {
        Route::get('sua','PersonalController@getSua');
        Route::get('them','PersonalController@getThem');
    });
    //user/post/them
    Route::group(['prefix'=>'post'],function () {
        Route::get('danhsach','PostController@getDanhSach');
        Route::get('sua','PostController@getSua');
        Route::get('them','PostController@getThem');
    });
});