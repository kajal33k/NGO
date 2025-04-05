@extends('Dashboard.main')

@section('content')
    <div class="max-w-lg mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Story</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('story.update', $story->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
           

            <div>
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" name="title" value="{{ old('title', $story->title) }}" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea name="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $story->description) }}</textarea>
            </div>

            <div>
                <label for="image" class="block text-gray-700 font-medium">Current Image</label>
                @if ($story->image)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $story->image) }}" alt="Story Image" class="w-full h-auto max-h-60 object-cover rounded-md">
                    </div>
                @else
                    <p class="text-sm text-gray-500">No image uploaded yet.</p>
                @endif
            </div>

            <div>
                <label for="image" class="block text-gray-700 font-medium">Upload New Image (optional)</label>
                <input type="file" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Update Story</button>
            </div>
        </form>
    </div>
@endsection
