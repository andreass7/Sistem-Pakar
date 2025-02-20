<header x-data="{ open: false }" class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-10 w-auto" src="{{ asset('img/logo-light.png') }}" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" @click="open = true"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <x-user.nav-link href="{{ route('User.Dashbord') }}" :active="request()->is('/')">Home</x-user.nav-link>
            <x-user.nav-link href="{{ route('User.Petunjuk') }}" :active="request()->is('petunjuk-user')">Petunjuk</x-user.nav-link>
            <x-user.nav-link href="{{ route('User.Pengembang') }}" :active="request()->is('pengembang-user')">Pengembang</x-user.nav-link>
            <x-user.nav-link href="{{ route('User.CaraPerawatan') }}" :active="request()->is('cara-perawatan')">Cara
                Perawatan</x-user.nav-link>
            <x-user.nav-link href="{{ route('User.GejalaSolusi') }}" :active="request()->is('gejala-user')">Gejala &
                Solusi</x-user.nav-link>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-sm/6 font-semibold text-gray-900 hover:mr-2 transition-all">Log Out
                    <span aria-hidden="true">&rarr;</span></button>
            </form>
        </div>
    </nav>

    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" x-show="open" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-10 w-auto" src="{{ asset('img/log.png') }}" alt="">
                </a>
                <button type="button" @click="open = false" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="{{ route('User.Dashbord') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                        <a href="{{ route('User.Petunjuk') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Petunjuk</a>
                        <a href="{{ route('User.Pengembang') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Pengembang</a>
                        <a href="{{ route('User.CaraPerawatan') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Cara
                            Perawatan</a>
                        <a href="{{ route('User.GejalaSolusi') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Gejala
                            & Solusi</a>
                    </div>
                    <div class="py-6">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
