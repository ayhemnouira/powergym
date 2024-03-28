@extends('backend')

@section('content')

<form action="{{ route('events.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div>
    <label for="type">Type:</label>
<select id="type" name="type" required>
    @foreach($categories as $category)
        <option value="{{ $category->name }}">{{ $category->name }}</option>
    @endforeach
</select>

    </div>

    <div>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
    </div>

    <div>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" required>
    </div>

    <div>
        <button type="submit">Create Event</button>
    </div>
</form>

@endsection