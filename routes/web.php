<?php
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

Route::get('/test', function () {
    return 'ROUTE OK';
});

Route::get('/', function () {
    return view('coming-soon');
});

// ✅ CATEGORY LIST
Route::get('/categories', function () {
    $categories = Category::where('is_active', 1)->get();
    return view('frontend.categories', compact('categories'));
});

// ✅ CATEGORY DETAILS
Route::get('/categories/{slug}', function ($slug) {
    $category = Category::where('slug', $slug)
        ->with('products')
        ->firstOrFail();

    return view('frontend.category', compact('category'));
});

// ✅ PRODUCT DETAILS
Route::get('/product/{slug}', function ($slug) {
    $product = Product::where('slug', $slug)
        ->firstOrFail();

    return view('frontend.product', compact('product'));
});
