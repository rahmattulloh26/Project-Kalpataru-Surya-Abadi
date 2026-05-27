<header class="w-full fixed top-0 z-50 font-inter font-bold bg-white transition-shadow duration-300">
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

                {{-- Nav — desktop --}}
                <nav id="nav-menu"
                    class="hidden absolute bg-white text-hijau whitespace-nowrap w-[220px]
                           right-0 top-full rounded-bl-2xl
                           xl:flex xl:static xl:bg-transparent xl:shadow-none xl:w-auto
                           py-3 xl:py-0 z-40">
                    <ul class="flex flex-col xl:flex-row xl:items-center">

                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-3 px-5 xl:py-8 text-sm transition-colors
                                       {{ request()->routeIs('home') ? 'text-hijau' : 'hover:text-hijau' }}">
                                <span class="{{ request()->routeIs('home') ? 'border-b-2 border-hijau pb-0.5' : '' }}">
                                    Home
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about-us') }}"
                                class="block py-3 px-5 xl:py-8 text-sm transition-colors
                                       {{ request()->routeIs('about-us') ? 'text-hijau' : 'hover:text-hijau' }}">
                                <span
                                    class="{{ request()->routeIs('about-us') ? 'border-b-2 border-hijau pb-0.5' : '' }}">
                                    About Us
                                </span>
                            </a>
                        </li>

                        {{-- Dropdown Service --}}
                        <li class="relative xl:flex items-center">
                            <a href="{{ route('service') }}" id="produk-dropdown-btn"
                                class="flex items-center gap-1 py-3 px-5 xl:py-8 text-sm transition-colors cursor-pointer
                                       {{ request()->routeIs('service*') ? 'text-hijau' : 'hover:text-hijau' }}">
                                <span
                                    class="{{ request()->routeIs('service*') ? 'border-b-2 border-hijau pb-0.5' : '' }}">
                                    Service
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('portofolio') }}"
                                class="block py-3 px-5 xl:py-8 text-sm transition-colors
                                       {{ request()->routeIs('portofolio') ? 'text-hijau' : 'hover:text-hijau' }}">
                                <span
                                    class="{{ request()->routeIs('portofolio') ? 'border-b-2 border-hijau pb-0.5' : '' }}">
                                    Portofolio
                                </span>
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
                               transition-all duration-300 ease-in-out opacity-100 scale-100 rotate-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                        </svg>
                    </span>

                    {{-- Icon: Close (X) --}}
                    <span id="icon-close"
                        class="absolute inset-0 flex items-center justify-center
                               transition-all duration-300 ease-in-out opacity-0 scale-75 rotate-90">
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
