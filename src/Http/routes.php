<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Hemich\productso\Http\Controllers'], function () {
    Route::get('category/{slug?}', 'PrsoCategoryController@show');
});

