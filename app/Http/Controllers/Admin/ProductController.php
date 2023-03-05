<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Admin/product/index', compact('products'));
    }

    public function add()
    {
        $categories = Category::all();
        return view('Admin/product/create', compact('categories'));
    }
    public function insert(Request $request)
    {
        $products = new Product();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/product', $filename);
            $products->image = $filename;
        }
        $products->name = $request->input('name');
        $products->slug = Str::slug($request->input('slug'));
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->quantity = $request->input('quantity');
        $products->tex = $request->input('tex');
        $products->status = $request->input('status') == TRUE ? '1' : '0';
        $products->trending = $request->input('trending') == TRUE ? '1' : '0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keyword = $request->input('meta_keyword');
        $products->meta_description = $request->input('meta_description');
        $products->save();
        return redirect('/admin/products')->with('message', 'Product Added successfully');
    }

    public function edit(int $product_id)
    {
        $products = Product::findOrFail($product_id);
        return view('admin/product/edit', compact('products'));
    }

    public function update(Request $request, int $product_id)
    {
        $products = Product::findOrFail($product_id);
        $destination = 'assets/uploads/product/' . $products->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move('assets/uploads/product', $filename);
        $products->image = $filename;

        // $products->category_id  = $request->input('category_id ');
        $products->name = $request->input('name');
        $products->slug = Str::slug($request->input('slug'));
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->quantity = $request->input('quantity');
        $products->tex = $request->input('tex');
        $products->status = $request->input('status') == TRUE ? '1' : '0';
        $products->trending = $request->input('trending') == TRUE ? '1' : '0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keyword = $request->input('meta_keyword');
        $products->meta_description = $request->input('meta_description');
        $products->update();
        return redirect('/admin/products')->with('message', 'Product Updated successfully');
    }


    public function destroy(int $product_id)
    {
        $products = Product::findOrFail($product_id);
        if ($products->image) {
            $destination = 'assets/uploads/product/' . $products->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
        $products->delete();
        return redirect('/admin/products')->with('message', 'Product Deleted With all images Successfully');
    }
}
