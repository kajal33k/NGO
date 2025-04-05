                
             @extends('Dashboard.main')

             @section('content')
                 <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
                     <h1 class="text-3xl font-semibold mb-6 text-gray-800">Create New Story</h1>
             
                     @if ($errors->any())
                         <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                             <strong class="font-bold">Whoops! Something went wrong.</strong>
                             <ul class="mt-2 list-disc list-inside">
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif
             
                     <form action="{{ route('story.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
                         @csrf
                         <div class="space-y-2">
                             <label for="title" class="block text-gray-700 font-medium">Title</label>
                             <input type="text" name="title" value="{{ old('title') }}" 
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                                    placeholder="Enter the title of the story">
                         </div>
             
                         <div class="space-y-2">
                             <label for="description" class="block text-gray-700 font-medium">Description</label>
                             <textarea name="description" rows="5" 
                                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                                       placeholder="Enter the description">{{ old('description') }}</textarea>
                         </div>
             
                         <div class="space-y-2">
                             <label for="image" class="block text-gray-700 font-medium">Image</label>
             
                             <!-- Image preview section -->
                             @if (isset($story) && $story->image)
                                 <div class="mb-4">
                                     <img src="{{ asset('storage/' . $story->image) }}" alt="Story Image" class="w-full h-auto max-h-60 object-cover rounded-md">
                                 </div>
                             @else
                                 <div class="mb-4">
                                     <p class="text-sm text-gray-500">No image uploaded yet.</p>
                                 </div>
                             @endif
                             
                             <!-- File Upload Input -->
                             <input type="file" name="image" 
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                         </div>
             
                         <div class="flex justify-end">
                             <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                 Create Story
                             </button>
                         </div>
                     </form>
                 </div>
             @endsection