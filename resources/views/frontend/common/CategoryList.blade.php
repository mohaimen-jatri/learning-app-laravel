@php
    $categories = $categories ?? [
        ['name' => 'Technology', 'icon' => '💻', 'posts' => 42, 'tile' => 'bg-blue-50 text-blue-600'],
        ['name' => 'Programming', 'icon' => '🧑‍💻', 'posts' => 36, 'tile' => 'bg-emerald-50 text-emerald-600'],
        ['name' => 'Design', 'icon' => '🎨', 'posts' => 18, 'tile' => 'bg-pink-50 text-pink-600'],
        ['name' => 'Travel', 'icon' => '✈️', 'posts' => 25, 'tile' => 'bg-sky-50 text-sky-600'],
        ['name' => 'Lifestyle', 'icon' => '🌿', 'posts' => 21, 'tile' => 'bg-teal-50 text-teal-600'],
        ['name' => 'Business', 'icon' => '💼', 'posts' => 14, 'tile' => 'bg-orange-50 text-orange-600'],
        ['name' => 'Health', 'icon' => '❤️', 'posts' => 19, 'tile' => 'bg-red-50 text-red-600'],
        ['name' => 'Food', 'icon' => '🍜', 'posts' => 11, 'tile' => 'bg-yellow-50 text-yellow-600'],
    ];
@endphp

<section class="mx-auto w-full max-w-screen-xl px-4 py-12">
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-fg-brand">Categories</p>
            <h2 class="mt-1 text-2xl font-bold text-heading md:text-3xl">Explore topics</h2>
            <p class="mt-2 max-w-xl text-body">Find stories and guides on the topics you care about.</p>
        </div>
        <a href="#" class="inline-flex items-center gap-1 text-sm font-medium text-fg-brand hover:underline">
            All categories
            <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>
        </a>
    </div>

    <ul class="grid grid-cols-2 gap-4 lg:grid-cols-4">
        @foreach ($categories as $category)
            <li>
                <a href="#" class="group flex h-full items-center gap-4 rounded-base border border-default bg-neutral-primary-soft p-4 shadow-xs transition hover:-translate-y-0.5 hover:border-brand hover:shadow-md sm:p-5">
                    <span class="flex size-12 shrink-0 items-center justify-center rounded-lg text-2xl {{ $category['tile'] }}">
                        {{ $category['icon'] }}
                    </span>
                    <span class="flex min-w-0 flex-col">
                        <span class="truncate font-semibold text-heading group-hover:text-fg-brand">{{ $category['name'] }}</span>
                        <span class="text-sm text-body">{{ $category['posts'] }} posts</span>
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</section>
