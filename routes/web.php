<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BrandController;

//URL Index
Route::view('/', 'index')->name('index');
//URL Product
Route::view('/products', 'productos')->name('products');
//URL Brands
Route::view('/brands', 'brands')->name('brands');
//URL AboutUs
Route::view('/aboutus', 'aboutus')->name('aboutus');
//URL LogIn
Route::view('/login', 'login')->name('login');
//URL SignUp
Route::view('/signup', 'signUp')->name('signUp');
//URL Cotizar
Route::view('/cotizar', 'cotizar')->name('cotizar');
//URL Añadir Product Form
Route::view('/addProduct', 'productForm')->name('productForm');
//URL Detalle de producto
Route::view('/productDetail', 'productDetail')->name('productDetail');


Route::get('/products', [ProductController::class, 'index']) ->name('products');
Route::post('/addProduct', [ProductController::class, 'store']) ->name('addProduct');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('productDetail');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');

Route::get('/products/brand/{marca}', [BrandController::class, 'index'])->name('products.brand');

Route::post('/login', [UsuarioController::class, 'index']) ->name('login');
Route::post('/signup', [UsuarioController::class, 'store']) ->name('signUp');

/* 
Route::get('brands', fn() => view('marcas')) -> name ('brands');

Route::get('/', function () {
    return view('welcome');
});
*/