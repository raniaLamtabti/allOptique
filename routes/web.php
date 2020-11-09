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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Categories
Route::get('/categories', 'CategorieController@index')->name('categorie.index');
Route::get('/categorieList', 'CategorieController@list')->name('categorie.list');
Route::get('/addCategorie', 'CategorieController@create')->name('categorie.create');
Route::post('/categorieStore', 'CategorieController@store')->name('categorie.store');
Route::put('/categorieUpdate/{id}', 'CategorieController@update')->name('categorie.update');

//Marques
Route::get('/marques', 'MarqueController@index')->name('marque.index');
Route::get('/marqueList', 'MarqueController@list')->name('marque.list');
Route::get('/addMarque', 'MarqueController@create')->name('marque.create');
Route::post('/marqueStore', 'MarqueController@store')->name('marque.store');
Route::put('/marqueUpdate/{id}', 'MarqueController@update')->name('marque.update');

//products
Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/productList', 'ProductController@list')->name('product.list');
Route::get('/productKid', 'ProductController@kid')->name('product.kid');
Route::get('/productWomen', 'ProductController@womenLimit')->name('product.women');
Route::get('/addProduct', 'ProductController@create')->name('product.create');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');
Route::post('/productStore', 'ProductController@store')->name('product.store');
Route::get('/editProduct/{id}', 'ProductController@edit')->name('product.edit');
Route::put('/productUpdate/{id}', 'ProductController@update')->name('product.update');
Route::delete('/productDestroy/{id}', 'ProductController@destroy')->name('product.destroy');