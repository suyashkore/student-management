@extends('layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2>{{ $book->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Published Date:</strong> {{ $book->published_date }}</p>
            <p><strong>Description:</strong> {{ $book->description }}</p>
        </div>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
