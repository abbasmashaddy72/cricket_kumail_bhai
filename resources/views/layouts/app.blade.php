<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/backend/app.css') }}">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @stack('styles')
    @livewireStyles
</head>

<body class="overflow-x-hidden bg-body dark:bg-dark-bg">

    @include('layouts.backend.loader')

    <div>

        @include('layouts.backend.sidebar')

        <main class="flex flex-col justify-between h-screen main-content" x-data="{ data: true }">
            <div class="relative">

                @include('layouts.backend.navbar')

            </div>

            <div class="p-6 py-0 mt-4 mb-auto lg:p-10 lg:py-0 container-fluid">
                <div class="flex flex-wrap">
                    {{ $slot }}
                </div>
            </div>

            @include('layouts.backend.footer')

        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/backend/hope-ui.js') }}"></script>
    <script src="{{ asset('js/backend/app.js') }}"></script>
    @livewireScripts
    @stack('scripts')

    <!-- Browser Sync -->
    @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>"
                .replace("HOST", location.hostname));
        </script>
    @endif
</body>

</html>
