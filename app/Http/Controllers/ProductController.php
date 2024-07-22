<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(string $slug): View
    {
    	$category = Category::where('slug', $slug)->firstOrFail();
    	
    	$products = Product::orderBy('id', 'DESC')
            ->with('category:id,name')
    		->where('category_id', $category->id)
    		->paginate(config('biolife.prod_per_page'));
    	return view('product_grid', compact('products', 'category'));
    }

    public function search(Request $request): View
    {
    	$search = $request->get('s');
    	$slug_category = $request->get('c');

    	$products = Product::orderBy('id', 'DESC')
            ->with('category:id,name')
    		->category($slug_category)
    		->name($search)
    		->paginate(config('biolife.prod_per'));
    		// ->get();
    	// return $products;
        session()->flash('search', $search);
        return view('product_search', compact('products'));
    }

    public function details(string $slug): View
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product_details', compact('product'));
    }
}
