@extends('components.main')
@section('content')
{{-- about--image --}}
<div class="h-50">
    <img src="{{asset('asset/img/_slider3.jpg')}}" alt="" class="w-full object-cover">
    
</div>
<main class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6 text-center lg:text-left">Donating on Guru Purnima is a way to show respect to the kindness and humanity</h1>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
            <img src="{{asset('asset/img/read.jpg')}}" alt="Reading Image" class="w-full object-cover rounded-lg shadow-md">
            <p>Donating on Guru Purnima is a meaningful way to honor one's teachers, support spiritual and educational endeavors, and practice the values of generosity and gratitude.  Donating on Guru Purnima is a way to show respect and appreciation for the teachings and guidance received from gurus. It symbolizes the disciple's recognition of the guru's role in their spiritual and personal growth.  Making donations fosters a sense of generosity and detachment from material possessions. This practice is aligned with the teachings of many spiritual traditions, which emphasize the importance of selflessness and helping others.</p>
        </div>
         <!-- Sidebar -->
         <div class="w-full">
            <div class="bg-white rounded-lg shadow-md p-4">
                <h3 class="text-xl font-bold text-cyan-500 mb-4">Recent Posts</h3>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-2">
                        <img src="{{asset('asset/img/6.jpg')}}" alt="Thumbnail" class="w-16 h-16 object-cover rounded">
                        <a href="#" class="text-sm hover:text-cyan-500">Donating on guru purnima is a way to show respect to the kindness and humanity</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <img src="{{asset('asset/img/b5.jpg')}}" alt="Thumbnail" class="w-16 h-16 object-cover rounded">
                        <a href="#" class="text-sm hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <img src="{{asset('asset/img/b8.jpg')}}" alt="Thumbnail" class="w-16 h-16 object-cover rounded">
                        <a href="#" class="text-sm hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <img src="{{asset('asset/img/b10.jpg')}}" alt="Thumbnail" class="w-16 h-16 object-cover rounded">
                        <a href="#" class="text-sm hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <img src="{{asset('asset/img/b1.jpg')}}" alt="Thumbnail" class="w-16 h-16 object-cover rounded">
                        <a href="#" class="text-sm hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                    </li>

                    <!-- Add more recent posts as needed -->
                </ul>
                <h3 class="text-xl font-bold text-cyan-500 mb-4 mt-8">Recent Posts</h3>
                <ul class="list-disc list-inside space-y-2">
                    <li>Amavasya</li>
                    <li>Construction</li>
                    <li>Ekadashi</li>
                    <li>Gaudan</li>
                    <li>Purnima</li>
                </ul>
                
            </div>
        </div>
    </div>
    
<div class="bg-white p-8 rounded shadow-md w-full ">
    <h1 class="text-2xl font-bold mb-6">Leave a comment</h1>
    <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="name">Name</label>
        <input class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="Name">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="email">Email</label>
        <input class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="Email">
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 mb-2" for="comment">Comment</label>
        <input class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="Comment">
    </div>
    <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="submit">Submit</button>
</div>
</main>
{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <i class="ri-whatsapp-fill"></i></a>
    
@endsection