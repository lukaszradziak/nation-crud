<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
    >

    <!-- Styles -->
    <link
        rel="stylesheet"
        href="{{ mix('css/app.css') }}"
    >

    <!-- Scripts -->
    <script
        src="{{ mix('js/app.js') }}"
        defer
    ></script>
</head>

<body class="font-sans antialiased app-layout">

    <header class="bg-indigo-600">
        <nav
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
            aria-label="Top"
        >
            <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
                <div class="flex items-center">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <img
                            class="h-10 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                            alt=""
                        >
                    </a>
                    <div class="hidden ml-10 space-x-8 lg:block">
                        <a
                            href="{{ route('index') }}"
                            class="text-base font-medium text-white hover:text-indigo-50"
                        >
                            Home
                        </a>

                        <a
                            href="{{ route('client.index') }}"
                            class="text-base font-medium text-white hover:text-indigo-50"
                        >
                            Clients
                        </a>
                    </div>
                </div>
            </div>
            <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
                <a
                    href="{{ route('index') }}"
                    class="text-base font-medium text-white hover:text-indigo-50"
                >
                    Home
                </a>

                <a
                    href="{{ route('client.index') }}"
                    class="text-base font-medium text-white hover:text-indigo-50"
                >
                    Clients
                </a>
            </div>
        </nav>
    </header>

    <div class="p-4">
        <p>Hello in {{ config('app.name') }}!</p>
    </div>

</body>

</html>
