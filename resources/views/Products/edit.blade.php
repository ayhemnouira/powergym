@extends('backend')

@section('content')
<style>
    .container {
        margin-top: 50px;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f5f5f5;
        border-bottom: 1px solid #ccc;
        padding: 10px;
        font-weight: bold;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    textarea,
    input[type="file"] { /* Added input[type="file"] */
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        //aa
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data"> <!-- Added enctype="multipart/form-data" -->
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" name="description" required>{{ $product->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input id="price" type="text" class="form-control" name="price" value="{{ $product->price }}" required autofocus>
                        </div>

                        <!-- Add image input field -->
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" type="file" class="form-control" name="image" accept="image/*"> <!-- accept="image/*" restricts file selection to image files -->
                        </div>

                        <!-- Other form fields -->

                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
