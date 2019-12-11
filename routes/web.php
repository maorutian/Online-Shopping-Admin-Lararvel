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
    return redirect('admin/home');
});

////////////////////////////////////////Admin/////////////////////////
//without login
Route::group(['prefix' => 'admin','middleware' => 'guest:admin'], function () {
    Route::get('login', 'AdminController\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminController\LoginController@login');

});

//need login
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('logout', 'AdminController\loginController@logout')->name('admin.logout');

    Route::get('home', function () {
        return view('admin.index');
    })->name('admin.home');
    Route::get('/product', 'AdminController\ProductController@index')->name('products');
    Route::get('/product/new', 'AdminController\ProductController@create')->name('product_new');
    Route::post('/product/new', 'AdminController\ProductController@store')->name('product_new');
    Route::get('/product/detail{id}', 'AdminController\ProductController@show')->name('product_detail');
    Route::get('/product/update{id}', 'AdminController\ProductController@edit')->name('product_update');
    Route::post('/product/update{id}', 'AdminController\ProductController@update')->name('product_update');
    Route::get('/product/delete{id}', 'AdminController\ProductController@destroying')->name('product_delete');
    Route::post('/product/delete{id}', 'AdminController\ProductController@destroy')->name('product_delete');

    Route::resource('/category', 'AdminController\CategoryController');
    Route::get('/category/deleting/{id}', 'AdminController\CategoryController@deleting');

    Route::get('/employee', 'AdminController\EmployeeController@index')->name('employees');
    Route::get('/employee/new', 'AdminController\EmployeeController@create')->name('employee_new');
    Route::post('/employee/new', 'AdminController\EmployeeController@store')->name('employee_new');
    Route::get('/employee/detail{id}', 'AdminController\EmployeeController@show')->name('employee_detail');
    Route::get('/employee/update{id}', 'AdminController\EmployeeController@edit')->name('employee_update');
    Route::post('/employee/update{id}', 'AdminController\EmployeeController@update')->name('employee_update');
    Route::get('/employee/pwdupdate{id}', 'AdminController\EmployeeController@editPwd')->name('employee_update_pwd');
    Route::post('/employee/pwdupdate{id}', 'AdminController\EmployeeController@updatePwd')->name('employee_update_pwd');
    Route::get('/employee/delete{id}', 'AdminController\EmployeeController@destroying')->name('employee_delete');
    Route::post('/employee/delete{id}', 'AdminController\EmployeeController@destroy')->name('employee_delete');

});




