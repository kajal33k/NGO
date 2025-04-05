@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Galleries</h1>
            <a href="{{ route('gallery.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                Create Gallery
            </a>
        </div>

        @if ($gallerys->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($gallerys as $gallery)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="w-full h-48 object-cover" alt="{{ $gallery->title }}">
                        <div class="p-4">
                            <h5 class="text-lg font-semibold">{{ $gallery->title }}</h5>
                        </div>
                        <a href="{{route('gallery.edit', ['gallery' => $gallery->id])}}" class="bg-yellow-500">Edit</a>
                        <a href="{{route('gallery.destroy', ['gallery' => $gallery->id])}}" class="bg-red-500">delete</a>
                    </div>
                    

                @endforeach
            </div>
        @else
            <p class="text-center text-gray-600">No galleries available.</p>
        @endif
    </div>
@endsection
