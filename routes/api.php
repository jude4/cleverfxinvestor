<?php

use Illuminate\Http\Request;



    Route::post('/deposit', 'DepositeController@store');
    Route::post('/deposit/upload', 'DepositeController@uploadProof');
    Route::post('/reviews', 'ReviewController@store');