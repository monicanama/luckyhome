<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\OrderPurchaseController;
use App\Http\Controllers\YourController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\productdeleteController;
use App\Http\Controllers\TrackingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/success', function () {
    // Logic for success page
    return view('success');
})->name('success');

Route::get('/order', function () {
    return view('order');
})->name('order');


Route::get('landing', [AuthController::class, 'landing'])->name('landing');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::post('adminpost-login', [AuthController::class, 'adminpostLogin'])->name('adminlogin.post'); 
Route::get('adminlogout', [AuthController::class, 'adminlogout'])->name('adminlogout');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// pages
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
// Route::get('shop', [AuthController::class, 'shop'])->name('shop');
Route::get('products', [AuthController::class, 'products'])->name('products');
Route::get('order', [AuthController::class, 'order'])->name('order');
Route::get('cart', [AuthController::class, 'cart'])->name('cart');
Route::get('tracking', [AuthController::class, 'tracking'])->name('tracking');

// admin
Route::get('adminlogin', [AuthController::class, 'adminindex'])->name('adminlogin');
Route::post('adminpost-login', [AuthController::class, 'adminpostLogin'])->name('adminlogin.post'); 
Route::get('admindashboard', [AuthController::class, 'admindashboard'])->name('admindashboard');
Route::get('adminaddproduct', [AuthController::class, 'adminaddproduct'])->name('adminaddproduct');
Route::get('adminorder', [AuthController::class, 'adminorder'])->name('adminorder');



Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::post('/products', 'ProductController@store')->name('products.store');

Route::post('/add-product', [ProductController::class, 'store'])->name('add-product');
Route::get('/shop', [ProductController::class, 'store'])->name('shop');
Route::post('/store-product', [ProductController::class, 'store']);
// Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop', [ProductController::class, 'index'])->name('shop');

Route::get('/products/{id}/show', [ProductController::class, 'showProduct'])->name('product.showProduct');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::delete('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.removeFromCart');

Route::get('/cart', [CartController::class, 'index'])->name('cart');



Route::get('/purchased', [PurchaseController::class, 'purchase']);

// Route::get('/purchase', [PurchaseController::class, 'purchase'])->name('purchase');



Route::post('/store-purchases', [PurchaseController::class, 'storePurchases'])->name('store.purchases');


Route::get('/admindashboard', [YourController::class, 'index1'])->name('admindashboard');
Route::get('/products/create', [YourController::class, 'create1'])->name('products.create');
Route::post('/products', [YourController::class, 'store'])->name('products.store');
Route::get('/products/{product}/show', [YourController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [YourController::class, 'edit'])->name('products.edit');
// Route::put('/products/{product}/update', [YourController::class, 'update'])->name('products.update');
Route::delete('/products/{product}/destroy', [YourController::class, 'destroy'])->name('products.destroy');


Route::get('/order-purchased', [OrderPurchaseController::class, 'store'])->name('order.purchased');

Route::post('/cart/remove/{id}',  [CartController::class, 'destroy'])->name('cart.remove');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Route::get('/your-route', [YourController::class, 'index'])->name('admindashboard');
Route::get('/admindashboard', [YourController::class, 'index'])->name('admindashboard');

Route::get('/admindashboard', [YourController::class, 'adminDashboard'])->name('admindashboard');

Route::get('/adminorder', [YourController::class, 'adminOrder'])->name('adminorder');

Route::put('/orderpurchases/{orderpurchase}/deliver', [YourController::class, 'deliver'])->name('orderpurchases.deliver');


Route::get('/admin/order', 'YourController@adminOrder')->name('admin.order');


Route::post('/admin/orders/mark-as-delivered', [AdminOrderController::class, 'markAsDelivered'])->name('admin.orders.markAsDelivered');

Route::get('/admin/orders', [AdminOrderController::class, 'index'])->name('adminorder');

Route::put('/admin/orders/{order}/deliver', [AdminOrderController::class, 'deliver'])->name('admin.orders.deliver');

Route::get('/admin/order', [OrderPurchaseController::class, 'adminOrder'])->name('admin.order');

Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

Route::put('/products/{product}/update', [YourController::class, 'update'])->name('products.update');
Route::put('/updatetoggle/{product}', [ProductController::class, 'updatetoggle'])->name('products.toggle');
Route::get('/adminorder', [AdminController::class, 'adminorder'])->name('adminorder');
Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking');
Route::get('/tracking', [TrackingController::class, 'tracking'])->name('tracking');
Route::post('/order/received/{orderId}', [TrackingController::class, 'markOrderAsReceived'])->name('order.received');