<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RHS Choirs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 h-screen">

                <div class="flex flex-col w-full max-w-2xl px-6 lg:max-w-7xl">
{{--                    <header class="absolute top-0 left-0 grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">--}}
                    <header class="items-center">
                        <div class="flex lg:justify-center items-center lg:col-start-2">
                            <div class="mt-4">
                                <x-application-logo
                                    class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                            </div>
                            @if (Route::has('login'))
                                <livewire:welcome.navigation />
                            @endif
                        </div>

                    </header>

                    <main class="mt-6 text-center">
                        <h1 class="font-bold text-2xl">RHS Choirs</h1>

                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        &copy {{ date('Y') }}
                    </footer>
                </div>

        </div>
    </body>
</html>
