<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        
        {{-- memanggil komponen navigation untuk home --}}
        @include('layouts.navigationhome')

        <!-- Page Content -->
        <main>
            {{-- Slot untuk halaman konten yang berubah dinamis --}}
            {{ $slot }}
        </main>
    </div>
</body>
</html>