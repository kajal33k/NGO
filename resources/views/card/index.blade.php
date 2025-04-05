<!-- resources/views/cards/index.blade.php -->

@extends('Dashboard.main')

@section('content')
<div class="container">
    <h1>All Cards</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('card.create') }}" class="btn btn-primary mb-3">Create New Card</a>

    @if ($cards->isEmpty())
        <p>No cards found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cards as $card)
                    <tr>
                        <td>{{ $card->title }}</td>
                        <td>{{ $card->description }}</td>
                        <td>
                            <a href="{{ route('card.edit', $card->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('card.destroy', $card->id) }}" class="btn btn-sm btn-warning">Delete</a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
