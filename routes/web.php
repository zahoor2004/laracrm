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
    return view('categories');
});

Route::get('/test/user/profile/id/{id?}',function($id = null){
return "test".$id;
})->name('profile');

Route::get('/blogforuandall',function(){
return "thswisadsf sdhfdusghdf";
})->name("blog");

Route::get('/category', 'CategoryController@getAllCat');
Route::get('/catadd', 'CategoryController@add');
