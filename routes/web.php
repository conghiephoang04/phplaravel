<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\AdminMiddleware;
use App\Mail\GuiEmail;
use Illuminate\Support\Facades\Mail;





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
Route::get('/',[LayoutController::class,'showProduct'])->name('home');

Route::get('/SingleProduct/{id}',[LayoutController::class,'SingleProduct'])->name('sanpham.show');

Route::get('/product/{id}', [LayoutController::class, 'sanphamtrongloai']);
// đăng nhập đăng ký
Route::post('/login', [LayoutController::class, 'postlogin'])->name('postlogin');
Route::get('/login', [LayoutController::class, 'login']);
// đăng nhập
Route::get('/register', [LayoutController::class, 'register'])->name('register');
Route::post('/register', [LayoutController::class, 'postregister'])->name('postregister');
// đăng xuất
Route::get('/logout', [LayoutController::class, 'logout'])->name('logout');
// profile
Route::get('/profile', [LayoutController::class, 'profile'])->name('profile');
// đổi mật khẩu
Route::get('/doimatkhau', [LayoutController::class, 'doimatkhau'])->name('doimatkhau');
Route::post('/doimatkhau',[LayoutController::class, 'doimatkhau_'])->name('doimatkhau_');
// quên mật khẩu
Route::get('/quenmatkhau', [LayoutController::class, 'quenmatkhau'])->name('quenmatkhau');
Route::post('/quenmatkhau',[LayoutController::class, 'quenmatkhau_'])->name('quenmatkhau_');
// thay doimat khau
Route::get('/thaydoimatkhau/{token}', [LayoutController::class, 'thaydoimatkhau'])->name('thaydoimatkhau');
Route::post('/thaydoimatkhau/{token}',[LayoutController::class, 'thaydoimatkhau_'])->name('thaydoimatkhau_');
// cart giỏ hàng
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::post('/cart', [CartController::class, 'order'])->name('order');
Route::get('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/orderdetail', [OrderController::class, 'orderdetail'])->name('orderdetail');
// xóa giỏ hàng
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
//admin
 Route::get('/admin',[AdminController::class,'admin'])->middleware('admin');
 // them
  Route::get('/admin/add_product',[AdminController::class,'add_product']);
  Route::post('/admin/add_product',[AdminController::class,'add_product_']);
 // xóa admin
 // sua 
 Route::get('/pro/sua/{id}', [AdminController::class, 'edit_product'])->name('editproduct');
 Route::post('/pro/sua/{id}/update', [AdminController::class, 'updete'])->name('updateproduct');
 Route::delete('/admin/xoa/{id}',[AdminController::class,'xoa']);
 // danh mục
 Route::get('/category',[AdminController::class,'category'])->name('category');
 // thêm danh mục
 Route::get('/admin/add_category',[AdminController::class,'add_category']);
 Route::post('/admin/add_category',[AdminController::class,'add_category_']);
 // xóa----
 Route::delete('/admin/xoa_cate/{id}',[AdminController::class,'xoa_cate']);
 // sửa danh mục-----------
 Route::get('/admin/sua_cate/{id}', [AdminController::class, 'edit_category'])->name('editcategory');
 Route::post('/admin/sua_cate/{id}', [AdminController::class, 'updete_cate'])->name('updatecategory');