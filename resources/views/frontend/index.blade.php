@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    @include('layouts/inc/slider')


    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($products as $prod)
                        <div class="item">
                            <a href="{{ url('collections/' . $prod->category->slug . '/' . $prod->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/product/' . $prod->image) }}" alt="">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <small>{{ $prod->selling_price }}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Trending Category</h4>
                    <div class="underline mb-4"></div>
                </div>
                <div class="col-6 col-md-3 owl-carousel featured-carousel owl-theme">
                    @forelse ($tre_category as $key => $categItem)
                        <div class="item">
                            <div class="category-card">
                                <a href="{{ url('collections/' . $categItem->slug) }}">
                                    <div class="category-card-img">
                                        <img src="{{ asset('assets/uploads/category/' . $categItem->image) }}"
                                            class="w-100" alt="Laptop">
                                    </div>
                                    <div class="category-card-body">
                                        <h5>{{ $categItem->name }}</h5><br />
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
    </div>

@endsection


@section('script')
    <script>
        $(document).ready(function() {
            $('.featured-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        });
    </script>
@endsection
