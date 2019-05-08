<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace'=>'Web'],function (){
    Route::get('/','IndexController@index');

    Route::get('/swooletest','IndexController@swooleTest');

    Route::get('/article/category/{cid}','ArticleController@category');
    Route::get('/article/details/aid/{aid}','ArticleController@details');

    Route::post('/article/create','ArticleController@create')->middleware('checkLogin');
    Route::post('/article/comment','ArticleController@comment')->middleware('checkLogin');
    Route::get('/article/get-comment-list','ArticleController@getCommentList')->middleware('checkLogin');

    Route::get('/article/edit','ArticleController@edit')->middleware('checkLogin');
    Route::post('/article/uploadFile','ArticleController@uploadFile');
    Route::get('/article/search','ArticleController@getArticleList');

    Route::post('/user-login','AuthController@login');
    Route::post('/user-register','AuthController@register');
	Route::get('/user-logout','AuthController@logout')->middleware('checkLogin');

    //user  控制器
    Route::get('/user-main','UserController@index')->middleware('checkLogin');

    Route::get('/user-article','UserController@article')->middleware('checkLogin');
    Route::get('/user-article-edit','UserController@articleEdit')->middleware('checkLogin');

    Route::get('/user-pwd','UserController@password')->middleware('checkLogin');
    Route::post('/user-edit-pwd','UserController@editPassword')->middleware('checkLogin');

    Route::get('/user-article-list','UserController@getUserArticleList')->middleware('checkLogin');

    Route::get('/user-datum','UserController@datum')->middleware('checkLogin');
    Route::post('/user-edit-datum','UserController@datumEdit')->middleware('checkLogin');

    Route::get('/user-signin','UserController@signin')->middleware('checkLogin');
	Route::post('/signin','UserController@userSign')->middleware('checkLogin');



    Route::post('/user-uploadHead','UserController@uploadHead')->middleware('checkLogin');
});
