@extends('Dashboard.main')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<div class="container mx-auto mt-5 ">
    <div class="flex justify-center">
        <div class="">
            <div class="bg-white shadow-md rounded-lg ">
                <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
                    <h4 class="text-xl font-semibold">Add New About</h4>
                </div>
                <div class="">
                    <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
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
                            <textarea name="description" id="description" class="mt-1 block w-full rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Image Input -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">About Image</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border cursor-pointer focus:outline-none @error('image') border-red-500 @enderror">
                            @error('image')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor
      .create(document.querySelector('#description'))
      .then(editor => {
          console.log(editor);
      })
      .catch(error => {
          console.error(error);
      });
  </script>

@endsection
