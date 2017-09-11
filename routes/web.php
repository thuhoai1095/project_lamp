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

Route::group(['prefix'=>'qluser'],function (){
    //qluser/personal/sua
    Route::group(['prefix'=>'personal'],function () {
        Route::get('sua','PersonalController@getSua');
        Route::get('them','PersonalController@getThem');
    });
    //qluser/post/them
    Route::group(['prefix'=>'post'],function () {
        Route::get('danhsach','PostController@getDanhSach');
        Route::get('sua','PostController@getSua');
        Route::get('them','PostController@getThem');
    });

});

Route::group(['prefix'=>'admin'],function (){
    //admin/theloai/sua
    Route::group(['prefix'=>'theloai'],function () {
        Route::get('danhsach','TheLoaiController@getDanhSach');
        Route::get('sua','TheLoaiController@getSua');
        Route::get('them','TheLoaiController@getThem');
    });
    //admin/tintuc/sua
    Route::group(['prefix'=>'tintuc'],function () {
        Route::get('danhsach','TinTucController@getDanhSach');
        Route::get('sua','TinTucController@getSua');
        Route::get('them','TinTucController@getThem');
    });
    //admin/qluser/sua
    Route::group(['prefix'=>'qluser'],function () {
        Route::get('danhsach','QLUserController@getDanhSach');
        Route::get('sua','QLUserController@getSua');
        Route::get('them','QLUserController@getThem');
    });


});