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
<nav class="fixed top-0 z-50 w-full border-b border-default bg-neutral-primary-soft">
    <div class="flex items-center justify-between px-4 py-3 lg:px-6">
        <div class="flex items-center gap-3">
            <button
                type="button"
                data-drawer-target="admin-sidebar"
                data-drawer-toggle="admin-sidebar"
                aria-controls="admin-sidebar"
                class="inline-flex items-center rounded-base p-2 text-sm text-body hover:bg-neutral-secondary-medium focus:outline-none focus:ring-2 focus:ring-brand-soft sm:hidden"
            >
                <span class="sr-only">Open sidebar</span>
                <svg class="size-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" d="M5 7h14M5 12h14M5 17h14"/>
                </svg>
            </button>
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-heading">
                <span class="flex size-8 items-center justify-center rounded-lg bg-brand font-bold text-white">A</span>
                {{ config('app.name', 'Laravel') }} Admin
            </a>
        </div>

        <div class="flex items-center gap-3">
            <span class="hidden text-sm text-body sm:inline">{{ auth('admin')->user()->name }}</span>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button
                    type="submit"
                    class="rounded-base border border-default-medium px-3 py-1.5 text-sm font-medium text-heading hover:bg-neutral-secondary-medium focus:outline-none focus:ring-2 focus:ring-brand-soft"
                >
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<aside
    id="admin-sidebar"
    class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-e border-default bg-neutral-primary-soft pt-16 transition-transform sm:translate-x-0"
    aria-label="Sidebar"
>
    <div class="h-full overflow-y-auto px-3 py-4">
        <ul class="space-y-1 text-sm font-medium">
            <li>
                <a
                    href="{{ route('admin.dashboard') }}"
                    @class([
                        'flex items-center gap-3 rounded-base px-3 py-2',
                        'bg-brand text-white' => request()->routeIs('admin.dashboard'),
                        'text-heading hover:bg-neutral-secondary-medium' => ! request()->routeIs('admin.dashboard'),
                    ])
                >
                    <svg class="size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 5h6v6H4zM14 5h6v4h-6zM14 13h6v6h-6zM4 15h6v4H4z"/>
                    </svg>
                    Dashboard
                </a>
            </li>
        </ul>
    </div>
</aside>

<main class="p-4 pt-20 sm:ml-64 lg:p-6 lg:pt-22">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
{!! ToastMagic::scripts() !!}
</body>
</html>
