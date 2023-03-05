@extends('layouts.app')

@section('title', 'MY Cart')

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">Home</a>
                /
                <a href="{{ url('/carts') }}">MY Cart</a>
            </h6>
        </div>
    </div>
    <div class="container my-4">
        <div class="card shadow product_data">
            <div class="card-body">
                @php
                    $totalPrice = 0;
                @endphp
                @forelse ($cartItem as $cart)
                    <div class="row">
                        <div class="col-md-2">
                            @if ($cart->product)
                                <img src="{{ asset('assets/uploads/product/' . $cart->product->image) }}"
                                    style="width: 70px; height: 70px" alt="{{ $cart->product->name }}">
                            @else
                                <img src="" style="width: 50px; height: 50px"alt="">
                            @endif
                        </div>
                        <div class="col-md-3 my-auto">
                            <h5>{{ $cart->product->name }}</h5>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h5>{{ $cart->product->selling_price }} EGP</h5>
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" class="prod_id" value="{{ $cart->product_id }}">
                            <label for="quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px">
                                <button class="input-group-text changeQuantity decrement-btn">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center"
                                    value="{{ $cart->prod_qty }}">
                                <button class="input-group-text changeQuantity increment-btn"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger text-white delete-cartItem"><i
                                    class="fa fa-trash"></i>
                                Remove</button>
                        </div>
                    </div>

                    @php $totalPrice += $cart->product->selling_price * $cart->prod_qty  @endphp

                @empty
                    <div class="col-md-3">
                        <h5>No Cart Items Added</h5>
                    </div>
                @endforelse
            </div>
            <div class="card-footer">
                <h6> Total Price : {{ $totalPrice }}</h6>
            </div>
        </div>
    </div>
@endsection
