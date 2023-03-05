@extends('layouts.admin')

@section('title', 'Add Categories')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        Create Categories
                        <a href="{{ url('admin/categories') }}" class="btn btn-danger text-white btn-sm float-end">Back</a>
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/insert-categories') }}" method="POST" enctype="multipart/form-data">
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
                                <label>Description</label>
                                <textarea rows='3' name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Status</label>
                                <input type="checkbox" name="status" />
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Popular</label>
                                <input type="checkbox" name="popular" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Title</label>
                                <input type="text" name="meta_titel" class="form-control">
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
                                <button type="submit" class="btn btn-primary float-end text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
