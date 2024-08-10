{{-- NAV BAR --}}
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-2 mx-auto">
        <a href="#" class="flex items-center">
            <img src="{{asset('asset/img/logo.jpg')}}" class="lg:h-24 h-12" alt="GauVeda Logo">
            <span class="self-center text-2xl whitespace-nowrap text-cyan-600 font-bold">GauVeda</span>
        </a>
        <div class="flex items-center lg:order-2">
            <a href="{{route('registration')}}" class="text-white bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800">Donate</a>
            <button id="mobile-menu-toggle" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Toggle menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between w-full lg:w-auto lg:order-1 hidden lg:block" id="mobile-menu">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li><a href="{{route('home')}}" class="block py-2 pl-3 pr-4 text-white bg-cyan-600 rounded lg:bg-transparent lg:text-cyan-700 lg:p-0 dark:text-white underline" aria-current="page">Home</a></li>
                <li><a href="{{route('about')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:bg-cyan-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-cyan-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent hover:underline">About</a></li>
                <li><a href="{{route('blog')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:bg-cyan-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-cyan-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent hover:underline">Blog</a></li>
                <li><a href="{{route('gallery')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:bg-cyan-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-cyan-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent hover:underline">Gallery</a></li>
                <li><a href="{{route('contact')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:bg-cyan-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-cyan-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent hover:underline">Contact us</a></li>
                <li x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center w-full py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-cyan-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent hover:underline">
                        Donate in kind
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute mt-2 w-48 bg-white rounded-md shadow-lg dark:bg-gray-700 z-10">
                        <ul>
                            <li><a href="{{route('food')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">Food & Medicine</a></li>
                            <li><a href="{{route('food')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">Ambulance & Medicine</a></li>
                            <li><a href="{{route('food')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">Cesarean</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.1/dist/cdn.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', function() {
        menu.classList.toggle('hidden');
        this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'false' ? 'true' : 'false');
    });

    document.addEventListener('click', function(event) {
        if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
            menu.classList.add('hidden');
            toggleButton.setAttribute('aria-expanded', 'false');
        }
    });
});
</script>

<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>