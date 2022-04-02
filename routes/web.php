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

Route::get('/admin', function () {
    return redirect('admin/home');
});

Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/projects', 'ProjectController');
    Route::post('/uploadImagen', 'ProjectController@uploadImagen');
    Route::post('/deleteImagen', 'ProjectController@borrarImagen');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/prospects', 'ProspectController');
    Route::resource('/testimonials', 'TestimonialController');
});

Route::get('/', 'InicioController@index')->name('inicio');
Route::get('/projects', 'InicioController@showprojects')->name('show.projects');
Route::get('/projects/{project}', 'InicioController@showproject')->name('show.projectFront');
