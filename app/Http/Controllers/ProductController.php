<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(string $slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	
    	$products = Product::orderBy('id', 'DESC')
    		->where('category_id', $category->id)
    		->paginate(config('biolife.prod_per_page'));
    	return view('product_grid', compact('products', 'category'));
    }

    public function search(Request $request)
    {
    	$search = $request->get('s');
    	$slug_category = $request->get('c');

    	$products = Product::orderBy('id', 'DESC')
    		->category($slug_category)
    		->name($search)
    		// ->paginate(config('biolife.prod_per'));
    		->get();
    	return $products;
    }
}
