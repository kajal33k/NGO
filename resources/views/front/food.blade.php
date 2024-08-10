<script src="https://cdn.tailwindcss.com"></script>


<div>
    
<nav>
    <div class="text-center mt-4 shadow-md">
        <h1 class="text-gray-800 font-bold text-2xl">Shree <span class="text-cyan-800 font-bold text-2xl">Laxami</span> <span class="text-gray-800 font-bold text-2xl">Gau</span> <span class="text-cyan-800 font-bold text-2xl">Sewa</span> <span class="text-gray-800 font-bold text-2xl">Mahatirth</span></h1>
    </div>
    </nav>
    <div class="container mx-auto w-full lg:m-12 grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-300 mt-24" id="slider">
                <!-- Slide 1 -->
                <div class="min-w-full">
                    <img src="{{asset('asset/img/fs1.jpg')}}" alt="Slide 1" class="w-full">
                </div>
                <!-- Slide 2 -->
                <div class="min-w-full">
                    <img src="{{asset('asset/img/fs2.jpg')}}" alt="Slide 2" class="w-full">
                </div>
                <!-- Slide 3 -->
                <div class="min-w-full">
                    <img src="{{asset('asset/img/fs3.jpg')}}" alt="Slide 3" class="w-full">
                </div>
                <!-- Slide 4 -->
                <div class="min-w-full">
                    <img src="{{asset('asset/img/fs4.jpg')}}" alt="Slide 4" class="w-full">
                </div>
            </div>
            
            {{-- <!-- Previous Button -->
            <button onclick="changeSlide(-1)" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full shadow-lg hover:bg-gray-200">
                &#10094;
            </button>
            
            <!-- Next Button -->
            <button onclick="changeSlide(1)" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full shadow-lg hover:bg-gray-200">
                &#10095;
            </button> --}}
        </div>
        
        <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">
                India's First Cow Hospital: 92,000+ Cows Treated in 11 Years
            </h1>
            
            <p class="text-gray-600 mb-4">
                With 24/7 free ambulance service, we need your support to continue our mission.
            </p>
            
            <div class="bg-blue-100 p-4 rounded-md mb-6">
                <p class="font-semibold text-blue-800">
                    Donate & get tax benefits under 80G of Income Tax
                </p>
                <div class="flex space-x-2 mt-2">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Tax Benefits</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Assured</button>
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Animal</button>
                </div>
            </div>
            
            <div class="flex justify-between items-center mb-6">
                <div class="text-4xl font-bold text-green-600">78%</div>
                <div class="text-right">
                    <div class="text-lg font-semibold">Jul-2024</div>
                    <div class="text-sm text-gray-500">Month</div>
                </div>
            </div>
            
            <div class="bg-gray-100 p-4 rounded-md mb-6">
                <p class="text-lg font-semibold text-gray-800">
                    25,000+ Total Kits Required
                </p>
            </div>
            
            <p class="text-gray-700 leading-relaxed">
                Gokuldham Gau Seva Mahatirth has saved over 92,000+ cows in need since its inception. 
                They aim to save many more by providing the right kind of medical treatment. 
                You can support their cause and make a difference.
            </p>
        </div>
    </div>
    
<div class="container mx-auto lg:p-4">
        <div class="mb-4">
            <ul class="flex flex-wrap justify-center gap-4 mt-4">
                <a href="#project"><li class="text-cyan-500 hover:text-cyan-400 text-lg font-bold underline">Project</li></a>
                <a href="#product"><li class="text-cyan-500 hover:text-cyan-400 text-lg font-bold underline">Products</li></a>
                <a href="#update"><li class="text-cyan-500 hover:text-cyan-400 text-lg font-bold underline">Updates</li></a>
            </ul>
        </div>
        
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-cyan-500 mb-2 sm:mb-0">Products</h1>
        </div>
      
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Product cards -->
                <div class="border rounded-lg p-4 col-span-1 sm:col-span-2 lg:col-span-1" id="product">
                    <div class="flex justify-center">
                        <img src="{{asset('asset/img/kit1.jpg')}}" alt="Fodder" class="w-full h-auto">
                    </div>
                    <h2 class="text-xl font-semibold mb-2">Fodder Kit</h2>
                    <p class="text-sm text-gray-600 mb-2">This is a Cow Food which contains Jaggery 3 Kg - 110/-</p>
                    <a href="#" class="text-blue-500 text-sm">Read more</a>
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">2795 Fodder Kit Received Out Of 15000</p>
                        <div class="bg-blue-200 h-2 rounded-full">
                            <div class="bg-blue-600 h-2 rounded-full w-1/5"></div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row items-center">
                        <button class="mb-2 sm:mb-0 sm:mr-2 bg-orange-500 text-white px-4 py-2 rounded-full w-full sm:w-auto">₹620/Unit</button>
                        <input type="text" placeholder="Enter Amount" class="p-2 border w-full sm:w-auto">
                    </div>
                </div>
        
                <div class="border rounded-lg p-4 col-span-1 sm:col-span-2 lg:col-span-1" id="product">
                    <div class="flex justify-center">
                        <img src="{{asset('asset/img/kit2.jpg')}}" alt="Fodder" class="w-full h-auto">
                    </div>
                    <h2 class="text-xl font-semibold mb-2">Fodder Kit</h2>
                    <p class="text-sm text-gray-600 mb-2">This is a Cow Food which contains Jaggery 3 Kg - 110/-</p>
                    <a href="#" class="text-blue-500 text-sm">Read more</a>
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">2795 Fodder Kit Received Out Of 15000</p>
                        <div class="bg-blue-200 h-2 rounded-full">
                            <div class="bg-blue-600 h-2 rounded-full w-1/5"></div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row items-center">
                        <button class="mb-2 sm:mb-0 sm:mr-2 bg-orange-500 text-white px-4 py-2 rounded-full w-full sm:w-auto">₹620/Unit</button>
                        <input type="text" placeholder="Enter Amount" class="p-2 border w-full sm:w-auto">
                    </div>
                </div>
        
                <div class="border rounded-lg p-4 col-span-1 sm:col-span-2 lg:col-span-1">
                    <div class="mt-8">
                        <div class="flex space-x-2 mb-4">
                            <div class="w-6 h-6 bg-blue-600 rounded flex justify-center"><i class="ri-linkedin-fill text-white"></i></div>
                            <div class="w-6 h-6 bg-blue-400 rounded flex justify-center"><i class="ri-facebook-fill text-white"></i></div>
                            <div class="w-6 h-6 bg-pink-400 rounded flex justify-center"><i class="ri-instagram-fill text-white"></i></div>
                            <div class="w-6 h-6 bg-red-600 rounded flex justify-center"><i class="ri-youtube-fill text-white"></i></div>
                            <div class="w-6 h-6 bg-green-500 rounded flex justify-center"><i class="ri-twitter-fill text-white"></i></div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            We have always been fortunate to receive donations and support from our well-wishers but the need is ever-increasing. More and more injured cows are left stranded on the roads with no one to care for them. We want to help each one of them. My dream is to give the best facilities to these injured animals and for that, I would need your support.
                        </p>
                        <div class="bg-orange-500 p-2 text-white font-semibold mb-2">
                            Recent Donors
                        </div>
                        <div class="border p-2">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-gray-300 rounded-full flex justify-center">
                                        <i class="ri-user-fill text-white"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Vedant</p>
                                        <p class="text-sm text-gray-600">31-Jul-2024 11:45 AM</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-gray-300 rounded-full flex justify-center">
                                        <i class="ri-user-fill text-white"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Vedant</p>
                                        <p class="text-sm text-gray-600">31-Jul-2024 11:45 AM</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-gray-300 rounded-full flex justify-center">
                                        <i class="ri-user-fill text-white"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Vedant</p>
                                        <p class="text-sm text-gray-600">31-Jul-2024 11:45 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="border rounded-lg p-4 col-span-1 sm:col-span-2 lg:col-span-1" id="product">
                    <div class="flex justify-center">
                        <img src="{{asset('asset/img/kit3.jpg')}}" alt="Fodder" class="w-full h-auto">
                    </div>
                    <h2 class="text-xl font-semibold mb-2">Fodder Kit</h2>
                    <p class="text-sm text-gray-600 mb-2">This is a Cow Food which contains Jaggery 3 Kg - 110/-</p>
                    <a href="#" class="text-blue-500 text-sm">Read more</a>
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">2795 Fodder Kit Received Out Of 15000</p>
                        <div class="bg-blue-200 h-2 rounded-full">
                            <div class="bg-blue-600 h-2 rounded-full w-1/5"></div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row items-center">
                        <button class="mb-2 sm:mb-0 sm:mr-2 bg-orange-500 text-white px-4 py-2 rounded-full w-full sm:w-auto">₹620/Unit</button>
                        <input type="text" placeholder="Enter Amount" class="p-2 border w-full sm:w-auto">
                    </div>
                </div>
        
                <div class="border rounded-lg p-4 col-span-1 sm:col-span-2 lg:col-span-1" id="product">
                    <div class="flex justify-center">
                        <img src="{{asset('asset/img/kit4.jpg')}}" alt="Fodder" class="w-full h-auto">
                    </div>
                    <h2 class="text-xl font-semibold mb-2">Fodder Kit</h2>
                    <p class="text-sm text-gray-600 mb-2">This is a Cow Food which contains Jaggery 3 Kg - 110/-</p>
                    <a href="#" class="text-blue-500 text-sm">Read more</a>
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">2795 Fodder Kit Received Out Of 15000</p>
                        <div class="bg-blue-200 h-2 rounded-full">
                            <div class="bg-blue-600 h-2 rounded-full w-1/5"></div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row items-center">
                        <button class="mb-2 sm:mb-0 sm:mr-2 bg-orange-500 text-white px-4 py-2 rounded-full w-full sm:w-auto">₹620/Unit</button>
                        <input type="text" placeholder="Enter Amount" class="p-2 border w-full sm:w-auto">
                    </div>
                </div>
        
                <!-- Repeat similar structure for other product cards -->
            </div>
        </div>
        
  <div class="container mx-auto lg:p-4 bg-white shadow-lg rounded-lg">
            <h1 class="text-center text-2xl font-bold text-cyan-600 mb-6" id="project">Project</h1>
            <p class="mb-4 text-gray-700">
                We do not ask for money, we ask for your support, that support can be in the form of supplies, food, medicines, money and time. Your support will be appreciated by us and by the almighty god himself.
            </p>
            <div class="mb-6">
                <iframe width="560" height="315" class="w-full rounded-md shadow-md" src="https://www.youtube.com/embed/-4-90B4x3A8?si=8xH-5mbxWQFw7ijx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <p class="mb-6 text-gray-700">
                Spread over 3.5 acres of land beside the Haryana Jhajjar highway, Gokul Dham Gau Seva Mahatirth is the first of its kind animal hospital in Haryana. It was established in 2013 by Sunil Nimana with the sole purpose of helping injured and abandoned cows who are left on the streets to fend for themselves. Sunil had his own construction business before he had started this animal hospital - so what inspired him to embark on this journey?
            </p>
            <img src="{{asset('asset/img/Cesarean-1.jpg')}}" alt="Gokul Dham" class="w-full lg:h-full h-50 mb-6 rounded-md shadow-md">
</div>        
<h1 class="text-center text-2xl font-bold text-cyan-600 mb-6" id="update">Updates</h1>
<div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                    <div>
                        <img src="{{asset('asset/img/updates.jpg')}}" alt="Updates" class="w-full rounded-md shadow-md mb-4">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">
                            Donate for mother cows, it brings happiness and prosperity in the house
                            <br>Event Date: 29-Jul-2024 - Created on: 30-Jul-2024 09:24 PM - Posted By: Team Gokul Dham
                        </h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-md shadow-md">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Sno.</th>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Species</th>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Sick</th>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Accidental</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Male Calf</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">6</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">2</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Cow</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">18</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">3</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Female Calf</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">4</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Bull</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">7</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">5</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Nil Gayi</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr class="bg-gray-50 font-semibold">
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Total</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700"></td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">32</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="mt-4 text-gray-700">
                            Today the condition of cows has become so bad that people neither want to keep them near nor serve them. There will be very few such houses where you will find a mother cow. But in the Vedic period they were considered wealth. Today these cows need our support. There is one such organization which has been serving these cows. 32 persons were admitted to Gokuldham Gau Hospital on 29-07-2024. His condition was very bad. All of them were in dire need of treatment. Gokuldham is an organization where injured, sick and hungry cows are brought, so that those homeless and orphan cows can be taken good care of here. Saving the lives of cows by donating them is the greatest religion. Especially those cows that are sick, or need help. Cows have been served not only today but since the Vedic period. In ancient times, cows were kept as property. So that by serving them one can live on their milk, ghee etc. But today these cows have become homeless. They neither have a house to live in nor food to eat. Join our organization and donate for these destitute cows so that they can live a better life. There are 10,000 cows living in the cowshed of Gokuldham. Till now 92000 cows have been treated and cured. Please continue your cooperation with us. So that these cows can be useful in future also.
                        </p>
                    </div>
                </div>
            </div>
</div>
        
    
    {{--  --}}
        <div class="container mx-auto lg:p-4 bg-white shadow-lg rounded-lg" id="update">
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                    <div>
                        <img src="{{asset('asset/img/updates1.jpg')}}" alt="Updates" class="w-full rounded-md shadow-md mb-4">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">
                            Donate for mother cows, it brings happiness and prosperity in the house
                            <br>Event Date: 29-Jul-2024 - Created on: 30-Jul-2024 09:24 PM - Posted By: Team Gokul Dham
                        </h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-md shadow-md">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Sno.</th>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Species</th>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Sick</th>
                                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Accidental</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Male Calf</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">6</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">2</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Cow</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">18</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">3</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Female Calf</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">4</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Bull</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">7</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">5</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Nil Gayi</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                    <tr class="bg-gray-50 font-semibold">
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Total</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700"></td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">39</td>
                                        <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="mt-4 text-gray-700">
                            Today the condition of cows has become so bad that people neither want to keep them near nor serve them. There will be very few such houses where you will find a mother cow. But in the Vedic period they were considered wealth. Today these cows need our support. There is one such organization which has been serving these cows. 32 persons were admitted to Gokuldham Gau Hospital on 29-07-2024. His condition was very bad. All of them were in dire need of treatment. Gokuldham is an organization where injured, sick and hungry cows are brought, so that those homeless and orphan cows can be taken good care of here. Saving the lives of cows by donating them is the greatest religion. Especially those cows that are sick, or need help. Cows have been served not only today but since the Vedic period. In ancient times, cows were kept as property. So that by serving them one can live on their milk, ghee etc. But today these cows have become homeless. They neither have a house to live in nor food to eat. Join our organization and donate for these destitute cows so that they can live a better life. There are 10,000 cows living in the cowshed of Gokuldham. Till now 92000 cows have been treated and cured. Please continue your cooperation with us. So that these cows can be useful in future also.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    {{--  --}}
        <div class="container mx-auto lg:p-4 bg-white shadow-lg rounded-lg">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div>
                    <img src="{{asset('asset/img/update.jpg')}}" alt="Updates" class="w-full rounded-md shadow-md mb-4">
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">
                        Donate for mother cows, it brings happiness and prosperity in the house
                        <br>Event Date: 29-Jul-2024 - Created on: 30-Jul-2024 09:24 PM - Posted By: Team Gokul Dham
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white rounded-md shadow-md">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Sno.</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Species</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Sick</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-200 text-left text-sm font-semibold text-gray-600">Accidental</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Male Calf</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">6</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">2</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Cow</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">18</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">3</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Female Calf</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">4</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Bull</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">7</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">5</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Nil Gayi</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                </tr>
                                <tr class="bg-gray-50 font-semibold">
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">Total</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700"></td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">32</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-4 text-gray-700">
                        Today the condition of cows has become so bad that people neither want to keep them near nor serve them. There will be very few such houses where you will find a mother cow. But in the Vedic period they were considered wealth. Today these cows need our support. There is one such organization which has been serving these cows. 32 persons were admitted to Gokuldham Gau Hospital on 29-07-2024. His condition was very bad. All of them were in dire need of treatment. Gokuldham is an organization where injured, sick and hungry cows are brought, so that those homeless and orphan cows can be taken good care of here. Saving the lives of cows by donating them is the greatest religion. Especially those cows that are sick, or need help. Cows have been served not only today but since the Vedic period. In ancient times, cows were kept as property. So that by serving them one can live on their milk, ghee etc. But today these cows have become homeless. They neither have a house to live in nor food to eat. Join our organization and donate for these destitute cows so that they can live a better life. There are 10,000 cows living in the cowshed of Gokuldham. Till now 92000 cows have been treated and cured. Please continue your cooperation with us. So that these cows can be useful in future also.
                    </p>
                </div>
            </div>
        </div>    
       <div class="flex justify-center mt-3">
        <button class="px-4 py-2 bg-cyan-500 text-white rounded-md hover:bg-cyan-600 transition duration-300 ease-in-out ">Read More</button>
       </div>
    
    <div>
        {{-- sider --}}
<div class="grid grid-cols-1  gap-2">
<article class="cow-tradition">
        <div class="flex flex-wrap justify-between">
            <!-- Image Slider -->
            <div class="ritual w-full md:w-1/2 p-4 relative">
                <div x-data="{ currentSlide: 0 }" class="relative h-64 overflow-hidden rounded-lg">
                    <!-- Images -->
                    <img src="{{asset('asset/img/1.jpg')}}" alt="Sacred cow in a traditional setting 1" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 0, 'opacity-0': currentSlide !== 0 }">
                    <img src="{{asset('asset/img/2.jpg')}}" alt="Sacred cow in a traditional setting 2" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 1, 'opacity-0': currentSlide !== 1 }">
                    <img src="{{asset('asset/img/3.jpg')}}" alt="Sacred cow in a traditional setting 3" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 2, 'opacity-0': currentSlide !== 2 }">
                    <img src="{{asset('asset/img/4.jpg')}}" alt="Sacred cow in a traditional setting 1" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 0, 'opacity-0': currentSlide !== 0 }">
                    <img src="{{asset('asset/img/5.jpg')}}" alt="Sacred cow in a traditional setting 2" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 1, 'opacity-0': currentSlide !== 1 }">
                    <img src="{{asset('asset/img/6.jpg')}}" alt="Sacred cow in a traditional setting 3" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 2, 'opacity-0': currentSlide !== 2 }">
                    <img src="{{asset('asset/img/7.jpg')}}" alt="Sacred cow in a traditional setting 1" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 0, 'opacity-0': currentSlide !== 0 }">
                    <img src="{{asset('asset/img/8.jpg')}}" alt="Sacred cow in a traditional setting 2" class="absolute w-full h-full object-cover transition-opacity duration-500 ease-in-out" :class="{ 'opacity-100': currentSlide === 1, 'opacity-0': currentSlide !== 1 }">
                    
                    <!-- Prev/Next Arrows -->
                    <div class="absolute inset-0 flex items-center justify-between px-4">
                        <button 
                            class="bg-black text-white p-2 rounded-full bg-opacity-50 cursor-pointer hover:bg-opacity-75 transition"
                            x-on:click="currentSlide = currentSlide === 0 ? 2 : currentSlide - 1"
                        >
                            ❮
                        </button>
                        <button 
                            class="bg-black text-white p-2 rounded-full bg-opacity-50 cursor-pointer hover:bg-opacity-75 transition"
                            x-on:click="currentSlide = currentSlide === 2 ? 0 : currentSlide + 1"
                        >
                            ❯
                        </button>
                    </div>
      
                    <!-- Slide Indicators -->
                    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex gap-2">
                        <button 
                            class="w-3 h-3 rounded-full bg-white bg-opacity-50 transition"
                            :class="{'bg-opacity-100': currentSlide === 0}"
                            x-on:click="currentSlide = 0"
                        ></button>
                        <button 
                            class="w-3 h-3 rounded-full bg-white bg-opacity-50 transition"
                            :class="{'bg-opacity-100': currentSlide === 1}"
                            x-on:click="currentSlide = 1"
                        ></button>
                        <button 
                            class="w-3 h-3 rounded-full bg-white bg-opacity-50 transition"
                            :class="{'bg-opacity-100': currentSlide === 2}"
                            x-on:click="currentSlide = 2"
                        ></button>
                    </div>
                </div>
            </div>
      
            <!-- Ritual Details -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-md w-full md:w-1/2 mx-auto my-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Gallery</h1>
                <p class="text-gray-700 text-base leading-relaxed">
                    Day by day we are getting more and more opportunities to help more and more cows and cattle, as a result expenses are going high. We need your support so that one day we are strong enough to execute our mission throughout pan India, so that no injured/ill cow is left untreated.
                </p>
            </div>
            
        </div>
</article>


 
</div>
    
    
</div> 
    
<div class="bg-white lg:p-6 md:p-8 rounded-lg shadow-lg w-full md:w-3/4 mx-auto my-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Recent Donors</h1>
    <p class="text-gray-700 text-base leading-relaxed mb-6">
        We started with a small hospital and now we have a facility that treats over 1000 cows. We have saved over 92,000 cows to date. We have 4 Gaushalas from where we provide aid and treatment to cows that are ill, have suffered an accident, or are astray. It was only possible because of the support of people and the hard work of Sunil Nimana Ji. Be a companion and help us in our cause.
    </p>
    <div class="bg-gray-50 p-4 rounded-lg shadow-md grid grid-cols-3">
        <div class="flex items-center space-x-4 space-y-8 hover:bg-cyan-100 ">
            <div class="flex justify-center items-center w-16 h-16 bg-cyan-500 rounded-full text-white text-3xl">
                <i class="ri-user-3-fill"></i>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Anurag Kumar</h2>
                <p class="text-gray-600 text-sm">31-Jul-2024 01:36 PM, Rajasthan</p>
            </div>
        </div>
     
        <div class="flex items-center space-x-4 space-y-8 hover:bg-cyan-100 ">
            <div class="flex justify-center items-center w-16 h-16 bg-cyan-500 rounded-full text-white text-3xl">
                <i class="ri-user-3-fill"></i>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Anurag Kumar</h2>
                <p class="text-gray-600 text-sm">31-Jul-2024 01:36 PM, Rajasthan</p>
            </div>
        </div>

        <div class="flex items-center space-x-4">
            <div class="flex justify-center items-center w-16 h-16 bg-cyan-500 rounded-full text-white text-3xl">
                <i class="ri-user-3-fill"></i>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Anurag Kumar</h2>
                <p class="text-gray-600 text-sm">31-Jul-2024 01:36 PM, Rajasthan</p>
            </div>
        </div>
    </div>
 </div>   
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    
    
    
    
    
    
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('#slider > div');
        const dots = document.querySelectorAll('#dots > button');
    
        function updateSlider() {
            document.getElementById('slider').style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-cyan-600', index === currentSlide);
                dot.classList.toggle('bg-gray-400', index !== currentSlide);
            });
        }
    
        function changeSlide(direction) {
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            updateSlider();
        }
    
        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
        }
    
        // Optional: Auto-advance slides every 5 seconds
        setInterval(() => changeSlide(1), 5000);
    </script>
    
</div>

{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <i class="ri-whatsapp-fill"></i></a>

{{-- footer--}}
<footer class="relative w-full bg-cover bg-center text-white py-16">
    <div class="absolute inset-0 z-0">
      <img src="{{ asset('asset/img/_slider4.jpg') }}" alt="" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-black bg-opacity-75"></div>
    </div>
    <div class="relative z-10 container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
        <!-- About Section -->
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-6 text-cyan-300">Gokul Dham Gau Sewa Mahatirth</h2>
          <ul class="space-y-3 text-sm text-gray-300">
            <li class="flex items-start">
              <i class="ri-map-pin-line mr-2 mt-1 text-cyan-400"></i>
              <span>C/O Gokul Dham Gau Sewa Mahatirth, Nangla Kutani Road, Dadri, Jhajjar, 124103, Haryana, India</span>
            </li>
            <li class="flex items-center">
              <i class="ri-phone-line mr-2 text-cyan-400"></i>
              <span>8199821024, 9459012222</span>
            </li>
            <li class="flex items-center">
              <i class="ri-phone-line mr-2 text-cyan-400"></i>
              <span>8816809191 (Alternate)</span>
            </li>
            <li class="flex items-center">
              <i class="ri-mail-line mr-2 text-cyan-400"></i>
              <a href="mailto:info@gokuldhammahatirth.org" class="hover:text-cyan-300 transition duration-300">info@gokuldhammahatirth.org</a>
            </li>
          </ul>
          <div class="mt-6 flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-cyan-400 transition duration-300 text-xl"><i class="ri-facebook-fill"></i></a>
            <a href="#" class="text-gray-400 hover:text-cyan-400 transition duration-300 text-xl"><i class="ri-twitter-fill"></i></a>
            <a href="#" class="text-gray-400 hover:text-cyan-400 transition duration-300 text-xl"><i class="ri-youtube-fill"></i></a>
            <a href="#" class="text-gray-400 hover:text-cyan-400 transition duration-300 text-xl"><i class="ri-instagram-fill"></i></a>
          </div>
        </div>
  
        <!-- Quick Links -->
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-6 text-cyan-300">Quick Links</h2>
          <ul class="space-y-2 text-sm text-gray-300">
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">About Us</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Benefits of Cows</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Blog</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Contact Us</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">What's New</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Downloads</a></li>
          </ul>
        </div>
  
        <!-- Policies -->
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-6 text-cyan-300">Policies</h2>
          <ul class="space-y-2 text-sm text-gray-300">
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Terms & Conditions</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Privacy Policy</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Refund Policy</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">End User Services Agreement</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Disclaimer</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition duration-300">Newsletter</a></li>
          </ul>
        </div>
  
        <!-- Bank Details -->
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-6 text-cyan-300">Bank Details</h2>
          <ul class="space-y-2 text-sm text-gray-300">
            <li><strong class="text-white">Name:</strong> Gokul Dham Gau Sewa Mahatirth</li>
            <li><strong class="text-white">A/C No.:</strong> 50200021355191</li>
            <li><strong class="text-white">IFSC Code:</strong> HDFC0004423</li>
            <li><strong class="text-white">Branch Name:</strong> Dadri Toe</li>
            <li><strong class="text-white">Bank Name:</strong> HDFC Bank</li>
          </ul>
          <div class="mt-6">
            <img src="{{asset('asset/img/QR-Code100.jpg')}}" alt="QR Code" class="w-1/2 max-w-[150px] h-auto rounded-lg border border-gray-600 shadow-lg">
          </div>
        </div>
      </div>
  
      <div class="text-center mt-12 pt-8 border-t border-gray-700">
        <p class="text-sm text-gray-400">&copy; 2024 Gokul Dham Gau Sewa Mahatirth. All Rights Reserved.</p>
      </div>
    </div>
</footer>    
{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <i class="ri-whatsapp-fill"></i></a>
