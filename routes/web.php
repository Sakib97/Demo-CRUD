<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store')->name('p.store');
Route::get('/p/{post}', 'PostsController@show')->name('p.show');
// Route::get('/post/{post}', 'PostsController@destroy')->name('post.destroy');
Route::delete('/p/{post}', 'PostsController@destroy');

Route::get('/p/{post}/edit', 'PostsController@edit')->name('p.edit'); // This will show the form
Route::patch('/p/{post}', 'PostsController@update')->name('p.update');


// earth
// Earth is the third planet from the Sun and the only astronomical object known to harbor life. According to radiometric dating and other evidence, Earth formed over 4.5 billion years ago. Earth's gravity interacts with other objects in space, especially the Sun and the Moon, which is Earth's only natural satellite. Earth orbits around the Sun in 365.256 solar days, a period known as an Earth sidereal year. During this time, Earth rotates about its axis 366.256 times, that is, a sidereal year has 366.256 sidereal days.
