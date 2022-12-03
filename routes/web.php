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
Route::get('/login', [\App\Http\Controllers\HomeController::class, 'login']);
Route::post('/post-login', [\App\Http\Controllers\HomeController::class, 'PostLogin']);
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/blog', [\App\Http\Controllers\HomeController::class, 'blog']);
//admin
Route::get('/quanly', [\App\Http\Controllers\AdminHomeController::class, 'index']);
Route::get('blog/add', 'App\Http\Controllers\BlogController@create'); 
Route::post('blog/add', 'App\Http\Controllers\BlogController@store'); 
Route::get('blog/details/{id}', 'App\Http\Controllers\HomeController@details'); 
Route::post('task/create-task', 'App\Http\Controllers\TaskController@store'); 
Route::get('task/edit/{id}', 'App\Http\Controllers\TaskController@edit'); 
Route::post('task/edit/update/{id}', 'App\Http\Controllers\TaskController@update'); 
Route::get('task/delete/{id}', 'App\Http\Controllers\TaskController@destroy'); 
Route::post('task/done', 'App\Http\Controllers\TaskController@done'); 
//user
Route::get('user', 'App\Http\Controllers\UserController@index'); 
Route::get('user/add', 'App\Http\Controllers\UserController@create'); 
Route::post('user/add', 'App\Http\Controllers\UserController@store'); 
Route::get('user/edit/{id}', 'App\Http\Controllers\UserController@edit'); 
Route::post('user/update/{id}', 'App\Http\Controllers\UserController@update'); 
Route::get('register', 'App\Http\Controllers\UserController@RegisterGet'); 
Route::post('register', 'App\Http\Controllers\UserController@RegisterPost'); 
//service like
Route::get('service-facebook/like-order-all', 'App\Http\Controllers\ServiceController@index'); 
Route::post('service-facebook/like-order-done', 'App\Http\Controllers\ServiceController@likedone');





//category
Route::get('category/list-category', 'App\Http\Controllers\CategoryController@index'); 
Route::get('category/create-category', 'App\Http\Controllers\CategoryController@create'); 
Route::post('category/create-category', 'App\Http\Controllers\CategoryController@store'); 
Route::get('task/details/{id}', 'App\Http\Controllers\CategoryController@details'); 
Route::post('task/edit-details/update/{id}', 'App\Http\Controllers\CategoryController@details'); 
//service
Route::get('service-facebook/list', 'App\Http\Controllers\HomeController@service_facebook'); 
Route::get('service-facebook/like-post', 'App\Http\Controllers\HomeController@like_post'); 
Route::post('service-facebook/like-post', 'App\Http\Controllers\HomeController@likeAdd'); 
Route::get('service-facebook/like-order-history', 'App\Http\Controllers\HomeController@OrderHistory'); 

//user
// Route::get('credit-card', 'App\Http\Controllers\CreditCardController@index'); 
// Route::get('{id}', 'App\Http\Controllers\CreditCardController@profile'); 

//open-hours
Route::get('open-hours/list', 'App\Http\Controllers\OpenHoursController@index');
Route::get('open-hours/add', 'App\Http\Controllers\OpenHoursController@create'); 
Route::post('open-hours/add', 'App\Http\Controllers\OpenHoursController@store'); 

//booking
Route::get('booking/list', 'App\Http\Controllers\BookingController@index');
Route::get('booking/add', 'App\Http\Controllers\BookingController@create'); 
Route::get('booking', 'App\Http\Controllers\BookingController@Booking_Order');
Route::post('booking', 'App\Http\Controllers\BookingController@Booking_Store'); 
Route::get('booking/edit/{id}', 'App\Http\Controllers\BookingController@edit'); 
Route::post('booking/update/{id}', 'App\Http\Controllers\BookingController@update'); 
Route::get('booking/delete/{id}', 'App\Http\Controllers\BookingController@destroy'); 
//service
Route::get('service/list', 'App\Http\Controllers\ServiceController@index');
Route::get('service/add', 'App\Http\Controllers\ServiceController@create');
Route::post('service/add', 'App\Http\Controllers\ServiceController@store');
// Route::group(['middleware' => ['auth']], function () {

// //  dashboard
// // Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/', 'HomeController@index');
// // category
// Route::get('danh-muc/tao-danh-muc', 'CategoryController@create'); 
// Route::post('danh-muc/tao-danh-muc', 'CategoryController@store'); 
// Route::get('admin/category/{id}/edit', 'CategoryController@edit'); 
// Route::post('admin/category/update', 'CategoryController@update'); 
// Route::get('danh-muc/delete/{id}', 'CategoryController@destroy'); 
// // products
// Route::get('san-pham/danh-sach-san-pham', 'ProductController@index');
// Route::get('san-pham/tao-san-pham', 'ProductController@create'); 
// Route::post('san-pham/tao-san-pham', 'ProductController@store');
// Route::get('san-pham/edit/{id}', 'ProductController@redit');
// Route::post('san-pham/update', 'ProductController@update');
// Route::get('san-pham-delete/{id}',  'ProductController@destroy'); 
// Route::get('admin/san-pham/{id}/show', 'ProductsController@show');
// Route::get('get-post-slug', 'san-phamController@getSlug')->name('posts.getslug');


// Route::get('admin/unactive-products/{id}', 'ProductsController@unactive'); 
// Route::get('admin/active-products/{id}', 'ProductsController@active');
// //workshop
// Route::get('nhan-cung-cap/tao-nha-cung-cap', 'WorkshopController@create'); 
// Route::post('nhan-cung-cap/tao-nha-cung-cap', 'WorkshopController@store'); 
// Route::get('admin/workshop/{id}/edit', 'CategoryController@edit'); 
// Route::post('admin/workshop/update', 'CategoryController@update'); 
// Route::get('workshop-delete/{id}', 'WorkshopController@destroy'); 
// //POS bán hàng
// Route::get('pos-ban-hang', 'PosController@index');
// Route::post('search', 'PosController@getSearchAjax')->name('pos-ban-hang');



// // Cart
// Route::get('add-cart-ajax', 'PosController@add_cart_ajax');
// Route::post('save-cart', 'PosController@SaveCart'); 
// Route::get('datele-to-cart/{rowId}', 'PosController@datele_to_cart');
// // Users
// Route::get('user/danh-sach-nguoi-dung', 'UsersController@index'); 
// Route::post('user/tao-nguoi-dung', 'UsersController@store'); 
// Route::get('user/xoa-nguoi-dung/{id}', 'UsersController@destroy'); 

// Route::post('search-nguoi-dung', 'UsersController@getSearchAjax');
// // Nhân Viên
// Route::get('nhan-vien/danh-sach-nhan-vien', 'NhanvienController@index'); 
// Route::get('nhan-vien/tao-nhan-vien', 'NhanvienController@create'); 
// Route::post('nhan-vien/tao-nhan-vien', 'NhanvienController@store'); 
// Route::get('logout', 'NhanvienController@Logout'); 
// Route::get('edit-nhan-vien/{id}', 'NhanvienController@edit');
// Route::post('nhan-vien/update', 'NhanvienController@update'); 
// Route::get('delete-nhan-vien/{id}', 'NhanvienController@destroy'); 

// // calendar
// Route::get('fullcalendar', 'CalendarController@index');
// Route::post('full-calender/action','CalendarController@action');
// // chat
// Route::get('chat', 'ChatController@index');
// Route::post('send','ChatController@store');
// Route::get('remove-chat/{id}','ChatController@remove');





