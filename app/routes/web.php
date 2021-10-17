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
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', 'AdminController@showImportantInfor')->middleware('auth','role:admin');

// Route::get('/bai-viet', 'ArticleController@view') -> name('ArticleView');
Route::resource('/baiviet', 'ArticleController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about.index');
});
Route::get('/post-details', function () {
    return view('post_detail');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/dashboard', function () {
    return view('adminstrator.dashboard.index');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/demo', function () {
    return view('adminstrator.dashboard.index');
});



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
  Route::get('/demo', function () {
      return view('adminstrator.dashboard.index');
  });

  Route::resource('category', 'CategoryController');
});


Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');
