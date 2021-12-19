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
// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/admin', 'AdminController@showImportantInfor')->middleware('auth','role:admin');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about.index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/dashboard', function () {
    return view('adminstrator.dashboard.index');
});

Route::get('/demo', function () {
    return view('adminstrator.dashboard.index');
});

// Front End Routes
Route::get('/', 'FrontEndController@home')->name('website');
Route::get('/post/{slug}', 'FrontEndController@post')->name('website.post');
Route::get('/contact', 'FrontEndController@contact')->name('website.contact');

// Send message from contact page
Route::post('/contact', 'FrontEndController@send_message')->name('website.contact');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
  Route::get('/demo', function () {
      return view('adminstrator.dashboard.index');
  });

  Route::resource('category', 'CategoryController');
  Route::resource('tag','TagController');
  Route::resource('post','PostController');
  Route::resource('user', 'UserController');

  Route::get('/profile', 'UserController@profile')->name('user.profile');
  Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');


  // setting
  Route::get('setting', 'SettingController@edit')->name('setting.index');
  Route::post('setting', 'SettingController@update')->name('setting.update');

  // Contact message
  Route::get('/contact', 'ContactController@index')->name('contact.index');
  Route::get('/contact/show/{id}', 'ContactController@show')->name('contact.show');
  Route::delete('/contact/delete/{id}', 'ContactController@destroy')->name('contact.destroy');

});

Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');
