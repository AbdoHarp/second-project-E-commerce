@extends('layouts.admin')

@section('title', 'Products')

@section('content')
    <div class="card">

        <div class="card-header">
            <h1>Products Page
                <a href="{{ url('admin/add-products') }}" class="btn btn-primary btn-sm float-end">Add product</a>

            </h1>
        </div>
        <div class="card-body">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Productrs Table</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Category
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Selling Price
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
                                                @foreach ($products as $productItem)
                                                    <tr>
                                                        <td>{{ $productItem->id }}</td>
                                                        <td>{{ $productItem->category->name }}</td>
                                                        <td>{{ $productItem->name }}</td>
                                                        <td>{{ $productItem->small_description }}</td>
                                                        <td>{{ $productItem->selling_price }}</td>
                                                        <td>
                                                            <img src="{{ asset('assets/uploads/product/' . $productItem->image) }}"
                                                                alt="image here" width="80px" height="80px" />
                                                        </td>
                                                        </td>
                                                        <td>{{ $productItem->status == '1' ? 'Hidden' : 'show' }}</td>
                                                        <td>
                                                            <a href="{{ url('admin/edit-products/' . $productItem->id . '/edit') }}"
                                                                class="btn btn-success btn-sm">Edit</a>
                                                            <a href="{{ url('admin/delete-products/' . $productItem->id . '/delete') }}"
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
