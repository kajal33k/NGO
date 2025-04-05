@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Containers</h1>
        <a href="{{ route('container.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create New Container</a>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 rounded mb-4">{{ session('success') }}</div>
        @endif

        <ul class="space-y-2">
            @foreach ($containers as $container)
                <li class="flex justify-between items-center bg-gray-100 p-4 rounded">
                    <a href="{{ route('container.edit', $container->id) }}" class="text-blue-600 hover:underline">{{ $container->title }}</a>
                    <a href="{{ route('container.destroy', $container->id) }}" class="text-red-600 hover:underline">{{ $container->title }}</a>
                    
                </li>
            @endforeach
        </ul>
    </div>
@endsection
