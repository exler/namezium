<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Generate random names to use in books, games & startups and check the availability of their domains!">
    <meta name="keywords" content="name generator, domain availability, domain lookup">
    <title>{{ config('app.name', 'Namezium') }}</title>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-gray-100">
    <div id="page" class="min-h-screen">
        @include('layouts.navigation')

        @if (isset($breadcrumbs))
        {{ $breadcrumbs }}
        @endif

        <main class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>

        @include('layouts.footer')
    </div>

    <script>
        function goBack() {
            if (!document.referrer) window.location = "{{ route('home') }}";
            else history.back();
        };
    </script>
</body>

</html>
