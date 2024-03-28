@extends('backend')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

        

                <div class="panel-body">


<a href="{{ route('events.create') }}">Create New event</a>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>
                    <a href="{{ route('events.show', $event) }}">View</a>
                    <a href="{{ route('events.edit', $event) }}">Edit</a>
                    <form action="{{ route('events.destroy', $event) }}" method="post">
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