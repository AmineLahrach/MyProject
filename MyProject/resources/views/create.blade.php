@extends('app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <strong>Input error.<br><br></strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        @method('POST')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Price :</label>
                    <input type="number" name="price" class="form-control" placeholder="Price">
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Description :</label>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image1" class="form-label">Image 1 :</label>
                    <input type="file" name="image1" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image2" class="form-label">Image 2 :</label>
                    <input type="file" name="image2" class="form-control">
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection
