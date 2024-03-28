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

    .card-body {
        padding: 20px;
    }

    p {
        margin-bottom: 10px;
    }

    strong {
        font-weight: bold;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Price:</strong> {{ $product->price }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection