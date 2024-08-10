<script src="https://cdn.tailwindcss.com"></script>
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>


<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-24">
    <div class="flex justify-between mb-6">
        <button id="donateOnceBtn" class="text-cyan-500 font-semibold border-b-2 border-cyan-500">Donate Once</button>
        <button id="donateMonthlyBtn" class="text-gray-600 hover:text-cyan-500">Donate Monthly</button>
        <button id="qrScanBtn" class="text-gray-600 hover:text-cyan-500">QR-Scan & Pay</button>
    </div>

    <!-- Donate Once Form -->
    <div id="donateOnceForm" class="donation-form">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Get Benefit of 80G</h2>
            <a href="{{Route('login')}}"><button class="bg-cyan-500 text-white px-4 py-2 rounded-full hover:bg-cyan-600">Login</button></a>
        </div>

        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Amount *</label>
                    <input type="text" placeholder="Amount" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number *</label>
                    <input type="tel" placeholder="Enter Mobile Number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                    <input type="text" placeholder="Enter Your Name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                    <input type="email" placeholder="enter email-id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">PAN No.</label>
                    <input type="text" placeholder="MANDATORY FOR 80G" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">State *</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                        <option>Select State</option>
                        <!-- Add other state options here -->
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-cyan-500 text-white py-2 px-4 rounded-md hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                    PROCEED
                </button>
            </div>
        </form>
    </div>

    <!-- Donate Monthly Form -->
    <div id="donateMonthlyForm" class="donation-form hidden">
        <h2 class="text-lg font-semibold mb-4">Donate Monthly</h2>
        
        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Amount *</label>
                    <input type="text" placeholder="Amount" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number *</label>
                    <input type="tel" placeholder="Enter Mobile Number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                    <input type="text" placeholder="Enter Your Name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                    <input type="email" placeholder="enter email-id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">PAN No.</label>
                    <input type="text" placeholder="MANDATORY FOR 80G" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">State *</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-cyan-500">
                        <option>Select State</option>
                        <!-- Add other state options here -->
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-cyan-500 text-white py-2 px-4 rounded-md hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                    SET UP MONTHLY DONATION
                </button>
            </div>
        </form>
                
            
    </div>

    <!-- QR-Scan & Pay Section -->
    <div id="qrScanSection" class="donation-form hidden">
        <h2 class="text-lg font-semibold mb-4">QR-Scan & Pay</h2>
        <div class="flex flex-col items-center">
            <img src="{{asset('asset/img/QR-Code100 (1).jpg')}}" alt="QR Code" class="w-48 h-48 mb-4">
            <p class="text-center text-gray-600">Scan this QR code with your mobile banking app to make a donation</p>
            <button type="submit" class="w-full bg-cyan-500 text-white py-2 px-4 rounded-md hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                PROCEED
            </button>
        </div>
    </div>
</div>

<script>
    const donateOnceBtn = document.getElementById('donateOnceBtn');
    const donateMonthlyBtn = document.getElementById('donateMonthlyBtn');
    const qrScanBtn = document.getElementById('qrScanBtn');
    const donateOnceForm = document.getElementById('donateOnceForm');
    const donateMonthlyForm = document.getElementById('donateMonthlyForm');
    const qrScanSection = document.getElementById('qrScanSection');

    function showSection(sectionToShow) {
        [donateOnceForm, donateMonthlyForm, qrScanSection].forEach(section => {
            section.classList.add('hidden');
        });
        sectionToShow.classList.remove('hidden');
    }

    function setActiveButton(button) {
        [donateOnceBtn, donateMonthlyBtn, qrScanBtn].forEach(btn => {
            btn.classList.remove('text-cyan-500', 'border-b-2', 'border-cyan-500');
            btn.classList.add('text-gray-600');
        });
        button.classList.remove('text-gray-600');
        button.classList.add('text-cyan-500', 'border-b-2', 'border-cyan-500');
    }

    donateOnceBtn.addEventListener('click', () => {
        showSection(donateOnceForm);
        setActiveButton(donateOnceBtn);
    });

    donateMonthlyBtn.addEventListener('click', () => {
        showSection(donateMonthlyForm);
        setActiveButton(donateMonthlyBtn);
    });

    qrScanBtn.addEventListener('click', () => {
        showSection(qrScanSection);
        setActiveButton(qrScanBtn);
    });
</script>



{{-- toggle --}}
<a href="https://wa.link/he2xkx" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <i class="ri-whatsapp-fill"></i></a>
<script>
    document.getElementById('nextToMonthly').addEventListener('click', function() {
        document.getElementById('donateForm').classList.add('hidden');
        document.getElementById('monthlyForm').classList.remove('hidden');
    });

    document.getElementById('nextToQR').addEventListener('click', function() {
        document.getElementById('monthlyForm').classList.add('hidden');
        document.getElementById('qrForm').classList.remove('hidden');
    });

    document.getElementById('backToDonate').addEventListener('click', function() {
        document.getElementById('qrForm').classList.add('hidden');
        document.getElementById('donateForm').classList.remove('hidden');
    });

    document.getElementById('donateLink').addEventListener('click', function() {
        document.getElementById('donateForm').classList.remove('hidden');
        document.getElementById('monthlyForm').classList.add('hidden');
        document.getElementById('qrForm').classList.add('hidden');
    });

    document.getElementById('monthlyLink').addEventListener('click', function() {
        document.getElementById('donateForm').classList.add('hidden');
        document.getElementById('monthlyForm').classList.remove('hidden');
        document.getElementById('qrForm').classList.add('hidden');
    });

    document.getElementById('scanLink').addEventListener('click', function() {
        document.getElementById('donateForm').classList.add('hidden');
        document.getElementById('monthlyForm').classList.add('hidden');
        document.getElementById('qrForm').classList.remove('hidden');
    });
</script>
