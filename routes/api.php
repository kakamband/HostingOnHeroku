<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'mobile', 'namespace' => 'Api'], function(){

	Route::get('/getRelatedCategoryProducts/{category}', 'CategoriesController@relatedProducts');

	Route::get('/getAdvertisements', 'AdvertisementsController@getAdvertisements');

	Route::get('/getProductDetails/{id}', 'ProductsController@productDetails');

	Route::get('/getDepartments', 'DepartmentsController@getDepartments');

});
