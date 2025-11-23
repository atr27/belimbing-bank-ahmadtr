<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Belimbing Bank') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900" x-data="{ sidebarOpen: false }">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen transition-all duration-300 ease-in-out md:ml-64">
            <!-- Topbar -->
            @include('layouts.topbar')

            <!-- Page Content -->
            <main class="flex-1 p-6">
                @if (isset($header))
                    <header class="mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">
                            {{ $header }}
                        </h1>
                    </header>
                @endif

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="p-6 text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} Belimbing Bank. All rights reserved.
            </footer>
        </div>
    </div>
</body>
</html>