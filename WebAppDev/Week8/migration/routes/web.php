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

Route::resource('product', 'ProductController');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     dd(Product::find(1)->manufacturer);
    
    // $products = App\Manufacturer::find(1)->products;
    // dd($products);
    // $products = Product::all();
    // dd($products);
    // foreach ($products as $product) {
    //     echo $product->name;
    // }
    // $product = Product::find(1);
    // $product = Product::findOrFail(1);
    // dd($product);
    
    // $products = Product::where('price', '>', 800)->get();
    // dd($products);
    
    // $count = Product::where('price', '>', 800)->count();
    // dd($count);
    // $products = Product::whereRaw('price > 800')->get();
    // $products = Product::whereRaw('price > ?', array(800))->get();
    
    // $q = Product::where('price', '>', 800);
    // dd($q);
    
    // $product = Product::whereRaw('price > 800')->first();
    // dd($product);
    
    // $product = new Product;
    // $product->manufacturer_id = '1';
    // $product->name = 'ipod';
    // $product->price = 19.99;
    // $product->save(); // save to products table
    // $id = $product->id; // retrieve the id of the newly created product object
    // dd($product);
    
    // $product = Product::create(array('manufacturer_id' => '1', 'name' => 'Playstation', 'price' => 555));
    // dd($product);
// });