<?php
Route::prefix('/admin')->group(function () {
    Route::get('/','Admin\DashboardController@getDashboard');
    Route::get('/users','Admin\UserController@getUsers');
    //modulo de productos
    Route::get('/products','Admin\ProductController@getHome');
    Route::get('/product/add','Admin\ProductController@getProductAdd');
    //Categorias

    Route::get('/categories/{module}','Admin\CategoriesController@getHome');
    Route::post('/category/add','Admin\CategoriesController@postCategoryAdd');
    Route::get('/category/{id}/edit','Admin\CategoriesController@getCategoryEdit');
    Route::post('/category/{id}/edit','Admin\CategoriesController@postCategoryEdit');
    Route::get('/category/{id}/delete','Admin\CategoriesController@getCategoryDelete');

});
?>