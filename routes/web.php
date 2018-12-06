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
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/post ', function () {
    return view('post ');
});
Route::get('/quspage ', function () {
    return view('quspage ');
});





Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
