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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontController@index' )->name('sirius_d');

Route::get('/editors', function () {
    return view('articles/editors');
});


Route::get('/radiestesia', function () {
    return view('articles/radiestesia');
});

Route::prefix('posts')->group( function(){
  Route::get('/', 'FrontPostController@index')->name('frontposts');
});

Route::prefix('admin')->group( function(){

    Route::get('/','AdminController@index');

    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');

    Route::get('/posts','PostController@index')->name('posts');

    Route::get('/postcreate', 'PostController@create')->name('postcreate');

    Route::post('poststore','PostController@store')->name('poststore');

    Route::get('postshow/{id}','PostController@show')->name('postshow');

    Route::get('postedit/{id}','PostController@edit')->name('postedit');

    Route::get('deletepost/{id}','PostController@destroy')->name('deletepost');

    Route::post('/postupdate{id}','PostController@update')->name('postupdate');

    Route::get('/categories','CategoryController@index')->name('categories');

    Route::get('/categorycreate', 'CategoryController@create')->name('categorycreate');

    Route::post('/categorystore','CategoryController@store')->name('categorystore');



});



// Route::get('posts', function(){
//    return view('posts/posts');
// });

    Auth::routes();

  //  Route::get('/home', 'HomeController@index')->name('home');
    //
    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/writer', 'Auth\RegisterController@createWriter');

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/users/admin', 'users/admin');
    Route::view('/writer', 'writer');
