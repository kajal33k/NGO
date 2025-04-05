 <!-- Sidebar -->
 <aside class="w-64 h-screen bg-white  hidden md:block sidebar-transition">
    <div class="p-4">
        <h2 class="text-2xl font-bold text-center text-gray-800">Cow NGO</h2>
        <nav class="mt-6">
            <ul>
                <li class="mb-2">
                    <a href="#" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Dashboard</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('banner.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Banner</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('about.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">About</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('heading.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Taditional Heading</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('sadhguru.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Sadhguru</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('container.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Container</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('video.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Video-Container</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('gallery.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Gallery</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('card.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Cards</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('story.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Story</a>
                </li>
              
                <li class="mb-2">
                    <a href="{{route('about_sunil.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">About-sunil</a>
                </li>

            </ul>
        </nav>
    </div>
    
</aside>

<!-- Mobile Sidebar Toggle Button -->
<div class="md:hidden flex items-start p-4 bg-white shadow-md">
    <button id="sidebarToggle" class="text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
</div>

<!-- Mobile Sidebar -->
<div id="mobileSidebar" class="fixed inset-0 bg-white shadow-md transform -translate-x-full transition-transform md:hidden sidebar-transition z-10">
    <div class="p-4">
        <h2 class="text-2xl font-bold text-center text-gray-800">Cow NGO</h2>
        <nav class="mt-6">
            <ul>
                <li class="mb-2">
                    <a href="#" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Dashboard</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Cows</a>
                </li>
                <li class="mb-2">
                    <a href="{{route('banner.index')}}" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Banner</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Donations</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Volunteers</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Events</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Reports</a>
                </li>
            </ul>
        </nav>
        <button id="closeSidebar" class="mt-4 w-full bg-red-500 text-white p-2 rounded">Close</button>
    </div>
</div>

<script>
    const sidebarToggle = document.getElementById('sidebarToggle');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const closeSidebar = document.getElementById('closeSidebar');

    sidebarToggle.addEventListener('click', () => {
        mobileSidebar.classList.toggle('-translate-x-full');
    });

    closeSidebar.addEventListener('click', () => {
        mobileSidebar.classList.add('-translate-x-full');
    });
</script>
