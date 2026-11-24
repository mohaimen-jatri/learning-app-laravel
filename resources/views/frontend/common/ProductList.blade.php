@php
    $products = $products ?? [
        ['name' => 'Complete Laravel Masterclass', 'category' => 'Web Development', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg', 'rating' => 4.8, 'reviews' => 320, 'price' => 49, 'old_price' => 89, 'badge' => 'Bestseller'],
        ['name' => 'Vue 3 From Zero to Hero', 'category' => 'Web Development', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg', 'rating' => 4.7, 'reviews' => 210, 'price' => 39, 'old_price' => 69, 'badge' => 'New'],
        ['name' => 'Flutter Mobile App Development', 'category' => 'Mobile Apps', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg', 'rating' => 4.6, 'reviews' => 154, 'price' => 45, 'old_price' => null, 'badge' => null],
        ['name' => 'Python for Data Science', 'category' => 'Data Science', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg', 'rating' => 4.9, 'reviews' => 480, 'price' => 59, 'old_price' => 99, 'badge' => 'Bestseller'],
        ['name' => 'UI/UX Design Fundamentals', 'category' => 'UI/UX Design', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg', 'rating' => 4.5, 'reviews' => 98, 'price' => 29, 'old_price' => null, 'badge' => null],
        ['name' => 'Digital Marketing Essentials', 'category' => 'Marketing', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg', 'rating' => 4.4, 'reviews' => 76, 'price' => 25, 'old_price' => 49, 'badge' => null],
        ['name' => 'Start Your Own Business', 'category' => 'Business', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg', 'rating' => 4.6, 'reviews' => 132, 'price' => 35, 'old_price' => null, 'badge' => 'New'],
        ['name' => 'Spoken English Made Easy', 'category' => 'Languages', 'image' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg', 'rating' => 4.7, 'reviews' => 265, 'price' => 19, 'old_price' => 39, 'badge' => null],
    ];
@endphp

<section class="mx-auto w-full max-w-screen-xl px-4 py-12">
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-fg-brand">Products</p>
            <h2 class="mt-1 text-2xl font-bold text-heading md:text-3xl">Popular products</h2>
            <p class="mt-2 max-w-xl text-body">Our most loved products, chosen by thousands of learners.</p>
        </div>
        <a href="#" class="inline-flex items-center gap-1 text-sm font-medium text-fg-brand hover:underline">
            View all
            <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>
        </a>
    </div>

    <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($products as $product)
            <li class="group flex flex-col overflow-hidden rounded-base border border-default bg-neutral-primary-soft shadow-xs transition hover:-translate-y-0.5 hover:shadow-md">
                <a href="#" class="relative block aspect-[4/3] overflow-hidden bg-neutral-secondary-soft">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" loading="lazy" class="size-full object-cover transition duration-300 group-hover:scale-105">
                    @if ($product['badge'])
                        <span class="absolute start-3 top-3 rounded-sm bg-brand px-2 py-1 text-xs font-medium text-white">{{ $product['badge'] }}</span>
                    @endif
                </a>

                <div class="flex flex-1 flex-col gap-3 p-5">
                    <span class="text-xs font-medium uppercase tracking-wide text-body">{{ $product['category'] }}</span>

                    <a href="#" class="line-clamp-2 font-semibold text-heading hover:text-fg-brand">{{ $product['name'] }}</a>

                    <div class="flex items-center gap-1 text-sm">
                        <svg class="size-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>
                        <span class="font-semibold text-heading">{{ $product['rating'] }}</span>
                        <span class="text-body">({{ $product['reviews'] }})</span>
                    </div>

                    <div class="mt-auto flex items-center justify-between gap-2 pt-2">
                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-heading">${{ $product['price'] }}</span>
                            @if ($product['old_price'])
                                <span class="text-sm text-body line-through">${{ $product['old_price'] }}</span>
                            @endif
                        </div>
                        <button type="button" class="inline-flex items-center gap-1.5 rounded-base bg-brand px-3 py-2 text-sm font-medium text-white hover:bg-brand-strong focus:outline-none focus:ring-4 focus:ring-brand-medium">
                            <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                            </svg>
                            Add
                        </button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>
