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
    return redirect('admin/login');
});

Route::prefix('admin')->group(function () {
    Auth::routes();
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
Route::get('/about', 'InicioController@about')->name('about');

Route::get('/api/latestProject', 'InicioController@latestProject')->name('latestProject');
Route::get('/api/latestThreeProject', 'InicioController@latestThreeProject')->name('latestThreeProject');
Route::get('/api/allProjects', 'InicioController@allProjects')->name('allProjects');


