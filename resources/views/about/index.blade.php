@extends('Dashboard.main')
@section('content')

<div class="container mx-auto mt-5">
    <div class="flex justify-between items-center mb-5">
        <h2 class="text-2xl font-bold">About List</h2>
        <a href="{{ route('about.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New About</a>
    </div>
    <div class="bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-300 text-left">
                    <th class="px-4 py-2 border-b-2 border-gray-200">ID</th>
                    <th class="px-4 py-2 border-b-2 border-gray-200">Title</th>
                    <th class="px-4 py-2 border-b-2 border-gray-200">Description</th>
                    <th class="px-4 py-2 border-b-2 border-gray-200">Image</th>
                    <th class="px-4 py-2 border-b-2 border-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $about->id }}</td>
                    <td class="px-4 py-2">{{$about->title}}</td>
                    <td class="px-4 py-2">{!! $about->description !!}</td>
                    <td class="px-4 py-2">
                        @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="w-24 h-auto rounded">
                        @else
                        <span>No Image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex space-x-2">
                            <a href="{{ route('about.edit', $about->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                            <a href="{{ route('about.destroy', $about->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Delete</a>
                            
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
