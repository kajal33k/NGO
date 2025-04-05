@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Edit Gallery</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
           

            <div class="mb-4">
                <label for="title" class="block text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full p-3 border rounded-lg" value="{{ $gallery->title }}" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-bold mb-2">Image</label>
                <input type="file" name="image" id="image" class="w-full p-3 border rounded-lg">
                @if ($gallery->image)
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-32 h-32 object-cover mt-2">
                @endif
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
        </form>
    </div>
@endsection
