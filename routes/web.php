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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');
Route::get('/auth/logout', 'Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('articles', 'ArticlesController@index')->name('articles.index');
// Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
// Route::get('articles/{id}', 'ArticlesController@show')->name('articles.show');
// Route::post('articles', 'ArticlesController@store')->name('articles.store');
// Route::get('articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
// Route::patch('articles/{id}', 'ArticlesController@update')->name('articles.update');
// Route::delete('articles/{id}', 'ArticlesController@destroy')->name('articles.destroy');

Route::resource('articles', 'ArticlesController');
