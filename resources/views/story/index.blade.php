@extends('Dashboard.main')

@section('content')
    <div class="max-w-7xl mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Stories</h1>

        <div class="mb-4">
            <a href="{{ route('story.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Create New Story</a>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($stories as $story)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $story->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $story->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $story->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $story->image }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('story.edit', $story->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('story.destroy', $story->id) }}" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
