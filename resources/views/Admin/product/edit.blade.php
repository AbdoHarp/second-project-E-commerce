@extends('layouts/admin')
@section('title', 'Update Products')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Update Product
                        <a href="{{ url('admin/products') }}" class="text-white btn btn-danger btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/update-products/' . $products->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            {{-- <div class="col-md-12 mb-3 ">
                                <label>Category</label>
                                <select name="category_id " class="form-control">
                                    <option value="">Select a Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="col-md-6 mb-3 ">
                                <label>Name</label>
                                <input type="text" name="name" value=" {{ $products->name }}" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Slug</label>
                                <input type="text" name="slug" value=" {{ $products->slug }}" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Small Description</label>
                                <textarea rows='3' name="small_description" class="form-control">{{ $products->small_description }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Description</label>
                                <textarea rows='5' name="description" class="form-control">{{ $products->description }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Original Price</label>
                                <input type="number" name="original_price" value="{{ $products->original_price }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Selling Price</label>
                                <input type="number" name="selling_price" value="{{ $products->selling_price }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Quantity</label>
                                <input type="number" name="quantity" value="{{ $products->quantity }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Tex</label>
                                <input type="number" name="tex" value="{{ $products->tex }}" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Status</label>
                                <input type="checkbox" name="status" {{ $products->status == '1' ? 'checked' : '' }} />
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Trending</label>
                                <input type="checkbox" name="trending" {{ $products->trending == '1' ? 'checked' : '' }} />
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Title</label>
                                <input type="text" name="meta_title" value=" {{ $products->meta_title }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Keyword</label>
                                <textarea rows='3' name="meta_keyword" class="form-control">{{ $products->meta_keyword }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Description</label>
                                <textarea rows='3' name="meta_description" class="form-control">{{ $products->meta_description }}</textarea>
                            </div>
                            <div class="col-md-12 mb-5 ">
                                @if ($products->image)
                                    <img src="{{ asset('assets/uploads/product/' . $products->image) }}" alt="image here"
                                        width="80px" height="80px" />
                                @endif
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <button type="submit" class="btn btn-primary float-end text-white">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
