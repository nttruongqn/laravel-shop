<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('index');
// });


Auth::routes();
Route::group(['namespace' => 'Auth'], function () {
    Route::get('dang-ky', 'RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky', 'RegisterController@postRegister')->name('post.register');
    Route::get('dang-nhap', 'LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap', 'LoginController@postLogin')->name('post.login');
    Route::get('dang-xuat', 'LoginController@getLogOut')->name('get.logout.user');
});

Route::prefix('shopping')->group(function () {
    Route::get('add/{id}', 'ShoppingCartController@addProduct')->name('add.shopping.cart');
    Route::get('delete/${id}', 'ShoppingCartController@deleteProductItem')->name('delete.shopping.cart');
    Route::get('danh-sach','ShoppingCartController@getListShoppingCart')->name('get.shopping.cart');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('danh-muc/{slug}-{id}', 'CategoryController@getListProduct')->name('get.list.product');
Route::get('san-pham/{slug}-{id}', 'ProductDetailController@productDetail')->name('get.detail.product');

Route::group(['prefix' => 'gio-hang', 'middleware' => 'CheckLoginUser'], function () {
    Route::get('thanh-toan', 'ShoppingCartController@getFormPay')->name('get.form.pay');
    Route::post('thanh-toan', 'ShoppingCartController@saveShoppingCartInfo');
});

Route::get('lien-he', 'ContactController@getContact')->name('get.contact');
Route::post('lien-he', 'ContactController@saveContact');


Route::group(['prefix' => 'ajax', 'middleware' => 'CheckLoginUser'], function () {
    Route::post('danh-gia/{id}', 'RatingController@saveRating')->name('post.rating.product');
});
