@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">All Videos</h1>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('video.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            Create New Video
        </a>

        @if ($videos->count() > 0)
            <ul class="list-disc pl-8">
                @foreach ($videos as $video)
                    <li class="mb-4">
                        <div class="border p-4 rounded-lg shadow-md bg-white">
                            <h2 class="text-2xl font-semibold">{{ $video->title }}</h2>
                            <p class="text-gray-700">{{ $video->subtitle }}</p>

                            <div class="mt-4">
                                <a href="{{ route('video.edit', $video->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">
                                    Edit
                                </a>
                                <a href="{{ route('video.destroy', $video->id) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded">
                                    Delete
                                </a>
                                
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-600">No videos available.</p>
        @endif
    </div>
@endsection
