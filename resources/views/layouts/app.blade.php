<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

        @if (!Request::is("/"))
        <div class="container mx-auto px-6 flex flex-wrap">
            <div class="p-2 md:w-30">
                <a href="javascript:goBack()" class=" flex items-center p-2 bg-blue-200 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                    <div>
                        <p class="text-xs font-medium ml-2">
                            Go back
                        </p>
                    </div>
                </a>
            </div>
        </div>
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
