<?php

Route::get('/', 'Admin\\HomeController@index')->name('dashboard');

Route::get('/author', 'Admin\\AuthorController@index')->name('author.index');

Route::get('/author/create', 'Admin\\AuthorController@create')->name('author.create');

Route::post('/author', 'Admin\\AuthorController@store')->name('author.store');

Route::get('/author/{author}/edit', 'Admin\\AuthorController@edit')->name('author.edit');

Route::put('/author/{author}', 'Admin\\AuthorController@update')->name('author.update');

Route::get('/author/data', 'Admin\\DataController@authors')->name('author.data');