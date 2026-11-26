@php
    $posts = $posts ?? [
        ['title' => 'Getting Started with Laravel 12: A Practical Guide', 'excerpt' => 'Learn the new folder structure, routing and Eloquent basics, and build your first app step by step.', 'category' => 'Programming', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg', 'author' => 'Sarah Ahmed', 'avatar' => 'https://flowbite.com/docs/images/people/profile-picture-1.jpg', 'date' => 'Nov 24, 2026', 'read_time' => 8],
        ['title' => '10 Small UI Details That Make a Big Difference', 'excerpt' => 'Spacing, color and type choices that make your design feel clean and easy to use.', 'category' => 'Design', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg', 'author' => 'Rafi Hasan', 'avatar' => 'https://flowbite.com/docs/images/people/profile-picture-2.jpg', 'date' => 'Nov 22, 2026', 'read_time' => 5],
        ['title' => 'A Weekend in Sylhet: Tea Gardens and Waterfalls', 'excerpt' => 'Where to stay, what to eat and the best places to visit on a short trip.', 'category' => 'Travel', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg', 'author' => 'Nadia Karim', 'avatar' => 'https://flowbite.com/docs/images/people/profile-picture-3.jpg', 'date' => 'Nov 20, 2026', 'read_time' => 6],
        ['title' => 'Vue 3 Composition API Explained Simply', 'excerpt' => 'Understand ref, reactive and computed with short and clear examples.', 'category' => 'Programming', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg', 'author' => 'Tanvir Islam', 'avatar' => 'https://flowbite.com/docs/images/people/profile-picture-4.jpg', 'date' => 'Nov 18, 2026', 'read_time' => 7],
        ['title' => 'How to Build a Morning Routine That Sticks', 'excerpt' => 'Simple habits that help you start the day with more energy and focus.', 'category' => 'Lifestyle', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg', 'author' => 'Sarah Ahmed', 'avatar' => 'https://flowbite.com/docs/images/people/profile-picture-1.jpg', 'date' => 'Nov 15, 2026', 'read_time' => 4],
        ['title' => 'Starting a Small Business With Low Budget', 'excerpt' => 'Real tips on planning, marketing and finding your first customers.', 'category' => 'Business', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg', 'author' => 'Rafi Hasan', 'avatar' => 'https://flowbite.com/docs/images/people/profile-picture-2.jpg', 'date' => 'Nov 12, 2026', 'read_time' => 9],
    ];

    $featuredPost = $posts[0] ?? null;
    $otherPosts = array_slice($posts, 1);
@endphp

<section class="mx-auto w-full max-w-screen-xl px-4 py-12">
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-fg-brand">Blog</p>
            <h2 class="mt-1 text-2xl font-bold text-heading md:text-3xl">Recent posts</h2>
            <p class="mt-2 max-w-xl text-body">Fresh articles from our writers, updated every week.</p>
        </div>
        <a href="#" class="inline-flex items-center gap-1 text-sm font-medium text-fg-brand hover:underline">
            View all posts
            <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>
        </a>
    </div>

    @if ($featuredPost)
        <article class="group mb-8 grid overflow-hidden rounded-base border border-default bg-neutral-primary-soft shadow-xs md:grid-cols-2">
            <a href="#" class="block aspect-[16/10] overflow-hidden bg-neutral-secondary-soft md:aspect-auto">
                <img src="{{ $featuredPost['image'] }}" alt="{{ $featuredPost['title'] }}" class="size-full object-cover transition duration-300 group-hover:scale-105">
            </a>
            <div class="flex flex-col justify-center gap-4 p-6 md:p-10">
                <div class="flex items-center gap-3 text-sm">
                    <span class="rounded-sm bg-brand px-2 py-1 text-xs font-medium text-white">Featured</span>
                    <span class="font-medium text-fg-brand">{{ $featuredPost['category'] }}</span>
                </div>
                <a href="#" class="text-2xl font-bold text-heading hover:text-fg-brand md:text-3xl">{{ $featuredPost['title'] }}</a>
                <p class="text-body">{{ $featuredPost['excerpt'] }}</p>
                <div class="flex items-center gap-3 pt-2">
                    <img src="{{ $featuredPost['avatar'] }}" alt="{{ $featuredPost['author'] }}" class="size-10 rounded-full object-cover">
                    <div class="text-sm">
                        <p class="font-semibold text-heading">{{ $featuredPost['author'] }}</p>
                        <p class="text-body">{{ $featuredPost['date'] }} · {{ $featuredPost['read_time'] }} min read</p>
                    </div>
                </div>
            </div>
        </article>
    @endif

    <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($otherPosts as $post)
            <li>
                <article class="group flex h-full flex-col overflow-hidden rounded-base border border-default bg-neutral-primary-soft shadow-xs transition hover:-translate-y-0.5 hover:shadow-md">
                    <a href="#" class="block aspect-[16/10] overflow-hidden bg-neutral-secondary-soft">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" loading="lazy" class="size-full object-cover transition duration-300 group-hover:scale-105">
                    </a>

                    <div class="flex flex-1 flex-col gap-3 p-5">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-medium uppercase tracking-wide text-fg-brand">{{ $post['category'] }}</span>
                            <span class="text-body">{{ $post['read_time'] }} min read</span>
                        </div>

                        <a href="#" class="line-clamp-2 text-lg font-semibold text-heading hover:text-fg-brand">{{ $post['title'] }}</a>
                        <p class="line-clamp-2 text-sm text-body">{{ $post['excerpt'] }}</p>

                        <div class="mt-auto flex items-center gap-3 border-t border-default pt-4">
                            <img src="{{ $post['avatar'] }}" alt="{{ $post['author'] }}" loading="lazy" class="size-8 rounded-full object-cover">
                            <div class="text-sm">
                                <p class="font-medium text-heading">{{ $post['author'] }}</p>
                                <p class="text-xs text-body">{{ $post['date'] }}</p>
                            </div>
                        </div>
                    </div>
                </article>
            </li>
        @endforeach
    </ul>
</section>
