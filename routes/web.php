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

Route::group([],function()
{
	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);	
	Route::get('/page/{alias}',['uses'=>'AboutsController@execute','as'=>'page']);
	Route::auth();
});
Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
	{
		Route::get('/',function()
		{
			$data=['title'=>'Админ Панель'];
			return view('admin.index',$data);
		});
		Route::group(['prefix'=>'pages'],function()
		{
       		Route::get('/', ['uses' => 'admin\PagesController@index', 'as' => 'pages']);
        Route::get('/add', ['uses' => 'admin\PagesController@create', 'as' => 'pagesadd']);
        Route::post('/add', ['uses' => 'admin\PagesController@store', 'as' => 'pagesStore']);
        Route::delete('/edit/{page}', ['uses' => 'admin\PagesController@destroy', 'as' => 'pagesDestroy']);
        Route::get('/edit/{page}', ['uses' => 'admin\PagesController@edit', 'as' => 'pagesEdit']);
        Route::patch('/edit/{page}', ['uses' => 'admin\PagesController@update', 'as' => 'pagesUpdate']);
     	
		});
		Route::group(['prefix'=>'portfolios'],function()
		{
			Route::get('/', ['uses' => 'admin\PortfolioController@index', 'as' => 'portfolios']);
        Route::get('/add', ['uses' => 'admin\PortfolioController@create', 'as' => 'portfoliosAdd']);
        Route::post('/add', ['uses' => 'admin\PortfolioController@store', 'as' => 'portfoliosStore']);
        Route::get('/edit/{service}', ['uses' => 'admin\PortfolioController@edit', 'as' => 'portfoliosEdit']);
        Route::patch('/edit/{service}', ['uses' => 'admin\PortfolioController@update', 'as' => 'portfoliosUpdate']);
        Route::delete('/edit/{service}', ['uses' => 'admin\PortfolioController@destroy', 'as' => 'portfoliosDestroy']);
		});
		Route::group(['prefix'=>'services'],function()
		{
			Route::get('/', ['uses' => 'admin\ServiceController@index', 'as' => 'services']);
        Route::get('/add', ['uses' => 'admin\ServiceController@create', 'as' => 'servicesAdd']);
        Route::post('/add', ['uses' => 'admin\ServiceController@store', 'as' => 'servicesStore']);
        Route::get('/edit/{portfolio}', ['uses' => 'admin\ServiceController@edit', 'as' => 'servicesEdit']);
        Route::patch('/edit/{portfolio}', ['uses' => 'admin\ServiceController@update', 'as' => 'servicesUpdate']);
        Route::delete('/edit/{portfolio}', ['uses' => 'admin\ServiceController@delete', 'as' => 'servicesDelete']);
		});
		Route::group(['prefix'=>'blogs'],function()
		{
			Route::get('/', ['uses' => 'admin\BlogController@index', 'as' => 'blogs']);
        Route::get('/add', ['uses' => 'admin\BlogController@create', 'as' => 'blogsAdd']);
        Route::post('/add', ['uses' => 'admin\BlogController@store', 'as' => 'blogsStore']);
        Route::get('/edit/{portfolio}', ['uses' => 'admin\BlogController@edit', 'as' => 'blogsEdit']);
        Route::patch('/edit/{portfolio}', ['uses' => 'admin\BlogController@update', 'as' => 'blogsUpdate']);
        Route::delete('/edit/{portfolio}', ['uses' => 'admin\BlogController@destroy', 'as' => 'blogsDestroy']);
		});
});
Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');
