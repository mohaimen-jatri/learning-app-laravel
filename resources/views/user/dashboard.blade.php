@extends('layouts.app-layout')
@section('content')
    <section class="mx-auto max-w-screen-xl px-4 py-8">
        <div class="mb-8 flex flex-col gap-4 rounded-base border border-default bg-neutral-primary-soft p-6 shadow-xs sm:flex-row sm:items-center sm:justify-between">
            <div class="flex items-center gap-4">
                <span class="flex size-14 items-center justify-center rounded-full bg-brand text-xl font-semibold uppercase text-white">
                    {{ mb_substr(auth()->user()->name, 0, 1) }}
                </span>
                <div>
                    <h1 class="text-2xl font-bold text-heading">Welcome back, {{ auth()->user()->name }}!</h1>
                    <p class="mt-1 text-body">Share your ideas with the world. What will you write today?</p>
                </div>
            </div>
            <a href="#" class="inline-flex items-center justify-center rounded-base bg-brand px-4 py-2.5 text-sm font-medium text-white shadow-xs hover:bg-brand-strong focus:outline-none focus:ring-4 focus:ring-brand-medium">
                Write new post
            </a>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['label' => 'Total posts', 'value' => 0],
                ['label' => 'Published', 'value' => 0],
                ['label' => 'Drafts', 'value' => 0],
                ['label' => 'Total views', 'value' => 0],
            ] as $stat)
                <div class="rounded-base border border-default bg-neutral-primary-soft p-5 shadow-xs">
                    <p class="text-sm text-body">{{ $stat['label'] }}</p>
                    <p class="mt-2 text-3xl font-bold text-heading">{{ $stat['value'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-8 grid grid-cols-1 gap-6 lg:grid-cols-3">
            <div class="rounded-base border border-default bg-neutral-primary-soft shadow-xs lg:col-span-2">
                <div class="border-b border-default px-5 py-4">
                    <h2 class="text-lg font-semibold text-heading">My recent posts</h2>
                </div>
                <div class="flex flex-col items-center px-5 py-12 text-center">
                    <svg class="size-12 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.4-10a2 2 0 0 1 0 2.8l-6.8 6.8L8 14l.7-3.6 6.8-6.8a2 2 0 0 1 2.9 0Z"/>
                    </svg>
                    <p class="mt-4 font-medium text-heading">You haven't written any post yet</p>
                    <p class="mt-1 text-sm text-body">Your published posts and drafts will show up here.</p>
                </div>
            </div>

            <div class="rounded-base border border-default bg-neutral-primary-soft shadow-xs">
                <div class="border-b border-default px-5 py-4">
                    <h2 class="text-lg font-semibold text-heading">My account</h2>
                </div>
                <dl class="space-y-4 px-5 py-5 text-sm">
                    <div>
                        <dt class="text-body">Name</dt>
                        <dd class="mt-1 font-medium text-heading">{{ auth()->user()->name }}</dd>
                    </div>
                    <div>
                        <dt class="text-body">Email</dt>
                        <dd class="mt-1 break-all font-medium text-heading">{{ auth()->user()->email }}</dd>
                    </div>
                    <div>
                        <dt class="text-body">Member since</dt>
                        <dd class="mt-1 font-medium text-heading">{{ auth()->user()->created_at->format('d M Y') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
@endsection
