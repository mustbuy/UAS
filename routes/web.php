<?php












Route::get('/',function() {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'product'], function() {
    Route::get('/', 'ProductController@index');
    Route::get('/new', 'ProductController@create');
    Route::post('/', 'ProductController@save');
    Route::get('/{id}', 'ProductController@edit');
    Route::put('/{id}', 'ProductController@update');
    Route::delete('/{id}', 'ProductController@destroy');
});
Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'CustomerController@index');
    Route::get('/new', 'CustomerController@create');
    Route::post('/', 'CustomerController@save');
    Route::get('/{id}', 'CustomerController@edit');
    Route::put('/{id}', 'CustomerController@update');
    Route::delete('/{id}', 'CustomerController@destroy');
});
