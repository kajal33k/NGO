@extends('components.main')
@section('content')
 {{--slider  --}}
 <div class="relative w-full mx-auto overflow-hidden">
  <!-- Slider Container -->
  <div class="flex transition-transform duration-500" id="slider">
      <!-- Slide 1 -->
      <div class="w-full flex-shrink-0 relative h-64 md:h-80 lg:h-96 xl:h-112">
        <!-- Set height here -->
        <img src="{{ asset('asset/img/_slider1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1">
        <!-- Use h-full to cover the entire height -->
        <div class="absolute inset-0 flex h-auto w-11/12 sm:w-3/4 lg:w-1/2 top-1/4 sm:top-1/3 mx-2 sm:mx-4 lg:mx-12 items-center justify-center bg-black bg-opacity-40">
            <p class="text-white p-2 sm:p-4 text-xs sm:text-sm lg:text-lg overflow-auto max-h-full">
                We want to transform Gokuldham Gau Chikitsalaya into a premier medical facility. This resolution is now closer to being fulfilled thanks to the support of cow lovers. In addition to serving Gaumata, it is also part of our dharma to aid any other living thing that is ill, injured, or orphaned. Our current objective is to establish this service throughout India, including Haryana. We are certain that things may now be done to improve the situation of the cow mother in India.
                <br>
                <a href="{{Route('about')}}"
                    class="text-white flex bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-xs sm:text-sm w-1/2 sm:w-1/4 px-2 sm:px-4 lg:px-5 py-2 lg:py-2.5 mt-4 sm:mr-2 lg:mr-0 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800">
                    Read More
                </a>
            </p>
        </div>
      </div>
    
      <!-- Slide 2 -->
      <div class="w-full flex-shrink-0 relative h-64 md:h-80 lg:h-96 xl:h-112">
          <img src="{{asset('asset/img/_slider3.jpg')}}" class="w-full h-full object-cover" alt="Slide 2">
          <div class="absolute inset-0 flex h-auto w-11/12 sm:w-3/4 lg:w-1/2 top-1/4 sm:top-1/3 mx-2 sm:mx-4 lg:mx-12 items-center justify-center bg-black bg-opacity-40">
              <p class="text-white p-2 sm:p-4 text-xs sm:text-sm lg:text-lg overflow-auto max-h-full">
                  In just a time of 11 years since the starting of Gokuldham, we have treated over 92000 cows. This number is a great achievement because it is the highest numbers of cows treated by any organization. At present we have more than 1000 cows under treatment. We feel ourselves lucky and proud on the same time to have the opportunity to serve God in the form of cows.
                  <br>
                  <a href="{{Route('about')}}"
                      class="text-white flex bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-xs sm:text-sm w-1/2 sm:w-1/4 px-2 sm:px-4 lg:px-5 py-2 lg:py-2.5 mt-4 sm:mr-2 lg:mr-0 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800">
                      Read More
                  </a>
              </p>
          </div>
      </div>

      <!-- Slide 3 -->
      <div class="w-full flex-shrink-0 relative h-64 md:h-80 lg:h-96 xl:h-112">
          <img src="{{asset('asset/img/_slider4.jpg')}}" class="w-full h-full object-cover" alt="Slide 3">
          <div class="absolute inset-0 flex h-auto w-11/12 sm:w-3/4 lg:w-1/2 top-1/4 sm:top-1/3 mx-2 sm:mx-4 lg:mx-12 items-center justify-center bg-black bg-opacity-40">
              <p class="text-white p-2 sm:p-4 text-xs sm:text-sm lg:text-lg overflow-auto max-h-full">
                  With the tireless efforts of the Doctors in Gokuldham, we have been able to give life to more than 2000 cows. Complex Cesarean operations have been performed with almost 100% success rate.
                  <br>
                  <a href="{{Route('about')}}"
                      class="text-white flex bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-xs sm:text-sm w-1/2 sm:w-1/4 px-2 sm:px-4 lg:px-5 py-2 lg:py-2.5 mt-4 sm:mr-2 lg:mr-0 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800">
                      Read More
                  </a>
              </p>
          </div>
      </div>
  </div>
  <!-- Navigation Buttons -->
  <button class="absolute top-1/2 transform -translate-y-1/2 left-0 bg-gray-700 text-white px-4 py-2 opacity-75 hover:opacity-100" id="prevBtn">&lt;</button>
  <button class="absolute top-1/2 transform -translate-y-1/2 right-0 bg-gray-700 text-white px-4 py-2 opacity-75 hover:opacity-100" id="nextBtn">&gt;</button>
</div>

<h2 class="text-4xl font-bold text-cyan-600 flex justify-center lg:mt-14 m-6">About Us</h2>
{{-- About us --}}
<section class="about-us container mx-auto px-4 lg:mt-20 bg-cover bg-center relative" style="background-image: url('{{ asset('asset/img/bgw2-img.jpg') }}');">

  <div class="absolute inset-0 bg-black bg-opacity-80"></div>
  <div class="relative z-10 bg-black bg-opacity-80 rounded-lg shadow-lg p-4 md:p-8">
    <div class="flex flex-col md:flex-row gap-8">
      <!-- Image Section -->
      <div class="about-image md:w-1/2 rounded-lg overflow-hidden shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
        <div class="relative">
          <img 
            src="{{ asset('asset/img/Real sewa.jpg') }}" 
            alt="Cow in a pastoral setting" 
            class="w-full h-auto object-cover transition-transform duration-300 ease-in-out transform hover:scale-110"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 hover:opacity-50 transition-opacity duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4 text-gray-100 text-center transform translate-y-full transition-transform duration-300 ease-in-out hover:translate-y-0">
            <h3 class="text-lg font-semibold text-white">Gokul Dham Gau Sewa Mahatirth</h3>
            <p class="text-sm text-white mb-2">Dedicated to Cow Welfare</p>
            <p class="text-white italic">"Cow is the Mother of the Universe"</p>
          </div>
        </div>
      </div>
      
      <!-- Content Section -->
      <div class="about-content md:w-1/2 mt-12">
    
        <p class="text-lg mb-4 text-white">
          Gokul Dham Gau Sewa Mahatirth is a non-profit organization committed to providing medical treatment to cows and giving them a new lease on life. Founded by Sunil Nirmana Ji, this organization has established a world-class hospital for cows in Dadri Toe, Jhajjar.
        </p>
        
        <p class="text-lg mb-4 text-white">
          Through the combined efforts of Sunil Nirmana Ji and dedicated volunteers, over 92,000 cows from across India have been treated. This remarkable achievement underscores the organization's commitment to animal welfare, treating cows with the same respect and care as family.
        </p>
        
        <p class="text-lg mb-4 text-white">
          Initially started on a small piece of land, the mission has expanded significantly. The organization now operates several facilities across India:
        </p>
        
        <ul class="list-disc pl-6 mb-4 text-white">
          <li>Gokul Dham Gau Sewa Mahatirth, Jhajjar, with 900 to 1000 cows under treatment</li>
          <li>Gokul Dham Gau Sewa Mahatirth, Dadri Toe, Jhajjar (HR), housing 250 healthy cows</li>
          <li>Gokul Dham First Aid Center, Kanjhawla, Delhi, with 200 to 300 cows under treatment</li>
          <li>Manav Gau Sewa Sadan, Rewla Khanpur, Delhi, caring for 3,500 cows</li>
        </ul>
        
        <p class="text-lg text-white">
          What began as a personal dream to protect cows has grown into a respected initiative, enhancing the reverence for cows and strengthening the belief in Gaumata Ji among Indians.
        </p>
      </div>
    </div>
  </div>
</section>


{{-- ritual Details --}}
<article class="cow-tradition px-4 md:px-16 lg:mt-28 m-6">
  <h1 class="text-3xl font-bold text-cyan-600 text-center mb-4">The Tradition of Gau Seva</h1>
  
  <p class="text-center mb-4 text-lg">Gau Seva is revered as one of the most sacred rituals through the ages.</p>
  <p class="text-center mb-6 text-xl italic font-bold">"Cow is the Mother of the Universe"</p>
  
  <div class="flex flex-col md:flex-row gap-8">
    <!-- Text Content -->
    <div class="w-full md:w-1/2 p-4">
      <h2 class="text-2xl font-semibold mb-3 text-cyan-700">Significance</h2>
      <p class="mb-3 text-lg leading-relaxed">
        The cow symbolizes wealth, strength, abundance, and selfless giving. In Indian culture, the cow is held in the highest regard as a life nourisher, making it one of the most significant offerings.
      </p>
      <p class="mb-3 text-lg leading-relaxed">
        Cows offered to Devi are cared for at Isha's Gaushala (cow shed), where their milk is used for sacred offerings and annadanam (food distribution).
      </p>
      <blockquote class="border-l-4 border-cyan-600 pl-4 py-2 italic text-lg leading-relaxed mb-4">
        "In this culture, we have always treated cows, who nourish us from an early age with their own milk, with love and affection. If we do not save our indigenous breeds, we are leaving our soil barren."
        <footer class="text-right text-cyan-600 font-semibold mt-2">—Sadhguru</footer>
      </blockquote>
    </div>
    
    <!-- Image -->
    <div class="w-full md:w-1/2 p-4">
      <img 
        src="{{ asset('asset/img/cows.avif') }}" 
        alt="Sacred cow in a traditional setting" 
        class="w-full h-auto object-cover rounded-lg shadow-lg"
      >
    </div>
  </div>
</article>



{{-- traditina  --}}
<h1 class="text-3xl font-bold text-cyan-600 text-center lg:mt-28 m-6">The Tradition of Indians</h1>

<article class="cow-tradition mx-4 md:mx-12">
  <div class="flex flex-col md:flex-row gap-8">
    <!-- Image Slider -->
    <div class="w-full md:w-1/2 p-4 relative">
      <div x-data="{ currentSlide: 0, interval: null }" 
           x-init="interval = setInterval(() => { currentSlide = (currentSlide + 1) % 3 }, 3000)" 
           @mouseenter="clearInterval(interval)" 
           @mouseleave="interval = setInterval(() => { currentSlide = (currentSlide + 1) % 3 }, 3000)" 
           class="relative h-64 md:h-80 lg:h-96 overflow-hidden rounded-lg shadow-lg">
        <!-- Images -->
        <img src="{{ asset('asset/img/tradi1.avif') }}" 
             alt="Sacred cow in a traditional setting 1" 
             class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" 
             :class="{ 'opacity-100': currentSlide === 0, 'opacity-0': currentSlide !== 0 }">
        <img src="{{ asset('asset/img/tradi2.avif') }}" 
             alt="Sacred cow in a traditional setting 2" 
             class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" 
             :class="{ 'opacity-100': currentSlide === 1, 'opacity-0': currentSlide !== 1 }">
        <img src="{{ asset('asset/img/tradi3.avif') }}" 
             alt="Sacred cow in a traditional setting 3" 
             class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" 
             :class="{ 'opacity-100': currentSlide === 2, 'opacity-0': currentSlide !== 2 }">

        <!-- Prev/Next Arrows -->
        <div class="absolute inset-0 flex items-center justify-between px-4">
          <button class="bg-black text-white p-2 rounded-full bg-opacity-50 cursor-pointer hover:bg-opacity-75 transition" 
                  x-on:click="currentSlide = currentSlide === 0 ? 2 : currentSlide - 1">
            ❮
          </button>
          <button class="bg-black text-white p-2 rounded-full bg-opacity-50 cursor-pointer hover:bg-opacity-75 transition" 
                  x-on:click="currentSlide = currentSlide === 2 ? 0 : currentSlide + 1">
            ❯
          </button>
        </div>

        <!-- Slide Indicators -->
        <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex gap-2">
          <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 transition" 
                  :class="{ 'bg-opacity-100': currentSlide === 0 }" 
                  x-on:click="currentSlide = 0"></button>
          <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 transition" 
                  :class="{ 'bg-opacity-100': currentSlide === 1 }" 
                  x-on:click="currentSlide = 1"></button>
          <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 transition" 
                  :class="{ 'bg-opacity-100': currentSlide === 2 }" 
                  x-on:click="currentSlide = 2"></button>
        </div>
      </div>
    </div>
    
    <!-- Ritual Details -->
    <div class="w-full md:w-1/2 p-4">
      <h2 class="text-2xl font-semibold text-cyan-700 mb-4">Ritual Details</h2>
      <p class="text-lg mb-4 leading-relaxed">At Linga Bhairavi, you have the option to offer either a cow alone or a cow with a calf.</p>
      <p class="text-lg mb-4 leading-relaxed">You can make your offering in person on a date of your choosing and attend the Gau Pooja at Linga Bhairavi if you wish.</p>
      <p class="text-lg leading-relaxed">For those unable to visit personally, you may provide the names and nakshatras (birth stars) of up to four family members. These details will be written on a palm leaf and placed at Devi’s feet for blessings. The offering will be made on their behalf, and prasadam can be sent upon request within India.</p>
    </div>
  </div>
</article>

{{-- Video Gallery--}}
<section class="relative w-full min-h-screen bg-black mt-28">
  <!-- Background Image -->
  <img 
    src="{{ asset('asset/img/bg-v-img.jpg') }}" 
    alt="Background image" 
    class="absolute inset-0 w-full h-full object-cover opacity-55"
    aria-hidden="true"
  >
  
  <!-- Content Wrapper -->
  <div class="relative z-10 flex flex-col items-center justify-center min-h-screen p-4 sm:p-6 md:p-8 lg:p-12 overflow-y-auto">
    
    <!-- Section Title -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-center text-cyan-200">
      <span class="border-b-2 border-cyan-200 pb-2">Video Gallery</span>
    </h1>
    
    <!-- Section Description -->
    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white mb-8 text-center max-w-4xl mx-auto">
      Experience the journey of Gokuldham through our curated video selection. Witness our beginnings, the challenges faced by Sunil Nimana ji, and our unwavering dedication to cow care and organizational growth.
    </p>
    
    <!-- Video Thumbnails Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-7xl mx-auto px-4">
      
      @php
        $videos = [
          ['url' => 'https://youtu.be/nDkM1yzHqkE?si=nDTS2JIHkhrqzK7m', 'thumbnail' => 'https://img.youtube.com/vi/nDkM1yzHqkE/maxresdefault.jpg', 'title' => 'Gokuldham Journey'],
          ['url' => 'https://youtu.be/ffowDaAsLQE?si=CFxG7YXt7X0GLGA1', 'thumbnail' => 'https://img.youtube.com/vi/ffowDaAsLQE/maxresdefault.jpg', 'title' => 'Cow Care at Gokuldham'],
          ['url' => 'https://youtu.be/-4-90B4x3A8?si=mTSKd2iwvzQwlEJf', 'thumbnail' => 'https://img.youtube.com/vi/-4-90B4x3A8/maxresdefault.jpg', 'title' => 'Gokuldham Growth Story']
        ];
      @endphp
      
      @foreach($videos as $video)
        <div class="relative aspect-w-16 aspect-h-9">
          <a 
            href="{{ $video['url'] }}" 
            class="group block w-full h-full bg-gray-800 rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-opacity-50 transition-all duration-300"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Watch video: {{ $video['title'] }}"
          >
            <img 
              src="{{ $video['thumbnail'] }}" 
              alt="{{ $video['title'] }} thumbnail"
              class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75"
              loading="lazy"
            >
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30 group-hover:bg-opacity-50 transition-all duration-300">
              <svg class="w-12 h-12 text-white group-hover:text-cyan-400 transition-all duration-300 transform group-hover:scale-110" 
                   fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Image Gallery --}}
<section class="relative w-full px-4 sm:px-8 md:px-12 lg:px-16 mt-12">
  <!-- Section Title -->
  <h1 class="text-3xl md:text-4xl font-bold text-center mb-16 text-cyan-800">
    Image Gallery
  </h1>
  
  <!-- Gallery Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8">
    <!-- Gallery Item -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group">
      <img src="{{ asset('asset/img/cow3.jpg') }}" alt="Cow image 3" class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" loading="lazy">
      <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 ease-in-out"></div>
    </div>
    
    <!-- Gallery Item -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group">
      <img src="{{ asset('asset/img/cow4.jpg') }}" alt="Cow image 4" class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" loading="lazy">
      <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 ease-in-out"></div>
    </div>
    
    <!-- Gallery Item -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group">
      <img src="{{ asset('asset/img/cow5.jpg') }}" alt="Cow image 5" class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" loading="lazy">
      <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 ease-in-out"></div>
    </div>
    
    <!-- Gallery Item -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group">
      <img src="{{ asset('asset/img/cow8.jpg') }}" alt="Cow image 8" class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" loading="lazy">
      <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 ease-in-out"></div>
    </div>
    
    <!-- Gallery Item -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group">
      <img src="{{ asset('asset/img/cow7.jpg') }}" alt="Cow image 7" class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" loading="lazy">
      <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 ease-in-out"></div>
    </div>
    
    <!-- Gallery Item -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group">
      <img src="{{ asset('asset/img/cow6.jpg') }}" alt="Cow image 6" class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" loading="lazy">
      <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 ease-in-out"></div>
    </div>
  </div>
  
  <!-- View More Button -->
  <div class="flex justify-center mt-6">
    <a href="{{ route('gallery') }}">
      <button class="lg:px-4 lg:py-2 px-3 py-1 mt-4 bg-cyan-500 text-white rounded-md hover:bg-cyan-600 transition duration-300 ease-in-out">
        View More
      </button>
    </a>
  </div>
</section>





{{--Donation  --}}
<section class="container mx-auto px-4 py-12 mt-8">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    
    <!-- Donate Card -->
    <div class="bg-gray-200 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Donate</h2>
      <p class="text-gray-600 mb-6">Every dollar makes a difference in the lives of these animals. SAFI offers many ways to donate.</p>
      <a href="{{ route('learn') }}" class="inline-block bg-cyan-500 text-white py-2 px-4 rounded-lg hover:bg-cyan-600 transition-colors duration-300">Learn More</a>
    </div>

    <!-- Volunteer Card -->
    <div class="bg-cyan-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Volunteer</h2>
      <p class="text-gray-600 mb-6">Contribute your time and skills to help animals in need. SAFI has various volunteering opportunities.</p>
      <a href="{{ route('learn') }}" class="inline-block bg-cyan-500 text-white py-2 px-4 rounded-lg hover:bg-cyan-600 transition-colors duration-300">Learn More</a>
    </div>

    <!-- Adopt Card -->
    <div class="bg-gray-200 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Adopt</h2>
      <p class="text-gray-600 mb-6">Give a loving home to an animal in need. SAFI has many animals waiting for their forever homes.</p>
      <a href="{{ route('learn') }}" class="inline-block bg-cyan-500 text-white py-2 px-4 rounded-lg hover:bg-cyan-600 transition-colors duration-300">Learn More</a>
    </div>

    <!-- Fundraise Card -->
    <div class="bg-cyan-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Fundraise</h2>
      <p class="text-gray-600 mb-6">Organize events or campaigns to support SAFI's mission. Every contribution helps our cause.</p>
      <a href="{{ route('learn') }}" class="inline-block bg-cyan-500 text-white py-2 px-4 rounded-lg hover:bg-cyan-600 transition-colors duration-300">Learn More</a>
    </div>
  </div>
</section>


{{-- feel good story --}}
<section class="bg-white shadow-lg rounded-lg mt-12 lg:p-8">
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-cyan-700">Feel Good Stories</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Story 1 -->
      <div class="flex flex-col items-center text-center bg-gray-100 p-6 rounded-lg shadow-md transition-transform duration-300 hover:scale-105">
        <img src="{{ asset('asset/img/cow9.jpg') }}" alt="Story 1" class="w-full h-48 object-cover rounded-lg mb-4">
        <p class="text-gray-700">Pup traveled 11,900 miles/19,100 km to his forever home in the coolest shoes. Kala has the coolest shoes.</p>
      </div>
      <!-- Story 2 -->
      <div class="flex flex-col items-center text-center bg-gray-100 p-6 rounded-lg shadow-md transition-transform duration-300 hover:scale-105">
        <img src="{{ asset('asset/img/cow8.jpg') }}" alt="Story 2" class="w-full h-48 object-cover rounded-lg mb-4">
        <p class="text-gray-700">Pup traveled 11,900 miles/19,100 km to his forever home in the coolest shoes. Kala has the coolest shoes.</p>
      </div>
      <!-- Story 3 -->
      <div class="flex flex-col items-center text-center bg-gray-100 p-6 rounded-lg shadow-md transition-transform duration-300 hover:scale-105">
        <img src="{{ asset('asset/img/cow7.jpg') }}" alt="Story 3" class="w-full h-48 object-cover rounded-lg mb-4">
        <p class="text-gray-700">Pup traveled 11,900 miles/19,100 km to his forever home in the coolest shoes. Kala has the coolest shoes.</p>
      </div>
    </div>
  </div>
</section>


{{-- map --}}
<div class="mt-28">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d448455.2044036836!2d76.67589!3d28.583084!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d71f35f093fd5%3A0x17df5f36ad165eaf!2sGokul%20Dham%20Gau%20Sewa%20Mahatirth!5e0!3m2!1sen!2sin!4v1722082599114!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
</div>



{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
  <i class="ri-whatsapp-fill"></i></a>











<script>
    const slider = document.getElementById('slider');
const slides = slider.children;
const totalSlides = slides.length;
let currentIndex = 0;

document.getElementById('nextBtn').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
});

document.getElementById('prevBtn').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
});

</script>
@endsection