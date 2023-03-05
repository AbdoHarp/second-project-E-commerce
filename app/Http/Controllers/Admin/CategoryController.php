<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Admin/category/index', compact('categories'));
    }

    public function add()
    {
        return view('Admin/category/create');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('slug'));
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_titel = $request->input('meta_titel');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->save();
        return redirect('/admin/categories')->with('message', 'Category Added successfully');
    }

    public function edit(int $category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('Admin/category/edit', compact('category'));
    }

    public function update(Request $request, int  $category_id)
    {
        $category = Category::findOrFail($category_id);
        if ($request->hasFile('image')) {
            // update image
            $destination = 'assets/uploads/category/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('slug'));
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_titel = $request->input('meta_titel');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->update();
        return redirect('/admin/categories')->with('message', 'Category Updated successfully');
    }











    public function destroy(int $category_id)
    {
        $category = Category::findOrFail($category_id);
        if ($category->image) {
            $destination = 'assets/uploads/category/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
        $category->delete();
        return redirect('/admin/categories')->with('message', 'Categories Deleted With all images Successfully');
    }
}
