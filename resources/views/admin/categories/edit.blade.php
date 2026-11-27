@extends('layouts.admin-layout')
@section('title', 'Edit category')
@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.categories.index') }}" class="text-sm font-medium text-fg-brand hover:underline">&larr; Back to categories</a>
        <h1 class="mt-2 text-2xl font-bold text-heading">Edit category</h1>
        <p class="mt-1 text-body">Update the details of "{{ $category['name'] }}".</p>
    </div>

    <div class="max-w-2xl rounded-base border border-default bg-neutral-primary-soft p-6 shadow-xs">
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            @include('admin.categories.partials.form', ['category' => $category])

            <div class="mt-6 flex items-center gap-3">
                <button
                    type="submit"
                    class="rounded-base bg-brand px-4 py-2.5 text-sm font-medium text-white shadow-xs hover:bg-brand-strong focus:outline-none focus:ring-4 focus:ring-brand-medium"
                >
                    Update category
                </button>
                <a href="{{ route('admin.categories.index') }}" class="rounded-base border border-default-medium px-4 py-2.5 text-sm font-medium text-heading hover:bg-neutral-secondary-medium">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
