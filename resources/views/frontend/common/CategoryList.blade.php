@php
    $categories = $categories ?? [
        ['name' => 'Web Development', 'icon' => '💻', 'courses' => 42, 'tile' => 'bg-blue-50 text-blue-600'],
        ['name' => 'Mobile Apps', 'icon' => '📱', 'courses' => 18, 'tile' => 'bg-emerald-50 text-emerald-600'],
        ['name' => 'Data Science', 'icon' => '📊', 'courses' => 25, 'tile' => 'bg-purple-50 text-purple-600'],
        ['name' => 'UI/UX Design', 'icon' => '🎨', 'courses' => 16, 'tile' => 'bg-pink-50 text-pink-600'],
        ['name' => 'Marketing', 'icon' => '📣', 'courses' => 21, 'tile' => 'bg-orange-50 text-orange-600'],
        ['name' => 'Business', 'icon' => '💼', 'courses' => 14, 'tile' => 'bg-sky-50 text-sky-600'],
        ['name' => 'Photography', 'icon' => '📷', 'courses' => 9, 'tile' => 'bg-yellow-50 text-yellow-600'],
        ['name' => 'Languages', 'icon' => '🌍', 'courses' => 12, 'tile' => 'bg-teal-50 text-teal-600'],
    ];
@endphp

<section class="mx-auto w-full max-w-screen-xl px-4 py-12">
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-fg-brand">Categories</p>
            <h2 class="mt-1 text-2xl font-bold text-heading md:text-3xl">Browse by category</h2>
            <p class="mt-2 max-w-xl text-body">Pick a topic you like and start learning today.</p>
        </div>
        <a href="#" class="inline-flex items-center gap-1 text-sm font-medium text-fg-brand hover:underline">
            View all
            <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>
        </a>
    </div>

    <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($categories as $category)
            <li>
                <a href="#" class="group flex h-full items-center gap-4 rounded-base border border-default bg-neutral-primary-soft p-5 shadow-xs transition hover:-translate-y-0.5 hover:border-brand hover:shadow-md">
                    <span class="flex size-12 shrink-0 items-center justify-center rounded-lg text-2xl {{ $category['tile'] }}">
                        {{ $category['icon'] }}
                    </span>
                    <span class="flex flex-col">
                        <span class="font-semibold text-heading group-hover:text-fg-brand">{{ $category['name'] }}</span>
                        <span class="text-sm text-body">{{ $category['courses'] }} courses</span>
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</section>
