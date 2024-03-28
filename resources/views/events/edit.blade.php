
@extends('backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Event</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('events.update', $event) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control" name="title" value="{{ $event->title }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" required>{{ $event->description }}</textarea>
                            </div>

                            <div>
        <label for="type">Type:</label>
        <select id="type" name="type" required>
            @foreach($categories as $category)
                <option value="{{ $category->name }}" {{ $category->name == $event->type ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input id="start_date" type="date" class="form-control" name="start_date" value="{{ $event->start_date }}" required>
                            </div>

                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input id="end_date" type="date" class="form-control" name="end_date" value="{{ $event->end_date }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection