<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;
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
     return view('home');

});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formation/{formation}', 'HomeController@formation')->name('newUser');
Route::get('forma/{formation}', 'HomeController@formation');
Route::get('/suivrecours','SuivreController@create');
Route::get('formatio', 'HomeController@formatio');
Route::post('/newUser', 'AdminController@create')->name('newUser');
Route::get('/newUser', 'AdminController@newUser');
Route::resource('/board', 'Admin\BoardController');
Route::get('/suivre/{suivre}', 'SuivreController@suivremembre');
Route::get('/calendrier', 'Admin\BoardController@calendrier');
Route::resource('profiles', 'ProfilController');



Route::get('/apropos', 'HomeController@apropos');
Route::get('/blog', 'HomeController@blog');
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');
Route::post('/Contacts', 'ContactController@create');
Route::post('/updatecontact', 'ContactController@updatecontact');
Route::get('/contactliste', 'ContactController@contactliste');
Route::get('/contact/{contact}', 'ContactController@show');
Route::get('/contact/{contact}/edit', 'ContactController@edit');
Route::patch('/contact/{contact}', 'ContactController@update');

 Route::get('article/{article}', 'HomeController@article');

Route::resource('articles', 'ArticlesController');
Route::get('voirplusart', 'ArticlesController@showall');




//admin
// route contact
Route::resource('/contacts', 'ContactController');

 // route formation
 Route::resource('/formations', 'FormationController');

// route faq

//formateurs
Route::resource('formateurs', 'FormateurController');


/// route client
Route::resource('clients', 'ClientController');
// route  entreprise
//route blog
Route::resource('blogs', 'Blogcontroller');
// blog
//faq
Route::resource('faqs', 'FaqController');
//apropos
Route::resource('aproposs', 'AproposController');
Route::resource('courss', 'CoursController');
//lienc du cours
Route::resource('liencours', 'LienscoursController');
Route::resource('suivres', 'SuivreController');

Route::resource('descfaqs', 'DescFaqController');

Route::resource('users', 'Admin\UsersController');
Route::resource('/admin/clients', 'Admin\ClientsController');


//Route admin
Route::resource('transaction', 'Admin\TransactionController');
Route::resource('cours', 'Admin\CoursController');
//route inbox
Route::resource('inbox', 'inboxController');

Route::post('/retrait', 'Admin\RetraitController@retrait')->name('retrait');
Route::post('/retraitV', 'Admin\RetraitController@valide')->name('retraitV');
Route::post('/retraitC', 'Admin\RetraitController@confirm')->name('retraitC');

Route::post('/profile', 'AdminController@profile')->name('profile');
Route::post('/passwordM', 'AdminController@passwordM')->name('passwordM');


