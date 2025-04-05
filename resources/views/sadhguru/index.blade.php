@extends('Dashboard.main')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Sadhgurus List</h1>
        <a href="{{ route('sadhguru.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Create New Sadhguru</a>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Para1</th>
                    <th class="px-4 py-2">para2</th>
                    <th class="px-4 py-2">qoutes</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sadhgurus as $sadhguru)
                    <tr>
                        <td class="border px-4 py-2">{{ $sadhguru->title }}</td>
                        <td class="border px-4 py-2">{{ $sadhguru->para1 }}</td>
                        <td class="border px-4 py-2">{{$sadhguru->para2}}</td>
                        <td class="border px-4 py-2">{{$sadhguru->qoutes}}</td>
                        <td class="border px-4 py-2">{{$sadhguru->image}}</td>
                        <td class="border px-4 py-2">{{$sadhguru->image}}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('sadhguru.destroy', $sadhguru) }}" class="text-red-500">Delete</a>
                            <a href="{{ route('sadhguru.edit', $sadhguru) }}" class="text-green-500 ml-4">Edit</a>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
