<x-home-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        
                        <!-- Bagian Header & Filter Tanggal sesuai Modul -->
                        <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
                            
                            <div class="flex items-center">
                                <div class="flex items-center space-x-2">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg p-2.5" placeholder="Select date start">
                                    <span class="text-gray-500">to</span>
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg p-2.5" placeholder="Select date end">
                                </div>
                                <button type="button" class="ml-4 px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-md hover:bg-blue-50 transition duration-150">Check</button>
                            </div>
                        </div>

                        <section>
                            {{-- Tiket 1: Kecak Fire Gianyar --}}
                            <div class="md:flex font-sans pt-8 border-b border-gray-200 pb-8">
                                <div class="md:shrink-0">
                                    <img src="https://www.baliaround.com/wp-content/uploads/2014/05/kecakdance.jpg" alt="" class="h-48 w-full md:h-full md:w-56 object-cover rounded-lg" loading="lazy" />
                                </div>
                                <div class="p-6 flex-1">
                                    <div class="flex flex-wrap justify-between">
                                        <h1 class="text-xl font-medium text-slate-900">
                                            Kecak Fire Gianyar
                                        </h1>
                                        <div class="text-sm font-medium text-slate-400">
                                            Available
                                        </div>
                                    </div>
                                    <div class="w-full mt-2 text-3xl font-bold text-violet-600">
                                        Rp. 120.000
                                    </div>
                                    <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200 text-gray-600">
                                        First, one of the most-visited tourist attractions in Bali is Ubud, visited by either local or international tourists. Ubud Bali tourist attraction has astonished many visitors who always want to return.
                                    </div>
                                    <div class="flex space-x-4 mb-5 text-sm font-medium">
                                        <a href="{{ route('booking') }}" class="inline-flex items-center justify-center h-10 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-violet-700 transition">
                                            Book Now
                                        </a>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModalLg" class="h-10 px-6 font-semibold rounded-full border border-slate-300 text-slate-900 hover:bg-gray-50 transition" type="button">
                                            Check Availability
                                        </button>
                                    </div>
                                    <p class="text-sm text-slate-500">
                                        Free welcome drink, mask, and lunch.
                                    </p>
                                </div>
                            </div>

                            {{-- Tiket 2: Kecak Fire & Trance Dance --}}
                            <div class="md:flex font-sans pt-8">
                                <div class="md:shrink-0">
                                    <img src="https://www.baliaround.com/wp-content/uploads/2014/05/kecakdance.jpg" alt="" class="h-48 w-full md:h-full md:w-56 object-cover rounded-lg" loading="lazy" />
                                </div>
                                <div class="p-6 flex-1">
                                    <div class="flex flex-wrap justify-between">
                                        <h1 class="text-xl font-medium text-slate-900">
                                            Kecak Fire & Trance Dance (Pura Dalem Taman Kaja)
                                        </h1>
                                        <div class="text-sm font-medium text-slate-400">
                                            Available
                                        </div>
                                    </div>
                                    <div class="w-full mt-2 text-3xl font-bold text-violet-600">
                                        Rp. 150.000
                                    </div>
                                    <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200 text-gray-600">
                                        First, one of the most-visited tourist attractions in Bali is Ubud, visited by either local or international tourists. Ubud Bali tourist attraction has astonished many visitors who always want to return.
                                    </div>
                                    <div class="flex space-x-4 mb-5 text-sm font-medium">
                                        <a href="{{ route('booking') }}" class="inline-flex items-center justify-center h-10 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-violet-700 transition">
                                            Book Now
                                        </a>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModalLg" class="h-10 px-6 font-semibold rounded-full border border-slate-300 text-slate-900 hover:bg-gray-50 transition" type="button">
                                            Check Availability
                                        </button>
                                    </div>
                                    <p class="text-sm text-slate-500">
                                        Free welcome drink, mask, and lunch.
                                    </p>
                                </div>
                            </div>

                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Container untuk Check Availability -->
    <div id="customModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-4 m-4">
            @include('frontpage.calendar')
        </div>
    </div>

    <!-- Script Interaktif Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const checkAvailBtns = document.querySelectorAll("[data-bs-target='#exampleModalLg']");
            const modal = document.getElementById("customModal");
            const closeBtns = document.querySelectorAll("[data-bs-dismiss='modal']");

            checkAvailBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    modal.classList.remove("hidden");
                });
            });

            closeBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    modal.classList.add("hidden");
                });
            });

            modal.addEventListener("click", function (e) {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
</x-home-layout>