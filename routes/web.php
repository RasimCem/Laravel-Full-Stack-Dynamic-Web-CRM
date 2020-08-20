<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
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


//Front
Route::get('/home','Front\indexController@index')->name('home.index');
Route::get('/about','Front\indexController@about')->name('about.index');
Route::get('/contact','Front\indexController@contact')->name('contact.index');
Route::get('/products','Front\indexController@product')->name('products.index');
Route::get('/products/details/{id}','Front\indexController@productDetail')->name('product.detail');

//Auth
Route::namespace('Authentication')->group(function(){
    Route::post('login','AuthController@Login')->name('Login');
    Route::get('logout', 'AuthController@logout')->name('user.logout');
    Route::get('user-profile/edit','AuthController@edit')->name('user.profile');
    Route::post('user-profile/update','AuthController@update')->name('user.profile.update');
});

//Panel
Route::namespace('Panel')->group(function(){
    Route::prefix('user-aytan')->group(function(){  
        //user
        Route::get('user','UserController@show')->name('user.List')->middleware('admin');
        Route::get('add-user','UserController@store')->name('user.add')->middleware('admin');
        Route::post('store-user','UserController@create')->name('user.create')->middleware('admin');
        Route::get('edit-user/{id}','UserController@edit')->name('user.edit')->middleware('admin');
        Route::post('update-user','UserController@update')->name('user.update')->middleware('admin');
        Route::get('delete/{id}', 'UserController@destroy')->name('user.destroy')->middleware('admin');
        
        //product
        Route::resource('product', 'ProductController')->middleware('admin');
        Route::get('product/delete/{id}','ProductController@delete')->name('product.delete')->middleware('admin');

        //Urun Atama
        Route::resource('myproduct','MyproductController')->middleware('admin');
        Route::get('myproduct/delete/{id}','MyproductController@delete')->name('myproduct.delete')->middleware('admin');
        //Urunlerim
        Route::get('myprods','MyproductController@myproduct')->name('myproduct.myproduct')->middleware('customer');

        //support
        Route::get('support','SupportController@index')->name('support.index')->middleware('customer');
        Route::post('support/send','SupportController@store')->name('support.store')->middleware('customer');
        
        // FAQ's
        Route::resource('question', 'QuestionController')->middleware('admin');
        Route::get('question/delete/{id}','QuestionController@delete')->name('question.delete')->middleware('admin');

        //Settings
        Route::resource('setting','SettingController')->middleware('admin');

        //Contents
        Route::resource('content','ContentController')->middleware('admin');
    });
});




