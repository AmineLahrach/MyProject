@extends('app')

@section('title', $product->name)

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Product Details</h2>
                    <a class="btn btn-primary" href="{{ route('products') }}">Back</a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name</h5>
                        <p class="card-text">{{ $product->name }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Price</h5>
                        <p class="card-text">${{ $product->price }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <img src="/images/{{ $product->image1 }}" class="card-img-top img-fluid" alt="{{ $product->name }} - Image 1">
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <img src="/images/{{ $product->image2 }}" class="card-img-top img-fluid" alt="{{ $product->name }} - Image 2">
                </div>
            </div>
        </div>
    </div>
@endsection
