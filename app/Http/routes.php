<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
*/

Route::get('/', function () {
    return view('layouts.index');
});


Route::get('/home', function() {
	return view('layout.default');
	});

Route::group(['middleware' => ['web']],function() {
	Route::resource('mahasiswa','MahasiswaController');
	Route::resource('dosen','DosenController');
	Route::resource('perusahaan','PerusahaanController');
	Route::resource('pkl','PklController');
	Route::resource('prodi','ProdiController');
	Route::resource('status','StatusController');
	Route::resource('bidang','BidangController');

	Route::get('bidang', ['as' => 'bidang', 'uses' => 'BidangController@index']);
	Route::get('status', ['as' => 'status', 'uses' => 'StatusController@index']);
	Route::get('mahasiswa', ['as' => 'mahasiswa', 'uses' => 'MahasiswaController@index']);
	Route::get('dosen', ['as' => 'dosen', 'uses' => 'DosenController@index']);
	Route::get('perusahaan', ['as' => 'perusahaan', 'uses' => 'PerusahaanController@index']);
	Route::get('pkl', ['as' => 'pkl', 'uses' => 'PklController@index']);
	Route::get('prodi', ['as' => 'prodi', 'uses' => 'ProdiController@index']);		
});
Route::auth();

Route::group(['middleware' => ['auth']], function() {

	Route::resource('users','UserController');
	Route::get('/user','UserController@index');

	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['role:		Admin']]);

	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);

	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);

	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);

	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);

	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);

	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
	// =====================================================================================

	Route::get('permission-role',['as'=>'permissionrole.index','uses'=>'PermissionRoleController@index','middleware' => ['role:Admin']]);

	Route::get('permission-role/create',['as'=>'permissionrole.create','uses'=>'PermissionRoleController@create','middleware' => ['role:Admin']]);

	Route::post('permission-role/create',['as'=>'permissionrole.store','uses'=>'PermissionRoleController@store','middleware' => ['role:Admin']]);

	Route::get('permission-role/permission/{permissionId}/role/{roleId}/edit', ['as'=>'permissionrole.edit','uses'=>'PermissionRoleController@edit','middleware' => ['role:Admin']]);

	Route::patch('permission-role/permission/{permissionId}/role/{roleId}/edit', ['as'=>'permissionrole.update','uses'=>'PermissionRoleController@update','middleware' => ['role:Admin']]);

	Route::get('permission-role/{permission-id}/{role-id}',['as'=>'permissionrole.show','uses'=>'PermissionRoleController@show','middleware' => ['role:Admin']]);

	// Route::patch('permission-role/{id}',['as'=>'permissionrole.update','uses'=>'PermissionRoleController@update','middleware' => ['role:Admin']]);

	Route::patch('permission-role/{id}',['as'=>'permissionrole.destroy','uses'=>'PermissionRoleController@destroy','middleware' => ['role:Admin']]);

	Route::delete('permission-role/{id}',['as'=>'permissionroles.destroy','uses'=>'PermissionRoleController@destroy','middleware' => ['role:Admin']]);
	// =======================================================================================
	Route::get('permission',['as'=>'permission.index','uses'=>'PermissionController@index','middleware' => ['role:Admin']]);

	Route::get('permission/create',['as'=>'permission.create','uses'=>'PermissionController@create','middleware' => ['role:Admin']]);

	Route::post('permission/create',['as'=>'permission.store','uses'=>'PermissionController@store','middleware' => ['role:Admin']]);

	Route::get('permission/{id}',['as'=>'permission.show','uses'=>'PermissionController@show','middleware' => ['role:Admin']]);

	Route::get('permission/{id}/edit',['as'=>'permission.edit','uses'=>'PermissionController@edit','middleware' => ['role:Admin']]);

	Route::patch('permission/{id}/edit',['as'=>'permission.update','uses'=>'PermissionController@update','middleware' => ['role:Admin']]);

	Route::patch('permission/{id}',['as'=>'permission.destroy','uses'=>'PermissionController@destroy','middleware' => ['role:Admin']]);

	Route::delete('permission/{id}',['as'=>'permission.destroy','uses'=>'PermissionController@destroy','middleware' => ['role:Admin']]);
});
