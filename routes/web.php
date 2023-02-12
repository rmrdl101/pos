<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCtrl;
use App\Http\Controllers\ProductCtrl;
use App\Models\Product;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cashier-list', function(Request $request){
    $product = Product::where('barcode', $request->get('barcode'))->first();

    if(!empty($product))
    {
        return $product;
    }
})->name('cashier_list');
Route::get('cashier', function(){
    $products = [];

    return view('cashier', compact('products'));
});

Route::get('category/{category}/delete', [CategoryCtrl::class, 'delete'])->name('category.delete');
Route::resource('category', CategoryCtrl::class)->name('index', 'category');

Route::resource('product-list', ProductCtrl::class)->name('index', 'product-list');

