<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cow NGO Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional styles */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
       @include('Dashboard.sidebar')

        <!-- Main Content -->
        <main class="flex-grow p-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Dashboard</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: Total Cows -->
                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105">
                    <h2 class="text-xl font-semibold text-gray-700">Total Cows</h2>
                    <p class="text-3xl font-bold text-green-600">150</p>
                </div>
                <!-- Card 2: Donations -->
                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105">
                    <h2 class="text-xl font-semibold text-gray-700">Total Donations</h2>
                    <p class="text-3xl font-bold text-green-600">$5,000</p>
                </div>
                <!-- Card 3: Volunteers -->
                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105">
                    <h2 class="text-xl font-semibold text-gray-700">Total Volunteers</h2>
                    <p class="text-3xl font-bold text-green-600">45</p>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Recent Activities</h2>
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-3 px-4 text-left text-gray-600 font-semibold">Date</th>
                            <th class="py-3 px-4 text-left text-gray-600 font-semibold">Activity</th>
                            <th class="py-3 px-4 text-left text-gray-600 font-semibold">Participants</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b">2024-09-01</td>
                            <td class="py-2 px-4 border-b">Cow Feeding Event</td>
                            <td class="py-2 px-4 border-b">20</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b">2024-09-15</td>
                            <td class="py-2 px-4 border-b">Donation Drive</td>
                            <td class="py-2 px-4 border-b">30</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b">2024-09-25</td>
                            <td class="py-2 px-4 border-b">Volunteer Training</td>
                            <td class="py-2 px-4 border-b">25</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Content Section -->
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
<footer class="bg-white shadow-md ">
    <div class="container mx-auto px-6 py-4 text-center">
        <p class="text-gray-600 text-sm">
            &copy; 2024 Cow NGO. All rights reserved.
        </p>
        <div class="flex justify-center mt-2">
            <a href="#" class="text-gray-600 hover:text-gray-800 mx-2">Facebook</a>
            <a href="#" class="text-gray-600 hover:text-gray-800 mx-2">Twitter</a>
            <a href="#" class="text-gray-600 hover:text-gray-800 mx-2">Instagram</a>
            <a href="#" class="text-gray-600 hover:text-gray-800 mx-2">LinkedIn</a>
        </div>
    </div>
</footer>

   
</body>
</html>
