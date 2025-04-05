@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Headings</h1>
        <a href="{{ route('heading.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Heading</a>

        @if(session('success'))
            <div class="bg-green-500 text-white p-2 rounded my-4">{{ session('success') }}</div>
        @endif

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Sub Title</th>
                    <th class="py-2 px-4 border-b">Quotes</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($headings as $heading)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">{{ $heading->title }}</td>
                        <td class="py-2 px-4 border-b">{{ $heading->sub_title }}</td>
                        <td class="py-2 px-4 border-b">{{ $heading->quotes }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('heading.edit', $heading) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                            <a href="{{ route('heading.destroy', $heading) }}" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
