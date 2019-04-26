<?php
Route::resource('posts','PostController');

Route::get('/', function () {
    return view('welcome');
});
