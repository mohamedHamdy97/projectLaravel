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


use App\Http\Controllers\all_controller;
use App\Category;
use App\Product;
use App\User;

Route::post('/Buy/{id}', 'all_controller@buy');

Route::get('/','all_controller@asd') ;
Route::get('/history.blade.php', function () {
    return view('history');
});
Route::get('/card/{id}',function ($id) {
    $asd=Product::find($id);

    return view('card',compact('asd'));
});
Route::get('adminorreg.blade.php', function () {
    return view('adminorreg');
});
//Route::resource('product','product_controller');
Route::get('/login', function () {
    return view('login');
});

Route::get('/posts.blade.php', 'all_controller@product');
Route::get('/remove/{id}', 'all_controller@removeuser');
Route::get('/users.blade.php','all_controller@user');
Route::get('/profile.blade.php', function () {
    return view('profile');
});
Route::get('/card.blade.php', function () {
    return view('card');
});
Route::get('/{id}/user', function ($id) {
    $user=Category::find($id)->products;
    return $user;
});
Route::get('/details.blade.php', function () {
    return view('details');
});
Route::get('/home.blade.php', function () {
    return view('home');
});
Route::get('/index.blade.php', 'all_controller@historyadmin')->name('adminpage');
Route::post('/index.blade.php','all_controller@addcategory')->name('asd');
Route::post('/index','all_controller@additem')->name('asd2');

Route::get('/details_cat.blade.php/{id}','all_controller@details_cat1');
Route::put('/details_cat/{id}','all_controller@update_cat' );

Route::get('/details.blade.php/{id}','all_controller@details_item');
Route::put('/details/{id}','all_controller@update_item' );


Route::get('/profile.blade.php/{id}','all_controller@details_profile');
Route::put('/profile/{id}','all_controller@update_profile' );

Route::get('/categories.blade.php', 'all_controller@category');
Route::get('/home1.blade.php','all_controller@home')->name('userpage');

Route::get('/pro.blade.php/{id}','all_controller@pro');
Route::get('/cat/{id}',function($id){
    $cat=Category::find($id);
    $cat->delete();
    return redirect('categories.blade.php');

});

Route::get('/removeacc/{id}',function($id){
    $user=User::find($id);
    $user->delete();
    return redirect('login');

});
Route::get('/pro/{id}',function($id){
    $pro=Product::find($id);
    $pro->delete();
    return redirect('posts.blade.php');

});
Route::get('/even/{n1}/{n2}','num@even_n');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
