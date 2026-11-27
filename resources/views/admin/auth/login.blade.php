@extends('layouts.admin-auth-layout')
@section('content')
    <section class="w-full flex justify-center">
        <div class="w-full max-w-md">
            <div class="mb-8 text-center">
                <span class="mx-auto mb-4 flex size-12 items-center justify-center rounded-xl bg-brand text-xl font-bold text-white">
                    A
                </span>
                <h1 class="text-2xl font-bold text-heading md:text-3xl">Admin login</h1>
                <p class="mt-2 text-body">Sign in to manage the platform.</p>
            </div>

            <div class="rounded-base border border-default bg-neutral-primary-soft p-6 shadow-xs sm:p-8">
                <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-heading">Email address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            placeholder="admin@example.com"
                            required
                            class="block w-full rounded-base border border-default-medium bg-neutral-secondary-medium px-3 py-2.5 text-sm text-heading shadow-xs placeholder:text-body focus:border-brand focus:ring-brand"
                        />
                        @error('email')
                            <p class="mt-2 text-sm text-fg-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-heading">Password</label>
                            <a href="#" class="text-sm font-medium text-fg-brand hover:underline">Forgot password?</a>
                        </div>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            autocomplete="current-password"
                            placeholder="••••••••"
                            required
                            class="block w-full rounded-base border border-default-medium bg-neutral-secondary-medium px-3 py-2.5 text-sm text-heading shadow-xs placeholder:text-body focus:border-brand focus:ring-brand"
                        />
                        @error('password')
                            <p class="mt-2 text-sm text-fg-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-base bg-brand px-4 py-2.5 text-sm font-medium text-white shadow-xs hover:bg-brand-strong focus:outline-none focus:ring-4 focus:ring-brand-medium"
                    >
                        Log in
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
