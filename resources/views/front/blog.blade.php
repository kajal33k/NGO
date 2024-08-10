@extends('components.main')
@section('content')
{{-- about--image --}}
<div class="h-50">
    <img src="{{asset('asset/img/_slider3.jpg')}}" alt="" class="w-full object-cover">
</div>
<div class="max-w-7xl mx-auto p-4 bg-gray-100">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Main Content -->
        <div class="md:w-3/4 space-y-6">
            <h2 class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 p-4 rounded-lg text-white shadow-md">
                Latest Blogs
            </h2>
            <!-- Blog Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6" id="blog-posts">
                <!-- Blog Post Item -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden" id="1">
                    <img src="{{asset('asset/img/b1.jpg')}}" alt="Guru Purnima" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Donating on guru purnima is a way to show respect to the kin...</h3>
                        <p class="text-gray-600 text-sm mb-2">21-Jul-2024</p>
                        <a href="{{Route('read')}}" class="text-cyan-500 hover:underline">Read More..</a>
                    </div>
                </div>

                <!-- Add more Blog Post Items as needed -->
                <!-- Blog Post Item Example -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden" id="1">
                    <img src="{{asset('asset/img/b2.jpg')}}" alt="Acts of Charity" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold lg:text-lg mb-2">Acts of charity can help one attain moksha and reduce the bu...</h3>
                        <p class="text-gray-600 text-sm mb-2">17-Jul-2024</p>
                        <a href="{{Route('read')}}" class="text-cyan-500 hover:underline">Read More..</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden" id="1">
                    <img src="{{asset('asset/img/b3.jpg')}}" alt="Acts of Charity" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold lg:text-lg text-xs mb-2">Acts of charity can help one attain moksha and reduce the bu...</h3>
                        <p class="text-gray-600 text-sm mb-2">17-Jul-2024</p>
                        <a href="{{Route('read')}}" class="text-cyan-500 hover:underline">Read More..</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden" id="1">
                    <img src="{{asset('asset/img/b4.jpg')}}" alt="Acts of Charity" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold lg:text-lg text-xs mb-2">Acts of charity can help one attain moksha and reduce the bu...</h3>
                        <p class="text-gray-600 text-sm mb-2">17-Jul-2024</p>
                        <a href="{{Route('read')}}" class="text-cyan-500 hover:underline">Read More..</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden" id="1">
                    <img src="{{asset('asset/img/b5.jpg')}}" alt="Acts of Charity" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold lg:text-lg text-xs mb-2">Acts of charity can help one attain moksha and reduce the bu...</h3>
                        <p class="text-gray-600 text-sm mb-2">17-Jul-2024</p>
                        <a href="{{Route('read')}}" class="text-cyan-500 hover:underline">Read More..</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden" id="1">
                    <img src="{{asset('asset/img/b6.jpg')}}" alt="Acts of Charity" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold lg:text-lg text-xs mb-2">Acts of charity can help one attain moksha and reduce the bu...</h3>
                        <p class="text-gray-600 text-sm mb-2">17-Jul-2024</p>
                        <a href="{{Route('read')}}" class="text-cyan-500 hover:underline">Read More..</a>
                    </div>
                </div>
                
                <!-- Repeated Blog Post Items -->
                <!-- Use unique IDs if you need specific targeting -->
                
                <!-- Continue adding Blog Post Items up to the required count -->
            </div>

         
            
        </div>

        <!-- Sidebar -->
        <div class="md:w-1/4">
            <div class="bg-white rounded-lg shadow-md p-4">
                <!-- Recent Posts Section -->
                <section>
                    <h3 class="text-xl font-bold text-cyan-500 mb-4">Recent Posts</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <img src="{{asset('asset/img/6.jpg')}}" alt="Thumbnail of a donation post" class="w-16 h-16 object-cover rounded">
                            <a href="#" class="text-sm text-gray-900 hover:text-cyan-500">Donating on guru purnima is a way to show respect to the kindness and humanity</a>
                        </li>
                        <li class="flex items-start space-x-3">
                            <img src="{{asset('asset/img/b5.jpg')}}" alt="Thumbnail of a charity post" class="w-16 h-16 object-cover rounded">
                            <a href="#" class="text-sm text-gray-900 hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                        </li>
                        <li class="flex items-start space-x-3">
                            <img src="{{asset('asset/img/b8.jpg')}}" alt="Thumbnail of a moksha post" class="w-16 h-16 object-cover rounded">
                            <a href="#" class="text-sm text-gray-900 hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                        </li>
                        <li class="flex items-start space-x-3">
                            <img src="{{asset('asset/img/b10.jpg')}}" alt="Thumbnail of a spiritual post" class="w-16 h-16 object-cover rounded">
                            <a href="#" class="text-sm text-gray-900 hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                        </li>
                        <li class="flex items-start space-x-3">
                            <img src="{{asset('asset/img/b1.jpg')}}" alt="Thumbnail of a purnima post" class="w-16 h-16 object-cover rounded">
                            <a href="#" class="text-sm text-gray-900 hover:text-cyan-500">Acts of charity can help one attain moksha and reduce the burden of past sins</a>
                        </li>
                    </ul>
                </section>
        
                <!-- Categories Section -->
                <section class="mt-8">
                    <h3 class="text-xl font-bold text-cyan-500 mb-4">Categories</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li><a href="#" class="text-gray-900 hover:text-cyan-500">Amavasya</a></li>
                        <li><a href="#" class="text-gray-900 hover:text-cyan-500">Construction</a></li>
                        <li><a href="#" class="text-gray-900 hover:text-cyan-500">Ekadashi</a></li>
                        <li><a href="#" class="text-gray-900 hover:text-cyan-500">Gaudan</a></li>
                        <li><a href="#" class="text-gray-900 hover:text-cyan-500">Purnima</a></li>
                    </ul>
                </section>
            </div>
        </div>
        
    </div>
</div>

{{--  --}}





{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <i class="ri-whatsapp-fill"></i></a>












@endsection