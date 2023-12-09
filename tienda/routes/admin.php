<?php
Route::prefix('/admin')->group(function () {
    Route::get('/','Admin\DashboardController@getDashboard');
    Route::get('/users','Admin\UserController@getUsers');
    //modulo de productos
    Route::get('/products','Admin\ProductController@getHome');
    Route::get('/product/add','Admin\ProductController@getProductAdd');

});
?>