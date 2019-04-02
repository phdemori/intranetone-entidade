<?php
/*
  funções declaradas dentro do web.php geram erro no artisan config:cache, mensagem de declaração duplicada
  sem existir, por isso foi usado o helper;
*/

Route::group(['prefix' => 'admin', 'middleware' => ['web','admin'], 'as' => 'admin.'],function(){
    Route::group(['prefix' => 'entidade'], function () {
    Route::get('/','EntidadeController@index');
    Route::get('teste', 'EntidadeController@teste');
    Route::get('list', 'EntidadeController@list');
    Route::get('view/{id}', 'EntidadeController@view');
    Route::post('create', 'EntidadeController@create');
    Route::post('update/{id}', 'EntidadeController@update');
    Route::get('delete/{id}', 'EntidadeController@delete');			
  });
});
