<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::group(['middleware'=>'auth'], function(){
//    Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function() {
//    });
//});

Route::view('admin/example', 'admin.example');
Route::view('admin/index', 'admin.index');

//Social Icons Add Links
Route::get('/admin/icon', ['as'=>'admin.social','uses'=>'SocialIconController@index']);
Route::post('/admin/icon/update', ['as'=>'admin.social.update', 'uses'=>'SocialIconController@addLinks']);

//ServiceCategory Categories Add, Edit, Delete
Route::get('/admin/category', ['as'=>'admin.category', 'uses'=>'ServiceCategoryController@index']);
Route::post('/admin/category/add', ['as'=>'admin.category.add', 'uses'=>'ServiceCategoryController@serviceAdd']);
Route::post('/admin/category/edit', ['as'=>'admin.category.edit', 'uses'=>'ServiceCategoryController@serviceEdit']);
Route::get('/admin/category/delete/{id}', ['as'=>'admin.category.delete', 'uses'=>'ServiceCategoryController@serviceDelete']);


//Background images Edit
Route::get('/admin/images', ['as'=>'admin.images', 'uses'=>'BackgroundImagesController@index']);
Route::post('/admin/image/update', ['as'=>'admin.image.edit', 'uses'=>'BackgroundImagesController@imageEdit']);


//About Us Add/Edit
Route::get('/admin/aboutus', ['as'=>'admin.aboutus', 'uses'=>'AboutUsController@index']);
Route::post('/admin/aboutus/edit', ['as'=>'admin.aboutus.edit', 'uses'=>'AboutUsController@aboutUsEdit']);

//About Staff Add/Edit
Route::get('/admin/aboutstaff', ['as'=>'admin.aboutstaff', 'uses'=>'AboutStaffController@index']);
Route::post('/admin/aboutstaff/edit', ['as'=>'admin.aboutstaff.edit', 'uses'=>'AboutStaffController@aboutStaffEdit']);