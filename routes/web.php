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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'email' => 'gilang32nugraha@gmail.com',
        'name' => 'Gilang Nugraha Restu Putra',
        'gambar' => 'images.jpeg'
    ]);
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::group(['namespace' => 'Frontend'], function () {
    Route::resource('home', 'HomeController');
});

Route::group(['namespace' => 'Backend'], function () {
    Route::resource('dashboard', 'DashboardController');
});
