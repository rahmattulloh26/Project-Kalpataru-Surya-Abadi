<header class="w-full fixed top-0 z-[999] font-inter font-bold bg-white transition-shadow duration-300">
    <div class="w-full px-6 md:px-10 xl:px-16 py-2 xl:py-0">
        <div class="flex items-center justify-between gap-8">

            {{-- ══ KIRI: Logo ══ --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 md:gap-3 shrink-0">
                <img src="{{ asset('src/img/LOGO KALPATARU SURYA ABADI.png') }}" alt="Kalpataru Surya Abadi"
                    class="w-12 md:w-14 lg:w-16 object-contain">
                <div class="flex flex-col leading-none gap-0.5">
                    <span
                        class="text-[11px] md:text-xs lg:text-sm text-hijau font-bold uppercase whitespace-nowrap tracking-wide">
                        PT Kalpataru Surya Abadi
                    </span>
                    <span class="text-[8px] md:text-[9px] lg:text-[10px] text-black font-semibold whitespace-nowrap">
                        Konsultasi Lingkungan dan Perizinan Usaha
                    </span>
                </div>
            </a>

            {{-- ══ KANAN: Nav + Contact Us (berjejer ke kanan) ══ --}}
            <div class="flex items-center">

                {{-- Overlay Hitam Mobile --}}
                <div id="nav-overlay"
                    class="hidden absolute top-full right-0 w-screen h-screen bg-black/50 z-30 xl:hidden transition-opacity touch-none overscroll-none">
                </div>

                {{-- Nav — desktop --}}
                <nav id="nav-menu"
                    class="hidden absolute bg-white text-hijau w-[60vw] sm:w-[50vw] h-screen shadow-2xl
                           right-0 top-full border-t border-gray-100
                           xl:flex xl:static xl:bg-transparent xl:shadow-none xl:w-auto xl:h-auto xl:border-none
                           z-40">
                    <ul class="flex flex-col w-full xl:flex-row xl:items-center">

                        <li class="w-full xl:w-auto border-b border-gray-100 xl:border-none">
                            <a href="{{ route('home') }}"
                                class="block py-4 px-6 xl:py-8 text-sm transition-colors
                                       {{ request()->routeIs('home') ? 'bg-hijau text-white xl:bg-transparent xl:text-hijau' : 'hover:text-hijau hover:bg-gray-50 xl:hover:bg-transparent' }}">
                                <span
                                    class="{{ request()->routeIs('home') ? 'xl:border-b-3 xl:border-hijau pb-0.5 font-bold' : '' }}">
                                    Home
                                </span>
                            </a>
                        </li>

                        <li class="w-full xl:w-auto border-b border-gray-100 xl:border-none">
                            <a href="{{ route('about-us') }}"
                                class="block py-4 px-6 xl:py-8 text-sm transition-colors
                                       {{ request()->routeIs('about-us') ? 'bg-hijau text-white xl:bg-transparent xl:text-hijau' : 'hover:text-hijau hover:bg-gray-50 xl:hover:bg-transparent' }}">
                                <span
                                    class="{{ request()->routeIs('about-us') ? 'xl:border-b-3 xl:border-hijau pb-0.5 font-bold' : '' }}">
                                    About Us
                                </span>
                            </a>
                        </li>

                        {{-- Dropdown Service --}}
                        <li
                            class="relative xl:flex items-center w-full xl:w-auto border-b border-gray-100 xl:border-none group">
                            <button type="button" id="produk-dropdown-btn"
                                class="flex items-center justify-between xl:justify-start gap-1.5 py-4 px-6 xl:py-8 text-sm transition-colors cursor-default xl:cursor-pointer w-full
                                       {{ request()->routeIs('service*') ? 'bg-hijau text-white xl:bg-transparent xl:text-hijau' : 'hover:text-hijau hover:bg-gray-50 xl:hover:bg-transparent' }}">
                                <span
                                    class="{{ request()->routeIs('service*') ? 'xl:border-b-3 xl:border-hijau pb-0.5 font-bold' : '' }}">
                                    Service
                                </span>
                                {{-- Chevron Icon (Hanya Mobile) --}}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor"
                                    class="w-4 h-4 transition-transform duration-300 xl:hidden {{ request()->routeIs('service*') ? 'text-white' : 'text-gray-400' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>

                            {{-- Dropdown Menu --}}
                            <ul id="produk-dropdown-menu"
                                class="hidden w-full bg-gray-50 xl:bg-white xl:absolute xl:top-[100%] xl:left-0 xl:w-56 xl:shadow-sm xl:group-hover:block transition-all duration-300 z-50 mt-0.5">
                                <li>
                                    <a href="{{ route('service') }}"
                                        class="block px-10 xl:px-6 py-3.5 text-xs md:text-sm text-gray-600 hover:text-hijau hover:bg-gray-100 xl:hover:bg-hijau/5 transition-colors border-b border-gray-200 xl:border-gray-50">
                                        Produk 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-10 xl:px-6 py-3.5 text-xs md:text-sm text-gray-600 hover:text-hijau hover:bg-gray-100 xl:hover:bg-hijau/5 transition-colors border-b border-gray-200 xl:border-gray-50">
                                        Dummy 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-10 xl:px-6 py-3.5 text-xs md:text-sm text-gray-600 hover:text-hijau hover:bg-gray-100 xl:hover:bg-hijau/5 transition-colors">
                                        Dummy 3
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="w-full xl:w-auto">
                            <a href="{{ route('portofolio') }}"
                                class="block py-4 px-6 xl:py-8 text-sm transition-colors
                                       {{ request()->routeIs('portofolio') ? 'bg-hijau text-white xl:bg-transparent xl:text-hijau' : 'hover:text-hijau hover:bg-gray-50 xl:hover:bg-transparent' }}">
                                <span
                                    class="{{ request()->routeIs('portofolio') ? 'xl:border-b-3 xl:border-hijau pb-0.5 font-bold' : '' }}">
                                    Portofolio
                                </span>
                            </a>
                        </li>

                        {{-- Contact Us Button (Mobile Only) --}}
                        <li class="w-full xl:hidden px-6 py-6 border-t border-gray-100 mt-auto">
                            <a href="{{ route('contact') }}"
                                class="flex items-center justify-center w-full
                                       px-8 py-2.5 text-sm font-bold rounded-[2px]
                                       border-2 border-hijau text-hijau
                                       hover:bg-hijau hover:text-white
                                       focus:bg-hijau focus:text-white
                                       active:bg-hijau active:text-white
                                       transition-all duration-200">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </nav>

                {{-- Contact Us button — langsung setelah nav, tanpa gap besar --}}
                <a href="{{ route('contact') }}"
                    class="hidden xl:inline-flex ml-6
                           px-8 py-2 text-sm rounded-[2px]
                           border-2 border-hijau text-hijau
                           hover:bg-hijau hover:text-white
                           focus:bg-hijau focus:text-white
                           active:bg-hijau active:text-white
                           transition-all duration-200 whitespace-nowrap shrink-0">
                    Contact Us
                </a>

                {{-- Hamburger — hanya di bawah xl --}}
                <button id="hamburger" name="hamburger" type="button"
                    class="xl:hidden relative w-8 h-8 ml-2 flex items-center justify-center cursor-pointer
                           text-gray-700 hover:text-hijau transition-colors duration-200">

                    {{-- Icon: Menu (hamburger) --}}
                    <span id="icon-menu"
                        class="absolute inset-0 flex items-center justify-center
                               transition-all duration-150 ease-out opacity-100 scale-100 rotate-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                        </svg>
                    </span>

                    {{-- Icon: Close (X) --}}
                    <span id="icon-close"
                        class="absolute inset-0 flex items-center justify-center
                               transition-all duration-150 ease-out opacity-0 scale-75 rotate-90">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                            </path>
                        </svg>
                    </span>

                </button>

            </div>

        </div>
    </div>
</header>
