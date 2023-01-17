<?php
     Route::prefix('admin/vintari/')->name('admin.vintari.')->group(function () {
        Route::post('data', 'Vintari\AdminController@dataTable')->name('data');
        Route::get('upload-file/{var}', 'Vintari\AdminController@uploadFile')->name('upload-file');
     });
      
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('vintari', 'Vintari\AdminController');
    });