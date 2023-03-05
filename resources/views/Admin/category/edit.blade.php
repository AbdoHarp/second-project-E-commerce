@extends('layouts.admin')

@section('title', 'Add Categories')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        Update Categories
                        <a href="{{ url('admin/categories') }}" class="btn btn-danger text-white btn-sm float-end">Back</a>
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/update-categories/' . $category->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Slug</label>
                                <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Description</label>
                                <textarea rows='3' name="description" class="form-control">{{ $category->description }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Status</label>
                                <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }} />
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label>Popular</label>
                                <input type="checkbox" name="popular" {{ $category->popular == '1' ? 'checked' : '' }} />
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Title</label>
                                <input type="text" name="meta_titel" value="{{ $category->meta_titel }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Keyword</label>
                                <textarea rows='3' name="meta_keyword" class="form-control">{{ $category->meta_keyword }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label>Meta_Description</label>
                                <textarea rows='3' name="meta_description" class="form-control">{{ $category->meta_description }}</textarea>
                            </div>
                            <div class="col-md-12 mb-5 ">
                                @if ($category->image)
                                    <img src="{{ asset('assets/uploads/category/' . $category->image) }}" alt="image here"
                                        width="80px" height="80px" />
                                @endif
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
