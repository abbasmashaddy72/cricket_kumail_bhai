<nav class="z-40 flex flex-wrap items-center justify-start py-2 bg-white dark:bg-dark-card">
    <div class="absolute justify-end flex-grow-0 hidden w-full bg-white top-12 px-7" id="navbar1">
        <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
            <li class="nav-item dropdown" x-data="{ open: false }">
                <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                    @if (!empty(Auth::user()->profile_image))
                        <img src="{{ Auth::user()->profile_image }}" alt="User-Profile" class="max-w-full rounded-full "
                            height="50px" width="50px">
                    @else
                        <div
                            class="relative flex items-center justify-center w-12 h-12 m-1 mr-2 text-xl text-white uppercase bg-blue-500 rounded-full">
                            {{ Auth::user()->initials }}</div>
                    @endif
                    <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                        <h6 class="mb-0 text-base font-medium dark:text-gray-600">
                            {{ Auth::user()->name }}</h6>
                        <p class="mb-0 text-lg text-gray-600 caption-sub-title dark:text-white">
                            {{ Auth::user()->role }}
                        </p>
                    </div>
                </a>
                <ul x-show="open" class="absolute right-0 z-40 w-40 p-0 py-2 bg-white" @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <x-dropdown-link :href="route('admin.user.edit', [Auth::user()->id])" class="rounded-t">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <x-backend.hr-line />
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" class="rounded-b"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </ul>
            </li>
        </ul>
    </div>
    <div class="w-full px-7 ">
        <div class="relative flex items-center justify-between ">
            <div class="absolute right-0 flex items-center px-2 py-1 text-xl border border-gray-500 rounded lg:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center text-xl text-gray-500 rounded"
                    onclick="toggleNavbar('navbar1', 'cancel', 'mobileicon')" aria-controls="mobile-menu"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block w-8 h-8" id="mobileicon" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden w-6 h-6" id="cancel" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                        fill="gray">
                        <path
                            d="M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-start flex-1 lg:justify-center sm:items-stretch ">
                <div class="flex items-center xl:hidden">
                    <div class="p-1 mr-4 text-white bg-blue-500 shadow-md top-5 rounded-2xl hover:cursor-pointer"
                        data-toggle="sidebar" data-active="true">
                        <i class="flex items-center">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                </path>
                            </svg>
                        </i>
                    </div>
                    <svg width="30" class="text-blue-500" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                            transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                            transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                            transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                            transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                    </svg>
                    <a class="m-0 mb-0 ml-4 text-2xl font-semibold opacity-100;" href="#">
                        Hope UI
                    </a>
                </div>

                <div class="hidden transition-all duration-700 ease-in-out lg:flex lg:flex-grow">
                    <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
                        <li class="nav-item dropdown" x-data="{ open: false }">
                            <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                                @if (!empty(Auth::user()->profile_image))
                                    <img src="{{ Auth::user()->profile_image }}" alt="User-Profile"
                                        class="max-w-full rounded-full " height="50px" width="50px">
                                @else
                                    <div
                                        class="relative flex items-center justify-center w-12 h-12 m-1 mr-2 text-xl text-white uppercase bg-blue-500 rounded-full">
                                        {{ Auth::user()->initials }}</div>
                                @endif
                                <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">
                                        {{ Auth::user()->name }}</h6>
                                    <p class="mb-0 text-lg text-gray-600 caption-sub-title dark:text-white">
                                        {{ Auth::user()->role }}
                                    </p>
                                </div>
                            </a>
                            <ul x-show="open"
                                class="absolute right-0 z-40 w-40 p-0 py-2 bg-white rounded dark:bg-dark-card"
                                @click.outside="open = false" x-transition:enter="transition ease-in duration-500"
                                x-transition:enter-start="opacity-0 transform translate-y-16"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-out duration-500"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform translate-y-0">
                                <x-dropdown-link :href="route('admin.user.edit', [Auth::user()->id])" class="rounded-t">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <x-backend.hr-line />
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" class="rounded-b"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
