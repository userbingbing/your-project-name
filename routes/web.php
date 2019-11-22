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
Route::get('/admin', function(){
	return '这是后台首页';
})->name('admin');
Route::post('/insert', function(){
	
});
Route::put('/put', function(){
	
});
//路由带参数
Route::get('/user/{id}', function($id){
	echo $id;
})->where('id','\d+');
//传递多个参数
Route::get('/getprams/{name}/{id}', function($name ,$id){
	echo $name;
	echo $id;
});


Route::get('/login', function(){
	return '登录';
});
Route::group(['middleware'=>'login'],function(){
	Route::get('/home', function(){
	echo '<a href="'.route("admin").'">后台</a>';
	});
});

Route::get('/user/add/','UserController@add');

Route::resource('home','HomeController');
