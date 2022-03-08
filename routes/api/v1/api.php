<?php

/*
|--------------------------------------------------------------------------
| Blog Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your package.
|
*/


use Cpuche\Blog\Api\Http\Controllers\CategoryController;

/**
 * Api version 1
 */
Route::prefix('/api/blog/v1')->group(function(){
	
	/**
	 * Categories
	 */
	Route::prefix('/categories')->group(function(){
		Route::get('/', [CategoryController::class, 'index']);
	});
});
