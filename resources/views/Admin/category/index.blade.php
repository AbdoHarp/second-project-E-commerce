@extends('layouts.admin')

@section('title', 'Categories')

@section('content')
    <div class="card">
        
        <div class="card-header">
            <h1>Categories Page
                <a href="{{ url('admin/add-categories') }}" class="btn btn-primary btn-sm float-end">Add Category</a>

            </h1>
        </div>
        <div class="card-body">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Categories Table</h4>
                                    <p class="card-category"> Site categories of products </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Image
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                                <th>
                                                    ACTION
                                                </th>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $cate_item)
                                                    <tr>
                                                        <td>{{ $cate_item->id }}</td>
                                                        <td>{{ $cate_item->name }}</td>
                                                        <td>{{ $cate_item->description }}</td>
                                                        <td>
                                                            <img src="{{ asset('assets/uploads/category/' . $cate_item->image) }}"
                                                                alt="image here" width="80px" height="80px" />
                                                        </td>
                                                        <td>{{ $cate_item->status == '1' ? 'Hidden' : 'show' }}</td>
                                                        <td>
                                                            <a href="{{ url('admin/edit-categories/' . $cate_item->id . '/edit') }}"
                                                                class="btn btn-success btn-sm">Edit</a>
                                                            <a href="{{ url('admin/delete-categories/' . $cate_item->id . '/delete') }}"
                                                                class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
