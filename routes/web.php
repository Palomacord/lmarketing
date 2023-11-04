<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@home')->name('site.index');
Route::get('/index', 'HomeController@index')->name('site.begin');
Route::get('/product','ProductController@product')->name('site.product');
Route::get('/contact', "ContactController@index")->name('site.contact');
Route::post('/contact', "ContactController@index")->name('site.contact');
Route::get('/login',function(){
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function (){
    Route::get('/clients','ClientsController@clients')->name('app.clients');
    Route::get('/suppliers','SuppliersController@index')->name('app.suppliers');
    Route::get('/products','ProductsController@products')->name('app.products');
});



Route::get('/contact/{name}', 'ContactController@contact')->where('name','[A-Za-z]+' );



#callback rou   te

Route::fallback(function(){
    echo "A rota acessada não existe <a href=".route(site.index).">click aqui</a>";
});

##redirect example
Route::get('/route1' ,function(){
    echo 'route1';
})->name('site.route1');



Route::redirect('/route2','/route1');
Route::get('/route2' ,function(){
    return redirect()->route('site.route1');
})->name('site.route2');
