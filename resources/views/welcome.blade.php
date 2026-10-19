<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Tari Kecak Bali</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow p-4 flex justify-between items-center px-10">
        <h1 class="text-xl font-bold text-red-600">Bali Kecak Ticket</h1>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-700 font-semibold hover:text-red-600 mr-4">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 font-semibold hover:text-red-600 mr-4">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="flex flex-col items-center justify-center text-center py-20 px-4">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Pesan Tiket Pertunjukan Tari Kecak Bali</h2>
        <p class="text-lg text-gray-600 max-w-2xl mb-8">Nikmati keindahan magis budaya Bali dan sunset spektakuler Uluwatu secara langsung. Amankan tiketmu sekarang!</p>
        
        @auth
            <a href="{{ url('/dashboard') }}" class="bg-red-600 text-white font-bold px-8 py-3 rounded-xl shadow-lg hover:bg-red-700 transition">Beli Tiket Sekarang</a>
        @else
            <a href="{{ route('login') }}" class="bg-red-600 text-white font-bold px-8 py-3 rounded-xl shadow-lg hover:bg-red-700 transition">Mulai Pesan Tiket</a>
        @endauth
    </div>

</body>
</html>