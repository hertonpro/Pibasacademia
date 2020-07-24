<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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


    // return view('home');
     return view('admin/Contact/Liste');

});

// Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/apropos', 'HomeController@apropos');
Route::get('/blog', 'HomeController@blog');
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');
Route::get('/login', 'HomeController@login');
Route::post('/Contacts', 'ContactController@create');
Route::post('/updatecontact', 'ContactController@updatecontact');
Route::get('/contactliste', 'ContactController@contactliste');
Route::get('/contact/{contact}', 'ContactController@show');
Route::get('/contact/{contact}/edit', 'ContactController@edit');
Route::patch('/contact/{contact}', 'ContactController@update');
