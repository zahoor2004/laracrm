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
    //return view('categories');
    return view('welcome');

});

Route::get('/test/user/profile/id/{id?}',function($id = null){
return "test".$id;
})->name('profile');

Route::get('/blogforuandall',function(){
return "lara CRM";
})->name("blog");

Route::get('/category/list', 'CategoryController@getAllCat')->name('category');
Route::get('/category/add', 'CategoryController@addform');
Route::get('/category/edit/{id}', 'CategoryController@editform');
Route::post('/category/save','CategoryController@saveCat');
Route::get('/category/delete/{id}','CategoryController@delete_cat');
