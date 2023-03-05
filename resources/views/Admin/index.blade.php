@extends('layouts/admin')
@section('title', 'DashBoard')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="me-md-3 me-xl-5">
                <h2>Dashboard,</h2>
                <p class="mb-md-0">Your analytics dashboard template.</p>
                <hr />
            </div>
            <hr />
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                        <label class="text-white">Total All Users</label>
                        <a href="{{ url('admin/users') }}" class="text-white">view</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3">
                        <label class="text-white">Total Users</label>
                        <a href="{{ url('admin/users') }}" class="text-white">view</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-secondary text-white mb-3">
                        <label class="text-white">Total Admins</label>
                        <a href="{{ url('admin/users') }}" class="text-white">view</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                        <label class="text-white">Total Categories</label>
                        <a href="{{ url('admin/categories') }}" class="text-white">view</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3">
                        <label class="text-white">Total product</label>
                        <a href="{{ url('admin/products') }}" class="text-white">view</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
