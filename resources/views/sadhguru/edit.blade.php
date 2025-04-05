@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Edit Sadhguru</h1>

        <form action="{{ route('sadhguru.update', $sadhguru->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
           

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" name="title" id="title" class="block w-full border border-gray-300 rounded-md shadow-sm" value="{{ $sadhguru->title }}" required>
            </div>

            <div class="mb-4">
                <label for="para1" class="block text-sm font-medium">Para1</label>
                <textarea name="para1" id="para1" class="block w-full border border-gray-300 rounded-md shadow-sm" required>{{ $sadhguru->para1 }}</textarea>
            </div>

            <div class="mb-4">
                <label for="para2" class="block text-sm font-medium">Para2</label>
                <textarea name="para2" id="para2" class="block w-full border border-gray-300 rounded-md shadow-sm">{{ $sadhguru->para2 }}</textarea>
            </div>

            <div class="mb-4">
                <label for="quotes" class="block text-sm font-medium">Quotes</label>
                <textarea name="quotes" id="quotes" class="block w-full border border-gray-300 rounded-md shadow-sm">{{ $sadhguru->qoutes }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium">Image</label>
                <input type="file" name="image" id="image" class="block w-full">

                @if($sadhguru->image)
                    <p class="mt-2">Current Image:</p>
                    <img src="{{ asset('storage/' . $sadhguru->image) }}" alt="Sadhguru Image" class="w-32 h-32 object-cover mt-2">
                @endif
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Update</button>
        </form>
    </div>
@endsection
