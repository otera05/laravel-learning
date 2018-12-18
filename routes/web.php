<?php

use App\Http\Controllers\ArticlesController;

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route;
// use Symfony\Component\Routing\Annotation\Route;

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
// Route::get('/', 'WelcomeController@index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'WelcomeController@contact')->name('contact');

// Route::get('/home', function () {
//     return view('home');
// });



// ユーザ登録
// Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
// Route::post('auth/register', 'Auth\RegisterController@register');

// 認証
// Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
// Route::post('/auth/login', 'Auth\LoginController@login');
// Route::get('/auth/logout', 'Auth\LoginController@logout');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// 記事
Route::get('/', 'ArticlesController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('articles', 'ArticlesController');
