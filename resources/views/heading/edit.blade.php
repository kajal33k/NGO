@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Edit Heading</h1>

        <form action="{{ route('heading.update', $heading) }}" method="POST">
            @csrf
      
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $heading->title }}" required>
            </div>

            <div class="mb-4">
                <label for="sub_title" class="block text-sm font-medium text-gray-700">Sub Title</label>
                <input type="text" name="sub_title" id="sub_title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $heading->sub_title }}">
            </div>

            <div class="mb-4">
                <label for="quotes" class="block text-sm font-medium text-gray-700">Quotes</label>
                <textarea name="quotes" id="quotes" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $heading->quotes }}</textarea>
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md">Update</button>
        </form>
    </div>
@endsection
