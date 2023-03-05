<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function index()
    {
        $products = Product::where('trending', 1)->take(15)->get();
        $tre_category = Category::where('popular', 1)->take(15)->get();
        return view('frontend.index', compact('products', 'tre_category'));
    }

    public function categories()
    {
        $category = Category::where('status', '0')->get();
        return view('frontend/collections/category/index', compact('category'));
    }
    public function viewcategories($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('category_id', $category->id)->where('status', 0)->get();
            return view('frontend/collections/products/index', compact('products', 'category'));
        } else {
            return redirect('/')->with('message', "slug doesnot exists");
        }
    }

    public function viewproduct($slug, $prod_slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            if (Product::where('slug', $prod_slug)->exists()) {
                $products = Product::where('slug', $prod_slug)->first();
                return view('frontend/collections/products/view_product', compact('products'));
            } else {
                return redirect('/')->with('message', 'This link not found');
            }
        } else {
            return redirect('/')->with('message', 'No such category found');
        }
    }   
    
}
