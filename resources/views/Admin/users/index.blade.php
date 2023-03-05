@extends('layouts.admin')

@section('title', 'ALL Users')

@section('content')
    <div class="card">

        <div class="card-header">
            <h1>Users Page
            </h1>
        </div>
        <div class="card-body">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Users Table</h4>
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
                                                    Email
                                                </th>
                                                <th>
                                                    Etype
                                                </th>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user_item)
                                                    <tr>
                                                        <td>{{ $user_item->id }}</td>
                                                        <td>{{ $user_item->name }}</td>
                                                        <td>{{ $user_item->email }}</td>
                                                        <td>{{ $user_item->role_as == '1' ? 'Admin' : 'user' }}</td>
                                                        <td>
                                                            <a href="{{ url('admin/edit-users/' . $user_item->id . '/edit') }}"
                                                                class="btn btn-success btn-sm">Edit</a>
                                                            <a href="{{ url('admin/delete-users/' . $user_item->id . '/delete') }}"
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
