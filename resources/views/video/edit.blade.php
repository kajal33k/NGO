@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Edit Video</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('video.update', $video->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
           

            <div class="mb-4">
                <label for="background_image" class="block text-gray-700 text-sm font-bold mb-2">Background Image URL:</label>
                <input type="url" name="background_image" value="{{ $video->background_image }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="video1" class="block text-gray-700 text-sm font-bold mb-2">Video 1 URL:</label>
                <input type="url" name="video1" value="{{ $video->video1 }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="video2" class="block text-gray-700 text-sm font-bold mb-2">Video 2 URL:</label>
                <input type="url" name="video2" value="{{ $video->video2 }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="video3" class="block text-gray-700 text-sm font-bold mb-2">Video 3 URL:</label>
                <input type="url" name="video3" value="{{ $video->video3 }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" name="title" value="{{ $video->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="subtitle" class="block text-gray-700 text-sm font-bold mb-2">Subtitle:</label>
                <input type="text" name="subtitle" value="{{ $video->subtitle }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
