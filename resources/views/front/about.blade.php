@extends('components.main')
@section('content')
{{-- about--image --}}
<div class="h-1/3">
    <img src="{{asset('asset/img/_slider3.jpg')}}" alt="" class="w-full object-cover">
</div>
{{-- abut div --}}
<section class="max-w-6xl w-full mx-auto mt-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-cyan-600">About Us</h1>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Image Section -->
        <div class="mb-6">
            <img 
                src="{{ asset('asset/img/about_us.jpg') }}"
                alt="Gokul Dham Gau Sewa Mahatirth facility"
                class="w-full h-full rounded-lg shadow-lg object-cover bounce-back 
            animation: bounceBack 2s infinite;"
                loading="lazy"
            >
        </div>
        
        <!-- Text Section -->
        <div class="text-gray-800 leading-relaxed p-4">
            <p>
                Gokul Dham Gau Sewa Mahatirth is a non-profit organization dedicated to providing medical treatment to cows and giving them a new lease on life. Founded by Sunil Nirmana ji, this initiative has established a world-class hospital for cows in Dadri Toe, Jhajjar. Thanks to the collective efforts of Sunil Nirmana Ji and volunteers, over 92,000 cows from across India have been treated within just a few years. These cows are cared for as one would care for their parents, resulting in people from neighboring states bringing cows here for treatment.
            </p>
            <p class="mt-4">
                Sunil Nirmana Ji began this noble work on his own land, but as the demand for treatment grew, the initial one-acre land proved insufficient. His mission has since expanded to several locations, including:
            </p>
            <ul class="list-disc list-inside mt-4 space-y-2">
                <li>Gokul Dham Gau Sewa Mahatirth, Jhajjar, with 900 to 1,000 cows under treatment</li>
                <li>Gokul Dham Gau Sewa Mahatirth, Dadri Toe, Jhajjar (HR) with 250 healthy cows</li>
                <li>Gokul Dham First Aid Center, Kanjhawla, Delhi, with 200 to 300 cows under treatment</li>
                <li>Manav Gau Sewa Sadan, Rewla Khanpur, Delhi, caring for 3,500 cows</li>
            </ul>
            <p class="mt-4">
                This effort, which started with a single person's dream of protecting cows, has not only restored respect for cows but also strengthened faith in Gaumata ji among Indians.
            </p>
            <p class="mt-4">
                Despite these efforts, there are still 6 million cows roaming the roads of India, abandoned by their owners once they ceased to provide milk or became too costly to care for. Our mission is to establish centers and hospitals across India to ensure that no cow is left untreated or abandoned.
            </p>
            <p class="mt-4 font-bold">
                With your support, we can achieve this goal and ensure every cow in India receives the care it deserves.
            </p>
        </div>
    </div>
</section>

{{-- bg-img=with[text] --}}
<div class="relative h-64 overflow-hidden bg-gray-900 mt-8">
    <img 
        src="{{ asset('asset/img/image.jpg') }}" 
        alt="Descriptive Alt Text" 
        class="w-full h-full object-cover absolute inset-0"
    >
    <div class="absolute inset-0 bg-black bg-opacity-75 flex flex-col items-center justify-center p-4">
        <p class="text-white text-lg text-center mb-4 max-w-md mx-auto">
            Providing meals, shelter, and taking care of deserted cows.
        </p>
        <hr class="w-1/2 border-t border-cyan-400 mb-4">
        <p class="text-white text-lg text-center max-w-md mx-auto">
            Sunil Nimana, the operator of this gaushala dedicated to Gauseva, inspired by his grandfather Late Shri Ratiram Ji, Paddada Late Shri Ganga Ram, and Shri Ramroop Ji, worked to give shape to this Gaushala.
        </p>
    </div>
</div>


{{-- img-text --}}

    <div class="max-w-6xl mx-auto p-4 mt-8 bg-gray-100">
        <div class="flex flex-col md:flex-row gap-8">
          <!-- Image Section -->
          <div class="md:w-1/2">
            <img src="{{asset('asset/img/SunilNimana.jpg')}}" alt="Sunil Nimana Ji with a cow" class="w-full h-auto rounded-lg shadow-lg">
          </div>
          
          <!-- Text Section -->
          <div class="md:w-1/2 space-y-4 text-gray-800">
            <h2 class="text-2xl font-bold text-cyan-600">Sunil Nimana Ji</h2>
            <p class="text-sm">
              Sunil Nimana Ji is a common man from a basic family who has a vision and aim of building the best cow hospital in all Asia. He is dedicated to provide world class treatment to cattle, just as we humans get treatment for our illness and accidents.
            </p>
            <p class="text-sm">
              Sunil Nimana is the Grandson of a great soul who was awarded the name Jagat Seth for providing free food and other necessities to the needy people in Haryana during the shortage of 1995-1996. From his childhood, Sunil Nimana had a thought in his mind that he is supposed to do something extraordinary and that will include serving humanity in any form.
            </p>
            <p class="text-sm">
              His grandfather was his motivation and he started doing services for humanity. Still, he was not happy and always thought that I am meant to serve better. One day he was travelling somewhere and he encountered an injured and sick Nandi, as if the Nandi was speaking to him that he needs help. He called his brother and asked for assistance so that he can get Nandi a medical treatment. While getting Nandi his medical treatment, Sunil ji felt satisfaction, he was happy from inside and made up his mind that he is going to serve cows and cattle. When he started doing the charity and service of cattle, he was rewarded in his life by God. Sometimes in the form of lost money being retrieved and sometimes getting God in his dreams, guiding him what to do next.
            </p>
            <p class="text-sm">
              It was a dream of his grandmother, Mrs. Laxmi ji, to make a Gau Chikitsalay and he intending to carry on his family's tradition. Sunil Nimana ji unexpectedly started a cow-chikitsalay. Sunil Nimana built a cow-chikitsalaya in the shape of a cowshed on his own one acre of land on the Nangla-Kutani road in Dadri-Toe village, to fulfil his ambition of providing cow service. This Gaushala, which was founded on March 10th, 2013, made so many arrangements on its own level that it gradually gained recognition as the First Gau Chikitsalaya in Haryana. He takes care of thousands of cows daily and has 6 Kamdhenu Cows.
            </p>
          </div>
        </div>
        <div class="mt-8 text-gray-800">
            <p>He started to live the dream of his grandmother, and from a small land of 1 acre, he has now made a gaushala in 3.5 acres. From a single cow hospital, he has made organizations in places like:</p>
            <ul class="list-disc list-inside mt-4 ml-6 space-y-2">
                <li>Gokul Dham Gau Sewa Mahatirth, Jhajjar, with 900 to 1000 cows under treatment</li>
                <li>Gokul Dham Gau Sewa Mahatirth, Dadri Toe, Jhajjar (HR), with 250 healthy cows</li>
                <li>Gokul Dham First Aid Center, Kanjhawla, Delhi, with 200 to 300 cows under treatment</li>
                <li>Manav Gau Sewa Sadan, Rewla Khanpur, Delhi, where 3500 cows are being taken care of</li>
            </ul>
            <p>In the small span of almost 11 years, he has helped, treated, and served 92,000 cows. Sunil Nimana Ji has devoted his life to serving cows and cattle till his last breath.</p>
        </div>
    </div>
  

{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <i class="ri-whatsapp-fill"></i></a>








    
@endsection