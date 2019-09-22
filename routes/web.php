<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us/{name}/{email}','MyController@about');
Route::get('add','MyController@add');
Route::post('store','MyController@store');

Route::get('list','MyController@all');

Route::get('edit/{id}', 'MyController@edit');


Route::post('update/{id}','MyController@update');

Route::get('delete/{id}', 'MyController@delete');