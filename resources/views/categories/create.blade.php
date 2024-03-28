@extends('backend')

@section('content')

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea>
    </div>


    <div>
        <button type="submit">Create Event</button>
    </div>
</form>

@endsection