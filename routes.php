<?php
    Route::resource('/', 'HomeController');
    Route::resource('book', 'BookController');
    Route::get('/book/(:number)/delete','BookController@destroy');
    Route::resource('author', 'AuthorController');
    Route::get('/author/(:number)/delete','AuthorController@destroy');
    Route::resource('publisher', 'PublisherController');
    Route::get('/publisher/(:number)/delete','PublisherController@destroy');
    Route::dispatch();
?>
