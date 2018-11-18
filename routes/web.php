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

//route for main page
Route::get('/',function(){
  return view('auth.login');
});
Route::get('/dashboard', 'Viewcontroller@index')->name('dashboard');
Route::get('profile', 'Viewcontroller@profile')->name('profile');
Route::get('report', 'Viewcontroller@report')->name('report');
Route::get('client', 'Viewcontroller@client')->name('client');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('api_url','APIController@api');
