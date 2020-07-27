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
// })->name('homepage');
// Route::get('/about', function () {
//     return view('about');
// })->name('aboutpage');
// Route::get('/contact', function () {
//     return view('contact');
// })->name('contactpage');

// Route::get('/about/{name}', function($name){
//     $name = strtoupper($name);
//     return $name;
// });
// Route::get('/sum/{a}/{b}', function($a, $b){
//     return $a+$b;
// })->where(['a'=>'[0-9]+','b'=>'[0-9]+']);

// Route::get('/mul/{a}', 'MathController@mul')->where(['a'=>'[0-9]+']);

// Route::get('/sum/{a}/{b}', 'MathController@sum')->where(['a'=>'[0-9]+']);

// Route::group(['prefix' => 'math'], function(){
	
// 	Route::get('/sum/{x}/{y}', 'MathController@sum');

// 	Route::get('sub', 'MathController@sub');

// 	Route::get('div', 'MathController@div');
// });

// Route::resource('country', 'CountryController');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contactpage');

Route::get('/', 'SiteController@index')->name('homepage');
Route::get('/about', 'SiteController@about')->name('aboutpage');
Route::get('/contact', 'SiteController@contact')->name('contactpage');
Route::get('/extra', 'SiteController@extra')->name('extrapage');

Route::get('/person', 'PersonsController@index')->name('personPage');