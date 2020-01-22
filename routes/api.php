<?php

Route::resource('todos', 'TodoController');
Route::post('updateTodo/{id}', 'TodoController@update');
