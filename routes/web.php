<?php

use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('user/login', [App\Http\Controllers\FrontendController::class, 'login'])->name('user.login');
Route::get('user/register', [App\Http\Controllers\FrontendController::class, 'register'])->name('user.register');
//socialite
Route::get('login/{provider}/', [App\Http\Controllers\FrontendController::class, 'redirect'])->name('login.redirect');
Route::get('login/{provider}/callback/', [App\Http\Controllers\FrontendController::class, 'Callback'])->name('login.callback');
//product
Route::get('product-detail/{slug}',[App\Http\Controllers\FrontendController::class,'productdetail'])->name('product-detail')->middleware('auth');
Route::post('product-search/index', [App\Http\Controllers\FrontendController::class, 'productsearch'])->name('product.search');
Route::get('product-list', [App\Http\Controllers\FrontendController::class, 'productsearch'])->name('product-list')->middleware('auth');
Route::get('product-cat/{slug}', [App\Http\Controllers\FrontendController::class, 'productcat'])->name('product-cat');
Route::get('/product-brand/{slug}', [App\Http\Controllers\FrontendController::class, 'productBrand'])->name('product-brand');
Route::match(['get','post'],'/filter' ,[App\Http\Controllers\FrontendController::class, 'productFilter'])->name('shop.filter');
Route::match(['get', 'post'], 'botman', [App\Http\Controllers\BotManController::class, 'handle']);
Route::post('/subscribe', [App\Http\Controllers\FrontendController::class, 'subscribe'])->name('subscribe');


//cart
Route::get('add-to-cart/{slug}',[App\Http\Controllers\CartController::class,'addToCart'])->name('add-to-cart')->middleware('auth');
Route::post('/add-to-cart',[App\Http\Controllers\CartController::class,'singleAddToCart'])->name('single-add-to-cart');
Route::get('/cart', function () {
     return view('frontend.pages.cart');
})->middleware(['auth'])->name('cart');
Route::post('/cart-update',[App\Http\Controllers\CartController::class,'cartupdate'])->name('cart.update');
Route::get('cart-delate/{id}',[App\Http\Controllers\CartController::class,'cartDelete'])->name('cart-delete');
Route::post('cart/order',[App\Http\Controllers\OrderController::class,'store'])->name('cart.order');
Route::get('order/pdf/{id}',[App\Http\Controllers\OrderController::class,'pdf'])->name('order.pdf');
//wishlist
Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
})->middleware(['auth'])->name('wishlist');
Route::get('wishlist/{slug}',[App\Http\Controllers\WishlistController::class,'wishlist'])->name('add-to-wishlist');
Route::get('wishlist-delete/{id}',[App\Http\Controllers\WishlistController::class,'wishlistDelete'])->name('wishlist-delete');

//compare
Route::get('/compare', function () {
    return view('frontend.pages.compare');
})->middleware(['auth'])->name('compare');
Route::get('compare/{slug}',[App\Http\Controllers\CompareController::class,'compare'])->name('add-to-compare');
Route::get('compare-delete/{id}',[App\Http\Controllers\CompareController::class,'compareDelete'])->name('compare-delete');
//
Route::post('coupon',[App\Http\Controllers\CouponController::class,'couponStore'])->name('coupon-store');
Route::post('product/{slug}/review',[App\Http\Controllers\ProductReviewController::class,'store'])->name('review.store');

Route::get('about-us', [App\Http\Controllers\FrontendController::class, 'aboutus'])->name('about.us');
Route::get('checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout')->middleware(['auth']);
//contact
Route::get('contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/message', [App\Http\Controllers\MessageController::class, 'store'])->name('contact.store');

Route::get('faq', [App\Http\Controllers\FrontendController::class, 'faq'])->name('faq');
Route::get('policy', [App\Http\Controllers\FrontendController::class, 'policy'])->name('policy');

Route::post('file', [App\Http\Controllers\FrontendController::class, 'uploadfile'])->name('upload.file');
//Route::get('/dashboard', function () {
//  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');//
//Route::group(['prefix'=>'/user','middleware'=>['auth','User']],function(){
// Route::get('/',[App\Http\Controllers\UserController::class, 'index'])->name('dashboard');   
//});


//admin
Route::group(['prefix'=>'/admin','middleware'=>['role:admin']],function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/file-manager',function(){
        return view('backend.layouts.file-manager');
    })->name('file-manager');
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('brand', App\Http\Controllers\BrandController::class);
    Route::resource('banner', App\Http\Controllers\BannerController::class);
    Route::resource('shipping', App\Http\Controllers\ShippingController::class);
    Route::resource('coupon', App\Http\Controllers\CouponController::class);
    Route::resource('order', App\Http\Controllers\OrderController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('carrer', App\Http\Controllers\CarrerController::class);
    //profile
    Route::get('/profile',[App\Http\Controllers\AdminController::class,'profile'])->name('admin-profile');
    Route::get('/profile/{id}',[App\Http\Controllers\AdminController::class,'profileUpdate'])->name('profile-update');
    //message
    Route::get('/message/five',[App\Http\Controllers\MessageController::class, 'messageFive'])->name('messages.five');
    Route::resource('/message', App\Http\Controllers\MessageController::class);
    //settings
    Route::get('settings',[App\Http\Controllers\AdminController::class,'settings'])->name('settings');
    Route::post('setting/update',[App\Http\Controllers\AdminController::class,'settingsUpdate'])->name('settings.update');
    //notification
    Route::get('/notification/{id}',[App\Http\Controllers\NotificationController::class,'show'])->name('admin.notification');
    Route::get('/notifications',[App\Http\Controllers\NotificationController::class,'index'])->name('all.notification');
    Route::delete('/notification/{id}',[App\Http\Controllers\NotificationController::class,'delete'])->name('notification.delete');

});
//user
Route::group(['prefix'=>'/user','middleware'=>['role:user']],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
    Route::get('/order/show/{id}', [App\Http\Controllers\HomeController::class, 'orderShow'])->name('user.order.show');
});
//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//
//   \UniSharp\LaravelFilemanager\Lfm::routes();
//});
//shipper
Route::group(['prefix'=>'/shipper','middleware'=>['role:shipper']],function(){
    Route::resource('/shipper', App\Http\Controllers\ShipperController::class);
});

require __DIR__.'/auth.php';
