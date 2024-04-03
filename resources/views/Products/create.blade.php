@extends('backend')

@section('content')
<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
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
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="form-container">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"> <!-- Added enctype="multipart/form-data" -->
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>
        </div>

        <!-- Add image input field -->
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*"> <!-- accept="image/*" restricts file selection to image files -->
        </div>

        <!-- Other form fields -->

        <div class="form-group">
            <button type="submit">Create Product</button>
        </div>
    </form>
</div>

@endsection
