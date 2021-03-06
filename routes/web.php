<?php

use App\Usuario;
use Illuminate\Auth\Access\Response;
use App\Http\Controllers\AjaxControllerCarval;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get ( '/', function () {
	return view ( 'welcome' );
} );

Auth::routes ();

Route::get ( '/home', 'HomeController@index' );
Route::get ( '/users/logout', 'Auth\LoginController@userLogout' )->name ( 'user.logout' );

route::get ( '/validation', function () {
	return view ( 'admin' );
} );

// Route::get('/validation', function (){
// return view('usuarios.fragment.form');
// });
Route::DELETE ( '/eliminar-producto/{id}', 'HomeController@destroyProduct' )->name ( 'destroyProduct' );
Route::resource ( 'usuarios', 'UsuarioController' );

Route::prefix ( 'admin' )->group ( function () {
	Route::get ( '/login', 'Auth\AdminLoginController@showLoginForm' )->name ( 'admin.login' );
	Route::post ( '/login', 'Auth\AdminLoginController@login' )->name ( 'admin.login.submit' );
	Route::get ( '/', 'AdminController@index' )->name ( 'admin.dashboard' );
	Route::get ( '/logout', 'Auth\AdminLoginController@logout' )->name ( 'admin.logout' );
	
	// Password reset routes
	Route::post ( '/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail' )->name ( 'admin.password.email' );
	Route::get ( '/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm' )->name ( 'admin.password.request' );
	Route::post ( '/password/reset', 'Auth\AdminResetPasswordController@reset' );
	Route::get ( '/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm' )->name ( 'admin.password.reset' );
} );
	Route::delete('/eliminar-usuario/{id}','UsuarioController@destroyUsuario')->name('destroyUsuario');
	Route::get('/datatable', 'AjaxController@getUsuarios');
	Route::get('/deleteUsuarios/{id}', 'AjaxController@deleteUsuario');
	Route::get('/updateUser/{id}', 'AjaxController@updateUsuario');
	
	
// 	Route::get('/showUser/{id}', function ($id) {
// 		return 'User '.$id;
// 	});
	
// 	Route::get('/tblConsolidacion','AjaxControllerCarval@getDatosConsolidacion');
	    Route::get('/tblConsolidacion',function () {
	        return AjaxControllerCarval::getDatosConsolidacion();
	    });
	    Route::get('/tblGraficosVentas',function () {
	        return AjaxControllerCarval::getGraficosVentas();
	    });
	    Route::get('/tblGraficosMargen',function () {
	        return AjaxControllerCarval::getGraficoMargen();
	    });
	    Route::get('/datatableINDMVentas', 'AjaxControllerCarval@getDatabaseVentas');
	
	Route::get('/showUser/{id}', 'AjaxController@mostrarUsuario');
	
	Route::get('/showUserByID', 'AjaxControllerUsuario@getUsuarioByID');
	
	Route::get('/user/find', ['middleware' => 'auth', 'AjaxControllerUsuario' => 'GroupController@getUsuarioByID']);

// 	Route::get('/ajaxDataTableUsuarios', function () {
// 		$users = Usuario::select(['id','NUM_IDENTIFICACION'])->get();
// 		return Response::json(Datatables::of($users)->make());
// 	})->name('datatable.usuarios');
	
	
