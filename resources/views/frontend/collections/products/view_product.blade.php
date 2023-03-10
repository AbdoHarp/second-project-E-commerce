@extends('layouts.app')

@section('title', $products->name)


@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Collections / {{ $products->category->name }}/{{ $products->name }}</h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        {{-- <img src="{{ asset('assets/uploads/product/' . $products->image) }}" alt=""> --}}
                        <img src="{{ asset('assets/uploads/product/' . $products->image) }}" class="w-100" alt="Img" />
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            @if ($products->trending == '1')
                                <label style="font-size: 16px;"
                                    class="float-end badge bg-danger trending_tag">{{ $products->trending == '1' ? 'Trending' : '' }}</label>
                            @endif
                        </h2>
                        <hr />
                        <label class="me-3"> Original Price : <s>EGP
                                {{ $products->original_price }}</s></label>
                        <label class="fw-bold">Selling Price :
                            EGP {{ $products->selling_price }}
                        </label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <hr>
                        @if ($products->quantity > 0)
                            <label class="badge bg-success">In stock</label>
                        @else
                            <label class="badge bg-danger">Out Of stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                <label for="quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width: 130px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control qty-input text-center"
                                        value="1">
                                    <button class="input-group-text increment-btn"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br />
                                <button type="button" class="btn btn-success me-3  float-start">Add to wishlist <i
                                        class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i
                                        class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <h3>Description</h3>
                    <p class="mt-3">
                        {!! $products->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection



