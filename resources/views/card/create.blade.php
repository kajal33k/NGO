<!-- resources/views/cards/create.blade.php -->

@extends('Dashboard.main')

@section('content')
<div class="container">
    <h1>Create New Card</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('card.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Card</button>
    </form>
</div>
@endsection
