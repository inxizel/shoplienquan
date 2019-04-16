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
    //return view('welcome');

 //    $kichhoat = cookie('kichhoat', 'yes', 60*24*365);
	// return response('Hello World')->cookie($kichhoat);
});




//Admin
Route::get('/admin', function () {
    return redirect('admin/login');
});
Route::prefix('admin')->group(function(){
	Auth::routes();

	Route::get('/tool',function(){
		echo 1 ;
	});


	Route::middleware('auth')->group(function(){
		Route::get('/dashboard',function(){
			return view ('admin.dashboard.index');
		});
		Route::resource('/user','UserController');

		Route::resource('/lienquan/rank','LienquanRankController');
		Route::resource('/lienquan','LienquanController');

		Route::get('/product/detail/{id}', 'ProductController@detail');	

		Route::get('/product-image', function ()
		{
			return view('admin.product.uploadImages');
		});	
		Route::post('/product-image','ProductController@uploadImages');	




	});

});		
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

