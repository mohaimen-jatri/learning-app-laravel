<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Admin') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {!! ToastMagic::styles() !!}
</head>
<body class="min-h-screen bg-neutral-secondary-soft text-heading antialiased">
<div class="flex min-h-screen flex-col">
    <header class="px-6 py-5 lg:px-8">
        <a href="{{ route('admin.login') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-heading">
            <span class="flex size-8 items-center justify-center rounded-lg bg-brand font-bold text-white">A</span>
            {{ config('app.name', 'Laravel') }} Admin
        </a>
    </header>

    <main class="flex flex-1 items-center justify-center px-4 py-8">
        @yield('content')
    </main>

    <footer class="px-6 py-5 text-center text-sm text-body lg:px-8">
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Admin panel.
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
{!! ToastMagic::scripts() !!}
</body>
</html>
