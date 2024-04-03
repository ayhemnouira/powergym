@extends('backend')

@section('content')
<style>
/* Define styles for product card */
.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 80%; /* Adjust the width of the card */
    max-width: 400px; /* Limit the maximum width */
    margin: 50px auto; /* Center the card horizontally with top margin */
}

/* Style for card body */
.card-body {
    padding: 20px;
}

/* Style for product image */
.product-image {
    max-width: 100%; /* Ensure the image takes the full width of its container */
    height: auto;
    border-radius: 5px;
    margin-bottom: 20px;
}

/* Style for product details */
.card-body p {
    margin-bottom: 10px;
}

/* Style for product name */
.card-body p strong {
    font-weight: bold;
}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" alt="Product Image" class="product-image">
                    @else
                        <p>No Image Available</p>
                    @endif
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Price:</strong> {{ $product->price }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
