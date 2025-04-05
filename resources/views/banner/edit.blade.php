@extends('Dashboard.main')
@section('content')

<div class="container mx-auto mt-5">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
                    <h4 class="text-xl font-semibold">Edit Banner</h4>
                </div>
                <div class="p-6">
                    <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <!-- Title Input -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror" value="{{ old('title', $banner->title) }}" aria-describedby="titleHelp">
                            @error('title')
                            <span id="titleHelp" class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Image Input -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Banner Image</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border cursor-pointer focus:outline-none @error('image') border-red-500 @enderror" aria-describedby="imageHelp">
                            @error('image')
                            <span id="imageHelp" class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            <!-- Show the current image if it exists -->
                            @if($banner->image)
                            <div class="mt-4">
                                <img src="{{ asset('storage/' . $banner->image) }}" alt="Current Banner Image" class="w-24 h-auto rounded">
                                <p class="text-gray-600 mt-2">Current Image</p>
                            </div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
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
