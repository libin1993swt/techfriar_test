<?php

Route::group(['namespace' => 'Techfriar\Itemlist\Http\Controllers'], function (){
    Route::get('items','ItemController@index');
});
