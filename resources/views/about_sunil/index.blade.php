@extends('Dashboard.main')
@section('content')

<div class="container mx-auto mt-5">
    <div class="flex justify-between items-center mb-5">
        <h2 class="text-2xl font-bold">about_sunil List</h2>
        <a href="{{ route('about_sunil.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New about_sunil</a>
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
                @foreach ($about_sunils as $about_sunil)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $about_sunil->id }}</td>
                    <td class="px-4 py-2">{{$about_sunil->title}}</td>
                    <td class="px-4 py-2">{!! $about_sunil->description !!}</td>
                    <td class="px-4 py-2">
                        @if($about_sunil->image)
                        <img src="{{ asset('storage/' . $about_sunil->image) }}" alt="about_sunil Image" class="w-24 h-auto rounded">
                        @else
                        <span>No Image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex space-x-2">
                            <a href="{{ route('about_sunil.edit', $about_sunil->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                            <a href="{{ route('about_sunil.destroy', $about_sunil->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Delete</a>
                            
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
