@extends('layouts.app')

@section('title', $category->name)


@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Collections / {{ $category->name }}</h6>
        </div>
    </div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">{{ $category->name }}</h4>
                    <div class="underline mb-4"></div>
                </div>
                @forelse ($products as $key => $prodItem)
                    <div class="mb-3 col-md-3">
                        <div class="category-card">
                            <a href="{{ url('collections/' . $category->slug . '/' . $prodItem->slug) }}">
                                <div class="category-card-img">
                                    <img src="{{ asset('assets/uploads/product/' . $prodItem->image) }}" class="w-100"
                                        alt="Laptop">
                                </div>
                                <div class="category-card-body">
                                    <h5>{{ $prodItem->name }}</h5><br />

                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <h5>
                            No Categories Available
                        </h5>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
