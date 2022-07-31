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

Route::get('/', function () {
    return view('welcome');
});

// 'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('user/permissions/{id}', 'UserController@permission_edit')->name('user.permissions.edit');

    Route::post('user/permissions/{id}', 'UserController@permission_save')->name('user.permissions.save');

    Route::resource('user', 'UserController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::get('homepage', 'HomePageController@index')->name('homepage');

    Route::resource('contact-us', 'ContactUsController')->only([
        'index', 'show'
    ]);

    Route::get('about-us', 'AboutUsController@index')->name('aboutUs');

    Route::resource('faq', 'FaqController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('review', 'ReviewController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('team', 'TeamController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::post('image_upload', 'MiscellaneousController@image_upload')->name('ckeditor.upload');

    Route::resource('blog', 'BlogController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('feature', 'FeatureController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

require __DIR__ . '/auth.php';
