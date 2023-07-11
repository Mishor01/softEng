<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TypesController;
use App\Http\Controllers\Admin\RestaurantsController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WidgetsController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Customer\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	
	
Route::get('/', [IndexController::class, 'index']);
	
Route::post('login', [IndexController::class, 'postLogin']);
Route::get('logout', [IndexController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('profile', [AdminController::class, 'profile']);
Route::post('profile', [AdminController::class, 'updateProfile']);
Route::post('profile_pass', [AdminController::class, 'updatePassword']);
	
Route::get('settings', [SettingsController::class, 'settings']);
Route::post('settings', [SettingsController::class, 'settingsUpdates']);
Route::post('homepage_settings', [SettingsController::class, 'homepage_settings']);
Route::post('addthisdisqus', [SettingsController::class, 'addthisdisqus']);
Route::post('headfootupdate', [SettingsController::class, 'headfootupdate']);

	 
Route::get('types', [TypesController::class, 'types']);
Route::get('types/addtype', [TypesController::class, 'addeditType']);
Route::get('types/addtype/{id}', [TypesController::class, 'editType']);
Route::post('types/addtype', [TypesController::class, 'addnew']);
Route::get('types/delete/{id}', [TypesController::class, 'delete']);

Route::get('restaurants', [RestaurantsController::class, 'restaurants']);
Route::get('restaurants/addrestaurant', [RestaurantsController::class, 'addeditrestaurant']);
Route::get('restaurants/addrestaurant/{id}', [RestaurantsController::class, 'editrestaurant']);
Route::post('restaurants/addrestaurant', [RestaurantsController::class, 'addnew']);
Route::get('restaurants/delete/{id}', [RestaurantsController::class, 'delete']);
Route::get('restaurants/view/{id}', [RestaurantsController::class, 'restaurantview']);
	
Route::get('restaurants/view/{id}/categories', [CategoriesController::class, 'categories']);
Route::get('restaurants/view/{id}/categories/addcategory', [CategoriesController::class, 'addeditCategory']);
Route::get('restaurants/view/{id}/categories/addcategory/{cat_id}', [CategoriesController::class, 'editCategory']);
Route::post('restaurants/view/{id}/categories/addcategory', [CategoriesController::class, 'addnew']);
Route::get('restaurants/view/{id}/categories/delete/{cat_id}', [CategoriesController::class, 'delete']);

Route::get('restaurants/view/{id}/menu', [MenuController::class, 'menulist']);
Route::get('restaurants/view/{id}/menu/addmenu', [MenuController::class, 'addeditmenu']);
Route::get('restaurants/view/{id}/menu/addmenu/{menu_id}', [MenuController::class, 'editmenu']);
Route::post('restaurants/view/{id}/menu/addmenu', [MenuController::class, 'addnew']);
Route::get('restaurants/view/{id}/menu/delete/{menu_id}', [MenuController::class, 'delete']);

Route::get('restaurants/view/{id}/orderlist', [OrderController::class, 'orderlist']);
Route::get('restaurants/view/{id}/orderlist/{order_id}/{status}', [OrderController::class, 'order_status']);
Route::get('restaurants/view/{id}/orderlist/{order_id}', [OrderController::class, 'delete']);

Route::get('restaurants/view/{id}/review', [RestaurantsController::class, 'reviewlist']);

Route::get('allorder', [OrderController::class, 'alluser_order']);

	//Owner
	Route::get('myrestaurants', [RestaurantsController::class, 'my_restaurants']);

	Route::get('categories', [CategoriesController::class, 'owner_categories']);
	Route::get('categories/addcategory', [CategoriesController::class, 'owner_addeditCategory']);
	Route::get('categories/addcategory/{cat_id}', [CategoriesController::class, 'editCategory']);
	Route::post('categories/addcategory', [CategoriesController::class, 'addnew']);
	Route::get('categories/delete/{cat_id}', [CategoriesController::class, 'delete']);
	
	Route::get('menu', [MenuController::class, 'owner_menu']);
	Route::get('menu/addmenu', [MenuController::class, 'owner_addeditmenu']);
	Route::get('menu/addmenu/{menu_id}', [MenuController::class, 'owner_editmenu']);
	Route::post('menu/addmenu', [MenuController::class, 'addnew']);
	Route::get('menu/delete/{menu_id}', [MenuController::class, 'delete']);
	
	Route::get('orderlist', [OrderController::class, 'owner_orderlist']);
	Route::get('orderlist/{order_id}/{status}', [OrderController::class, 'owner_order_status']);
	Route::get('orderlist/{order_id}', [OrderController::class, 'owner_delete']);
	
	Route::get('reviews', [RestaurantsController::class, 'owner_reviewlist']);

	 

	
	Route::get('users', [UsersController::class, 'userslist']);
	Route::get('users/adduser', [UsersController::class, 'addeditUser']);
	Route::post('users/adduser', [UsersController::class, 'addnew']);
	Route::get('users/adduser/{id}', [UsersController::class, 'editUser']);
	Route::get('users/delete/{id}', [UsersController::class, 'delete']);
	
	Route::get('widgets', [WidgetsController::class, 'index']);
	Route::post('footer_widgets', [WidgetsController::class, 'footer_widgets']);
	Route::post('about_widgets', [WidgetsController::class, 'about_widgets']);
	Route::post('socialmedialink', [WidgetsController::class, 'socialmedialink']);
	Route::post('need_help', [WidgetsController::class, 'need_help']);
	Route::post('featuredpost', [WidgetsController::class, 'featuredpost']);
	Route::post('advertise', [WidgetsController::class, 'advertise']);
	
});

Route::get('/', [IndexController::class, 'index']);

Route::get('login', [IndexController::class, 'login']);

Route::post('login', [IndexController::class, 'postLogin']);

Route::get('register', [IndexController::class, 'register']);

Route::post('register', [IndexController::class, 'register_user']);

Route::get('logout', [IndexController::class, 'logout']);

Route::get('profile', [IndexController::class, 'profile']);

Route::post('profile', [IndexController::class, 'editprofile']);

Route::get('change_pass', [IndexController::class, 'change_password']);

Route::post('change_pass', [IndexController::class, 'edit_password']);


Route::get('about', [IndexController::class, 'about_us']);

Route::get('contact', [IndexController::class, 'contact_us']);

Route::get('search', [RestaurantController::class, 'search']);

Route::get('restaurants', [RestaurantController::class, 'index']);

Route::get('restaurants/type/{type}', [RestaurantController::class, 'restaurants_type']);

Route::get('restaurants/rating/{rating}', [RestaurantController::class, 'restaurants_rating']);

Route::post('restaurants/search', [RestaurantController::class, 'restaurants_search']);

Route::get('restaurants/menu/{slug}', [RestaurantController::class, 'restaurants_menu']);

Route::get('restaurants/{slug}', [RestaurantController::class, 'restaurants_details']);

Route::post('restaurants/{slug}/restaurant_review', [RestaurantController::class, 'restaurant_review']);

Route::get('add_item/{item_id}', [CartController::class, 'add_cart_item']);

Route::get('delete_item/{item_id}', [CartController::class, 'delete_cart_item']);

Route::get('order_details', [CartController::class, 'order_details']);

Route::post('order_details', [CartController::class, 'confirm_order_details']);

Route::get('myorder', [CartController::class, 'user_orderlist']);

Route::get('cancel_order/{order_id}', [CartController::class, 'cancel_order']);




// Password reset link request routes...
Route::get('admin/password/email', [Auth\PasswordController::class, 'getEmail']);
Route::post('admin/password/email', [Auth\PasswordController::class, 'postEmail']);

// Password reset routes...
Route::get('admin/password/reset/{token}', [Auth\PasswordController::class, 'getReset']);
Route::post('admin/password/reset', [Auth\PasswordController::class, 'postReset']);

Route::post('contact_send', [IndexController::class, 'contact_send']);
