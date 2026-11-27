@extends('layouts.admin-layout')
@section('title', 'Categories')
@section('content')
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-heading">Categories</h1>
            <p class="mt-1 text-body">Organize blog posts into categories.</p>
        </div>
        <a
            href="{{ route('admin.categories.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-base bg-brand px-4 py-2.5 text-sm font-medium text-white shadow-xs hover:bg-brand-strong focus:outline-none focus:ring-4 focus:ring-brand-medium"
        >
            <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" d="M12 5v14M5 12h14"/>
            </svg>
            Add category
        </a>
    </div>

    <div class="rounded-base border border-default bg-neutral-primary-soft shadow-xs">
        <div class="flex flex-col gap-3 border-b border-default px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-lg font-semibold text-heading">All categories</h2>
            <div class="relative w-full sm:w-64">
                <svg class="pointer-events-none absolute left-3 top-1/2 size-4 -translate-y-1/2 text-body" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" d="m21 21-4.35-4.35M17 10.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0Z"/>
                </svg>
                <input
                    type="search"
                    placeholder="Search categories"
                    class="block w-full rounded-base border border-default-medium bg-neutral-secondary-medium py-2 pl-9 pr-3 text-sm text-heading shadow-xs placeholder:text-body focus:border-brand focus:ring-brand"
                />
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-body">
                <thead class="bg-neutral-secondary-soft text-xs uppercase text-heading">
                    <tr>
                        <th scope="col" class="px-5 py-3">Name</th>
                        <th scope="col" class="px-5 py-3">Slug</th>
                        <th scope="col" class="px-5 py-3">Posts</th>
                        <th scope="col" class="px-5 py-3">Status</th>
                        <th scope="col" class="px-5 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="border-t border-default">
                            <td class="px-5 py-3">
                                <p class="font-medium text-heading">{{ $category['name'] }}</p>
                                <p class="mt-0.5 text-xs text-body">{{ $category['description'] }}</p>
                            </td>
                            <td class="px-5 py-3">{{ $category['slug'] }}</td>
                            <td class="px-5 py-3">{{ $category['posts_count'] }}</td>
                            <td class="px-5 py-3">
                                @if ($category['is_active'])
                                    <span class="rounded-full bg-success-soft px-2.5 py-0.5 text-xs font-medium text-fg-success-strong">Active</span>
                                @else
                                    <span class="rounded-full bg-neutral-secondary-medium px-2.5 py-0.5 text-xs font-medium text-heading">Inactive</span>
                                @endif
                            </td>
                            <td class="px-5 py-3">
                                <div class="flex items-center justify-end gap-2">
                                    <a
                                        href="{{ route('admin.categories.edit', $category['id']) }}"
                                        class="rounded-base border border-default-medium px-3 py-1.5 text-xs font-medium text-heading hover:bg-neutral-secondary-medium"
                                    >
                                        Edit
                                    </a>
                                    <button
                                        type="button"
                                        class="rounded-base border border-default-medium px-3 py-1.5 text-xs font-medium text-fg-danger hover:bg-neutral-secondary-medium"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
