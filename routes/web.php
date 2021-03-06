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



Auth::routes();

Route::resource('users', 'UserController');

Route::group(['middleware' => ['auth']], function (){
    Route::namespace('Admin')->prefix('admin')->group(function(){    
        Route::resource('posts', 'PostController');
        Route::resource('categories' , 'CategoryController');

        Route::prefix('profile')->name('profile.')->group(function(){
            Route::get('/', 'ProfileController@Index')->name('index');
            Route::post('/update', 'ProfileController@update')->name('update');
        });
    });
});


Route::namespace('Admin\Site')->name('site.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/post/{slug}', 'HomeController@single')->name('single');
    Route::post('/post/comment', 'CommentController@saveComment')->name('single.comment');
});



