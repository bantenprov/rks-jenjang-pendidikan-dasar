<?php

Route::group(['prefix' => 'rks-jen-pen-das', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\RKSJePenDas\Http\Controllers\RKSJePenDasController@index',
        'create'     => 'Bantenprov\RKSJePenDas\Http\Controllers\RKSJePenDasController@create',
        'store'     => 'Bantenprov\RKSJePenDas\Http\Controllers\RKSJePenDasController@store',
        'show'      => 'Bantenprov\RKSJePenDas\Http\Controllers\RKSJePenDasController@show',
        'update'    => 'Bantenprov\RKSJePenDas\Http\Controllers\RKSJePenDasController@update',
        'destroy'   => 'Bantenprov\RKSJePenDas\Http\Controllers\RKSJePenDasController@destroy',
    ];

    Route::get('/',$controllers->index)->name('rks-jen-pen-das.index');
    Route::get('/create',$controllers->create)->name('rks-jen-pen-das.create');
    Route::post('/store',$controllers->store)->name('rks-jen-pen-das.store');
    Route::get('/{id}',$controllers->show)->name('rks-jen-pen-das.show');
    Route::put('/{id}/update',$controllers->update)->name('rks-jen-pen-das.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('rks-jen-pen-das.destroy');

});

