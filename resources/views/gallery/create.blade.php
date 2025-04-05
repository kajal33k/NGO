@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Create Gallery</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full p-3 border rounded-lg" value="{{ old('title') }}" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-bold mb-2">Image</label>
                <input type="file" name="image" id="image" class="w-full p-3 border rounded-lg" required>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
        </form>
    </div>
@endsection
