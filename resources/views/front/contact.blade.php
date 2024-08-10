@extends('components.main')
@section('content')
{{-- map!! --}}
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d448455.2044036836!2d76.67589!3d28.583084!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d71f35f093fd5%3A0x17df5f36ad165eaf!2sGokul%20Dham%20Gau%20Sewa%20Mahatirth!5e0!3m2!1sen!2sin!4v1722403525456!5m2!1sen!2sin" class="w-full" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
</div> 

{{-- form --}}
<div class="container mx-auto p-6 shadow">
    <h1 class="text-center font-bold text-2xl underline text-cyan-600 mb-4">Contact</h1>
    <p class="text-center mb-6">
        We at Gokul Dham Gau Sewa Mahatirth aim to provide shelter and medical services to the holy cows. It is our mission to provide medical attention and care to every single cow around India. If you wish to connect with us, you can reach us through the following ways:
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <input type="text" placeholder="Name" class="w-full p-2 border border-gray-300 rounded-md">
        <input type="email" placeholder="Email" class="w-full p-2 border border-gray-300 rounded-md">
        <input type="number" placeholder="Phone no." class="w-full p-2 border border-gray-300 rounded-md">
        <textarea placeholder="Message" class="w-full p-2 border border-gray-300 rounded-md h-32"></textarea>
    </div>
    <div class="text-center mb-6">
        <button class="px-4 py-2 bg-cyan-500 text-white rounded-md hover:bg-cyan-600 transition duration-300 ease-in-out">Submit</button>
    </div>
    <h1 class="text-center font-bold underline text-cyan-600 mb-4">Gau Sewa Dhaam</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-4 shadow-md rounded-md">
            <p class="font-bold">Gokul Dham Gau Sewa Mahatirth, Jhajjar</p>
            <p>8199821024, 9459012222</p>
            <p>8816809191</p>
            <p><a href="mailto:info@gokuldhammahatirth.org" class="text-cyan-600 underline">info@gokuldhammahatirth.org</a></p>
        </div>
        <div class="bg-white p-4 shadow-md rounded-md">
            <p class="font-bold">Gokul Dham Gau Sewa Mahatirth, Jhajjar</p>
            <p>8199821024, 9459012222</p>
            <p>8816809191</p>
            <p><a href="mailto:info@gokuldhammahatirth.org" class="text-cyan-600 underline">info@gokuldhammahatirth.org</a></p>
        </div>
        <div class="bg-white p-4 shadow-md rounded-md">
            <p class="font-bold">Gokul Dham Gau Sewa Mahatirth, Jhajjar</p>
            <p>8199821024, 9459012222</p>
            <p>8816809191</p>
            <p><a href="mailto:info@gokuldhammahatirth.org" class="text-cyan-600 underline">info@gokuldhammahatirth.org</a></p>
        </div>
    </div>
</div>


{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <i class="ri-whatsapp-fill"></i></a>






@endsection