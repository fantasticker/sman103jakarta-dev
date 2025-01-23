<header x-data="{ open: false }">
    <nav class="bg-white shadow-md mx-auto flex items-center justify-between p-5 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-12 w-auto" src="{{ asset('storage/images/logo.png') }}" alt="Gambar" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button @click="open = true" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-1">
            <a href="/"
                class="{{ request()->is('/') ? 'bg-gray-100' : '' }} text-sm/6 font-semibold text-gray-900 hover:text-orange-400 rounded-md px-3 py-2">Beranda</a>
            {{-- <a href="/tentang"
                class="{{ request()->is('tentang') ? 'bg-gray-100' : '' }} text-sm/6 font-semibold text-gray-900 hover:text-orange-400 rounded-md px-3 py-2">Tentang</a> --}}
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                class="flex items-center justify-between w-full py-2 px-3 text-sm/6 font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Tentang
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
                class="z-40 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 border-2">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="/profil-singkat"
                            class="{{ request()->is('profil-singkat') ? 'bg-gray-100' : '' }} block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil
                            Singkat</a>
                    </li>
                    <li>
                        <a href="/manajemen-sekolah"
                            class="{{ request()->is('manajemen-sekolah') ? 'bg-gray-100' : '' }} block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manajemen
                            Sekolah</a>
                    </li>
                    <li>
                        <a href="/pendanaan"
                            class="{{ request()->is('pendanaan') ? 'bg-gray-100' : '' }} block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BOS
                            dan BOP</a>
                    </li>
                </ul>
            </div>
            <a href="/berita"
                class="{{ request()->is('berita') ? 'bg-gray-100' : '' }} text-sm/6 font-semibold text-gray-900 hover:text-orange-400 rounded-md px-3 py-2">Berita</a>
            <a href="/fasilitas"
                class="{{ request()->is('fasilitas') ? 'bg-gray-100' : '' }} text-sm/6 font-semibold text-gray-900 hover:text-orange-400 rounded-md px-3 py-2">Fasilitas</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-show="open" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div @click.away="open = false"
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-12 w-auto" src="{{ asset('storage/images/logo.png') }}" alt="" />
                </a>
                <button @click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="{{ request()->is('/') ? 'bg-gray-50' : '' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Beranda</a>
                        <a href="/tentang"
                            class="{{ request()->is('tentang') ? 'bg-gray-50' : '' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Tentang</a>
                        <a href="/berita"
                            class="{{ request()->is('berita') ? 'bg-gray-50' : '' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Berita</a>
                        <a href="/fasilitas"
                            class="{{ request()->is('fasilitas') ? 'bg-gray-50' : '' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Fasilitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
