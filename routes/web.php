<?php
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

Route::get('/', function () {
    return view('coming-soon');
});

Route::get('/categories/{slug}', function ($slug) {
    $category = Category::where('slug', $slug)
        ->where('status', 1)
        ->with('products')
        ->firstOrFail();

    return view('frontend.category', compact('category'));
});

Route::get('/product/{slug}', function ($slug) {
    $product = Product::where('slug', $slug)
        ->where('status', 1)
        ->firstOrFail();

    return view('frontend.product', compact('product'));
});
