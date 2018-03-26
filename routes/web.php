<?php

Route::get("/",'ImagesController@showall');
Route::get("image",'ImagesController@index');
Route::any("store",'ImagesController@store');
Route::get("show/{id}",'ImagesController@show');
