@extends('backend')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

        

                <div class="panel-body">


<a href="{{ route('categories.create') }}">Create New Category</a>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Comment</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->comment }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}">Edit</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>                </div>

            </div>

        </div>

    </div>

</div>

@endsection