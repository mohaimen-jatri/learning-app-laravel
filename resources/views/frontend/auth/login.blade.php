@extends('layouts.app-layout')
@section('content')
    <section class="flex min-h-[calc(100vh-8rem)] items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="mb-8 text-center">
                <span class="mx-auto mb-4 flex size-12 items-center justify-center rounded-xl bg-brand text-xl font-bold text-white">
                    L
                </span>
                <h1 class="text-2xl font-bold text-heading md:text-3xl">Welcome back</h1>
                <p class="mt-2 text-body">Log in to continue your learning.</p>
            </div>

            <div class="rounded-base border border-default bg-neutral-primary-soft p-6 shadow-xs sm:p-8">
                <form action="#" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-heading">Email address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            placeholder="you@example.com"
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

                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            class="size-4 rounded-xs border border-default-medium bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft"
                        />
                        <label for="remember" class="ms-2 text-sm font-medium text-heading">Remember me</label>
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-base bg-brand px-4 py-2.5 text-sm font-medium text-white shadow-xs hover:bg-brand-strong focus:outline-none focus:ring-4 focus:ring-brand-medium"
                    >
                        Log in
                    </button>
                </form>

                <div class="my-6 flex items-center gap-3">
                    <span class="h-px flex-1 bg-neutral-tertiary"></span>
                    <span class="text-xs uppercase text-body">or</span>
                    <span class="h-px flex-1 bg-neutral-tertiary"></span>
                </div>

                <button
                    type="button"
                    class="flex w-full items-center justify-center gap-2 rounded-base border border-default-medium bg-neutral-primary px-4 py-2.5 text-sm font-medium text-heading shadow-xs hover:bg-neutral-tertiary"
                >
                    <svg class="size-5" aria-hidden="true" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Continue with Google
                </button>
            </div>

            <p class="mt-6 text-center text-sm text-body">
                Don't have an account?
                <a href="{{ route('user.signup') }}" class="font-medium text-fg-brand hover:underline">Sign up</a>
            </p>
        </div>
    </section>
@endsection
