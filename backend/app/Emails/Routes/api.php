<?php

Route::get('emails', 'EmailController@index')
    ->name('emails.index');

Route::post('emails', 'EmailController@store')
    ->name('emails.store');

Route::get('emails/{email}', 'EmailController@show')
    ->name('emails.show');

Route::put('emails/{email_id}', 'EmailController@update')
    ->name('emails.update');

Route::patch('emails/{email_id}/disable', 'EmailController@disable')
    ->name('emails.disable');

Route::patch('emails/{email_id}/enable', 'EmailController@enable')
    ->name('emails.enable');

Route::delete('emails/{email_id}', 'EmailController@destroy')
    ->name('emails.delete');
