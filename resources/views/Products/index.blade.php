@extends('backend')

@section('content')
<style>
    .container {
        margin-top: 50px;
    }

    .panel {
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .panel-body {
        padding: 20px;
    }

    a {
        margin-right: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    th {
        background-color: #f5f5f5;
        font-weight: bold;
    }

    .success-message {
        margin-top: 20px;
        color: green;
        font-weight: bold;
    }

    form {
        display: inline-block;
    }

    button[type="submit"] {
        background-color: transparent;
        border: none;
        color: #f00;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('products.create') }}">Create New Product</a>

                    @if (session('success'))
                        <div class="success-message">{{ session('success') }}</div>
                    @endif

                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product) }}">View</a>
                                        <a href="{{ route('products.edit', $product) }}">Edit</a>
                                        <form action="{{ route('products.destroy', $product) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection