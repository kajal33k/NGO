@extends('Dashboard.main')
@section('content')

<div class="container mx-auto mt-5">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
                    <h4 class="text-xl font-semibold">Edit about_sunil</h4>
                </div>
                <div class="p-6">
                    <form action="{{ route('about_sunil.update', $about_sunil->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- title Input -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <textarea name="title" id="title" class="mt-1 block w-full rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror">{{ old('title') }}</textarea>
                            @error('title')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Description Input -->
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" class="mt-1 block w-full rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror">{{ old('description', $about_sunil->description) }}</textarea>
                            @error('description')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Image Input -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">about_sunil Image</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border cursor-pointer focus:outline-none @error('image') border-red-500 @enderror">
                            @error('image')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            <!-- Show the current image if it exists -->
                            @if($about_sunil->image)
                            <div class="mt-4">
                                <img src="{{ asset('storage/' . $about_sunil->image) }}" alt="about_sunil Image" class="w-24 h-auto rounded">
                                <p class="text-gray-600 mt-2">Current Image</p>
                            </div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                                Update
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
