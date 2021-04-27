<?php

Route::get('/', function () {
    //return view('welcome');
    //return view('home');
    return redirect('/login');
});


//admin(admin test)
Route::get('/admin', 'AdminController@index');

//logout
Route::get('logout', 'ManualsController@logout');

//index
Route::get('manuals', 'ManualsController@index')
    ->middleware('auth');

//create
Route::get('create', 'ManualsController@create')
    ->middleware('auth');

//customer_index
Route::get('customer', 'CustomerController@index')
    ->middleware('auth');

//customer_list
Route::get('customer/list', 'CustomerController@list')
    ->middleware('auth');

//customer_show
Route::get('customer/show', 'CustomerController@show')
    ->middleware('auth');

//customer_create
Route::get('customer/create', 'CustomerController@create')
    ->middleware('auth');
    // ユーザーは続けるためにパスワードの入力が必要
    //->middleware(['auth', 'password.confirm']);
Route::post('customer/create', 'CustomerController@add')
    ->middleware('auth');

//customer_edit_select
Route::get('customer/edit_select', 'CustomerController@edit_select')
    ->middleware('auth');
//customer_edit
Route::get('customer/edit', 'CustomerController@edit')
    ->middleware('auth');
Route::post('customer/edit', 'CustomerController@update')
    ->middleware('auth');

//customer_delete
Route::get('customer/del', 'CustomerController@delete')
    ->middleware('auth');
Route::post('customer/del', 'CustomerController@remove')
    ->middleware('auth');
//customer_selected
Route::get('customer/selected', 'CustomerController@selected')
    ->middleware('auth');


//service_index
Route::get('service', 'ServiceController@index')
    ->middleware('auth');

//service_select_category
Route::get('service/select_category', 'ServiceController@select_category')
    ->middleware('auth');

//service_create
Route::get('service/create', 'ServiceController@create')
    ->middleware('auth');
Route::post('service/create', 'ServiceController@add')
    ->middleware('auth');

//service_edit
Route::get('service/edit', 'ServiceController@edit')
    ->middleware('auth');
Route::post('service/edit', 'ServiceController@update')
    ->middleware('auth');

//service_delete
Route::get('service/del', 'ServiceController@delete')
    ->middleware('auth');
Route::post('service/del', 'ServiceController@remove')
    ->middleware('auth');

//service_select
Route::get('service/select', 'ServiceController@select')
    ->middleware('auth');

//サービス別一覧表示
//service_wakeup
Route::get('service/wakeup', 'ServiceController@wakeup')
    ->middleware('auth');
Route::get('service/bedtime', 'ServiceController@bedtime')
    ->middleware('auth');
Route::get('service/feeding', 'ServiceController@feeding')
    ->middleware('auth');
Route::get('service/bathing', 'ServiceController@bathing')
    ->middleware('auth');
Route::get('service/others', 'ServiceController@others')
    ->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
