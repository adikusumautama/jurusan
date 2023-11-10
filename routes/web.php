<?php

/* |--------------------------------------------------------------------------

Web Routes
Here is where you can register web routes for your application. These
routes are loaded by the RouteServiceProvider within a group which
contains the “web” middleware group. Now create something great!
*/
Route::get('/', function () { 
    return redirect(route('login')); 
}); 

Route::get('/starter', function () { 
    return view('starter'); 
});

Route::get('/halo', function () {
    return ('Hello World'); 
});

Auth::routes(['verify' => false, 'reset' => false]);

// Route yang perlu autentikasi 
Route::middleware('auth')->group(function () { 
    // Route untuk dashboard 
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); 
    // Route untuk profil 
    Route::get('/profil', 'UserProfileController@index')->name('profil'); 
    // Route untuk jurusan 
    Route::resource('jurusan', 'JurusanController'); 
});

// Route untuk menampilkan About 
Route::get('/about', 'AboutController@index')->name('about');