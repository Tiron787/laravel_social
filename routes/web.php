<?php
namespace App\Http\Controllers\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');

    Route::post('/posts', 'StoreController')->name('post.store'); //post
    Route::get('/posts/{post}', 'ShowController')->name('post.show'); //show
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit'); //edit
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update'); //update
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete'); //delete
});

Route::get('/my_page/update', 'App\Http\Controllers\PostController@update');
Route::get('/my_page/delete', 'App\Http\Controllers\PostController@delete');
Route::get('/my_page/first_or_create', 'App\Http\Controllers\PostController@first_or_create');
Route::get('/my_page/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');

Route::get('/main', 'App\Http\Controllers\mainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\aboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\contactController@index')->name('contact.index');
