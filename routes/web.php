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
    return view('welcome');
});


Route::group(['prefix' => 'api',  'middleware' => 'cors'], function () {

    Route::post('/register', 'UserController@register');
    Route::post('/login', 'UserController@login');
    Route::get('/activation/{email}', 'UserController@activation');

    // Route::group(['middleware' => 'auth'], function () {
        //User
        Route::get('/users', 'UserController@index');
        Route::get('/users/{id}', 'UserController@detail');
        Route::put('/users/{id}', 'UserController@update');
        Route::delete('/users/{id}', 'UserController@delete');

        //Contact Type
        Route::get('/contact_types', 'ContactTypesController@index');
        Route::get('/contact_types/{id}', 'ContactTypesController@detail');
        Route::post('/contact_types', 'ContactTypesController@store');
        Route::put('/contact_types/{id}', 'ContactTypesController@update');
        Route::delete('/contact_types/{id}', 'ContactTypesController@delete');

        //Laundry Type
        Route::get('/laundry_types', 'LaundryTypesController@index');
        Route::get('/laundry_types/{id}', 'LaundryTypesController@detail');
        Route::post('/laundry_types', 'LaundryTypesController@store');
        Route::put('/laundry_types/{id}', 'LaundryTypesController@update');
        Route::delete('/laundry_types/{id}', 'LaundryTypesController@delete');

        //Book
        Route::get('/books', 'BooksController@index');
        Route::get('/books/{id}', 'BooksController@detail');
        Route::post('/books', 'BooksController@store');
        Route::put('/books/{id}', 'BooksController@update');
        Route::delete('/books/{id}', 'BooksController@delete');

        //Book Category
        Route::get('/book_category', 'BookCategoryController@index');
        Route::get('/book_category/{id}', 'BookCategoryController@detail');
        Route::post('/book_category', 'BookCategoryController@store');
        Route::put('/book_category/{id}', 'BookCategoryController@update');
        Route::delete('/book_category/{id}', 'BookCategoryController@delete');

        //Keywords
        Route::get('/keywords', 'KeywordsController@index');
        Route::get('/keywords/{id}', 'KeywordsController@detail');
        Route::post('/keywords', 'KeywordsController@store');
        Route::put('/keywords/{id}', 'KeywordsController@update');
        Route::delete('/keywords/{id}', 'KeywordsController@delete');

        //Book Transactions
        Route::get('/book_transactions', 'BookTransactionsController@index');
        Route::get('/book_transactions/{id}', 'BookTransactionsController@detail');
        Route::post('/book_transactions', 'BookTransactionsController@store');
        Route::put('/book_transactions/{id}', 'BookTransactionsController@update');
        Route::delete('/book_transactions/{id}', 'BookTransactionsController@delete');
    // });
});

