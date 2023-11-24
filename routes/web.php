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
$controller = 'App\Http\Controllers';

Route::get('/', function () {
    return view('Home');
});

Route::get('/dashboard', $controller . '\DashboardController@index')->name('dashboard');
Route::get('/layananhost', $controller . '\LayananHostingController@index')->name('layananhost');
Route::get('/layanandomain', $controller . '\LayananDomainController@index')->name('layanandomain');
Route::get('/cpanel', $controller . '\CpanelController@index')->name('cpanel');
Route::get('/database', $controller . '\DatabaseController@index')->name('database');
Route::get('/filemanager', $controller . '\FileManagerController@index')->name('filemanager');
Route::get('/costumerservice', $controller . '\CostumerServiceController@index')->name('costumerservice');

Route::get('/login', $controller . '\LoginControoller@index')->name('login');
Route::get('/register', $controller . '\RegisterControoller@index')->name('register');