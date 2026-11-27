<nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo" />
            <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">LearningApp</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:items-center md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
                <li>
                    <a href="#" class="block py-2 px-3 text-white bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Blog</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Categories</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Contact</a>
                </li>
                @auth
                    <li class="mt-2 md:mt-0">
                        <button id="user-menu-button" data-dropdown-toggle="user-menu" data-dropdown-placement="bottom-end" type="button" class="flex w-full items-center gap-2 rounded-base border border-default bg-neutral-primary px-3 py-2 text-sm font-medium text-heading shadow-xs hover:bg-neutral-secondary-soft focus:outline-none focus:ring-4 focus:ring-neutral-tertiary md:w-auto">
                            <span class="flex size-7 items-center justify-center rounded-full bg-brand text-xs font-semibold uppercase text-white">
                                {{ mb_substr(auth()->user()->name, 0, 1) }}
                            </span>
                            <span class="max-w-32 truncate">{{ auth()->user()->name }}</span>
                            <svg class="ms-auto size-4 md:ms-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                            </svg>
                        </button>

                        <div id="user-menu" class="z-30 hidden w-56 rounded-base border border-default bg-neutral-primary-medium shadow-lg">
                            <div class="border-b border-default px-4 py-3 text-sm">
                                <p class="truncate font-semibold text-heading">{{ auth()->user()->name }}</p>
                                <p class="truncate text-body">{{ auth()->user()->email }}</p>
                            </div>
                            <ul class="p-2 text-sm font-medium text-body" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('user.dashboard') }}" class="flex w-full items-center gap-2 rounded p-2 hover:bg-neutral-tertiary-medium hover:text-heading">
                                        <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5h6v6H4zM14 5h6v4h-6zM14 13h6v6h-6zM4 15h6v4H4z"/>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex w-full items-center gap-2 rounded p-2 hover:bg-neutral-tertiary-medium hover:text-heading">
                                        <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('user.logout') }}">
                                        @csrf
                                        <button type="submit" class="flex w-full items-center gap-2 rounded p-2 text-fg-danger hover:bg-neutral-tertiary-medium">
                                            <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                                            </svg>
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="mt-2 md:mt-0">
                        <a href="{{ route('user.login') }}" class="block rounded-base bg-brand px-4 py-2 text-center text-sm font-medium text-white shadow-xs hover:bg-brand-strong focus:outline-none focus:ring-4 focus:ring-brand-medium">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
