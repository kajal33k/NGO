@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Create Container</h1>

        <form method="POST" action="{{ route('container.store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block">Title:</label>
                <input type="text" name="title" required class="border rounded w-full px-2 py-1" />
            </div>
            <div>
                <label class="block">Sub Title:</label>
                <input type="text" name="sub_title" class="border rounded w-full px-2 py-1" />
            </div>
            <div>
                <label class="block">Paragraph:</label>
                <textarea name="paragraph" class="border rounded w-full px-2 py-1"></textarea>
            </div>
            <div>
                <label class="block">Image 1:</label>
                <input type="file" name="image1" class="border rounded w-full px-2 py-1" />
            </div>
            <div>
                <label class="block">Image 2:</label>
                <input type="file" name="image2" class="border rounded w-full px-2 py-1" />
            </div>
            <div>
                <label class="block">Image 3:</label>
                <input type="file" name="image3" class="border rounded w-full px-2 py-1" />
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
        </form>
    </div>
@endsection
