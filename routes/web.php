<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $users_table = DB::table('users')->paginate(15);
    return view('welcome', ['users' => $users_table]);
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/edit', 'HomeController@edit')->name('edit');

Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('contact', 'ContactController@contact')->name('contact');
Route::post('contact', ['as'=>'contactus.store','uses'=>'ContactController@contactPost']);
