@extends('layouts/admin')
@section('title', 'Add Products')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Products
                        <a href="{{ url('admin/product') }}" class="text-white btn btn-danger btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/insert-products') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Small Description</label>
                                <textarea rows='3' name="small_description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Description</label>
                                <textarea rows='5' name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Original Price</label>
                                <input type="number" name="original_price" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Selling Price</label>
                                <input type="number" name="selling_price" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Quantity</label>
                                <input type="number" name="quantity" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Tex</label>
                                <input type="number" name="tex" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Status</label>
                                <input type="checkbox" name="status" />
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Trending</label>
                                <input type="checkbox" name="trending" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Keyword</label>
                                <textarea rows='3' name="meta_keyword" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Description</label>
                                <textarea rows='3' name="meta_description" class="form-control"></textarea>
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
