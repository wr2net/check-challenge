<?php

Route::get('cakes', 'CakeController@index')
    ->name('cakes.index');

Route::post('cakes', 'CakeController@store')
    ->name('cakes.store');

Route::get('cakes/{cake_id}', 'CakeController@show')
    ->name('cakes.show');

Route::put('cakes/{cake_id}', 'CakeController@update')
    ->name('cakes.update');

Route::patch('cakes/{cake_id}/disable', 'CakeController@disable')
    ->name('cakes.disable');

Route::patch('cakes/{cake_id}/enable', 'CakeController@enable')
    ->name('cakes.enable');

Route::delete('cakes/{cake_id}', 'CakeController@destroy')
    ->name('cakes.delete');
