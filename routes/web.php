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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard','App\Http\Controllers\AuthenticationController@index')->middleware(['auth'])->name('dashboard');

//Authentication routes
 Route::get('register','App\Http\Controllers\Auth\RegisteredUserController@create');
 Route::post('register','App\Http\Controllers\Auth\RegisteredUserController@store');
 Route::get('login','App\Http\Controllers\Auth\AuthenticatedSessionController@create')->name('login');
 Route::post('login','App\Http\Controllers\Auth\AuthenticatedSessionController@store');
 Route::post('logout','App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');
// Route::post('/register/user','App\Http\Controllers\AuthenticationController@registerUser');
// Route::get('/login','App\Http\Controllers\AuthenticationController@login');
// Route::post('/login/user','App\Http\Controllers\AuthenticationController@loginUser');


//Client routes;
Route::get('/','App\Http\Controllers\ClientController@index');
Route::get('/home','App\Http\Controllers\ClientController@home');
Route::get('/about','App\Http\Controllers\ClientController@about');
Route::get('/services','App\Http\Controllers\ClientController@services');
Route::get('/contact','App\Http\Controllers\ClientController@contact');
Route::get('/product','App\Http\Controllers\ClientController@product');
Route::post('/submit/query','App\Http\Controllers\ClientController@submitQuery');



Route::get('/super-admin','App\Http\Controllers\MainController@index');
Route::post('/api/main-dashboard','App\Http\Controllers\MainController@get_content');

//service routes
Route::post('upload/service','App\Http\Controllers\MainController@uploadService');
Route::post('delete/service','App\Http\Controllers\MainController@deleteService');
Route::post('update/service/{id}','App\Http\Controllers\MainController@UpdateService');

//products routes
Route::post('upload/product','App\Http\Controllers\MainController@uploadProduct');
Route::post('delete/product','App\Http\Controllers\MainController@deleteProduct');
Route::post('update/product/{id}','App\Http\Controllers\MainController@updateProduct');

//Testimonial routes
Route::post('upload/testimonial','App\Http\Controllers\MainController@uploadTestimonial');
Route::post('delete/testimonial','App\Http\Controllers\MainController@deleteTestimonial');
Route::post('update/testimonial/{id}','App\Http\Controllers\MainController@updateTestimonial');

//Price routes
Route::post('update/prices/{id}','App\Http\Controllers\MainController@updatePrices');


