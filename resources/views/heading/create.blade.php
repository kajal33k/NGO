@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Create Heading</h1>

        <form action="{{ route('heading.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="mb-4">
                <label for="sub_title" class="block text-sm font-medium text-gray-700">Sub Title</label>
                <input type="text" name="sub_title" id="sub_title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div class="mb-4">
                <label for="quotes" class="block text-sm font-medium text-gray-700">Quotes</label>
                <textarea name="quotes" id="quotes" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Create</button>
        </form>
    </div>
@endsection
