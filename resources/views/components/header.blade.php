<header class="w-full fixed top-0 z-50 font-inter font-bold bg-white">
    <div class="w-full px-6 md:px-10 xl:px-16 py-2 xl:py-0">
        <div class="flex items-center justify-between gap-8">

            {{-- ══ KIRI: Logo ══ --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                <img src="{{ asset('src/img/logo-ksa.png') }}" alt="Kalpataru Surya Abadi"
                    class="w-14 md:w-16 lg:w-20 object-contain">
                <div class="flex flex-col leading-none gap-0.5">
                    <span
                        class="text-[11px] md:text-xs lg:text-sm text-hijau font-bold uppercase whitespace-nowrap tracking-wide">
                        PT Kalpataru Surya Abadi
                    </span>
                    <span class="text-[8px] md:text-[9px] lg:text-[10px] text-gray-500 font-normal whitespace-nowrap">
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
                                class="block py-3 px-5 xl:py-8 text-sm hover:text-hijau transition-colors">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about-us') }}"
                                class="block py-3 px-5 xl:py-8 text-sm hover:text-hijau transition-colors">
                                About Us
                            </a>
                        </li>

                        {{-- Dropdown Service --}}
                        <li class="relative xl:flex items-center">
                            <a href="{{ route('service') }}" id="produk-dropdown-btn"
                                class="flex items-center gap-1 py-3 px-5 xl:py-8 text-sm hover:text-hijau transition-colors cursor-pointer">
                                Service
                                <svg class="w-3.5 h-3.5 transition-transform duration-200 shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <div id="produk-dropdown-menu"
                                class="hidden xl:absolute left-0 xl:top-full
                                       w-full xl:w-48 bg-white xl:rounded-lg
                                       xl:border xl:border-gray-100 shadow-sm xl:py-2 z-50">
                                <a href="#"
                                    class="block px-5 xl:px-4 py-2.5 text-sm font-normal text-gray-600 hover:bg-gray-50 hover:text-hijau transition-colors">Layanan
                                    1</a>
                                <a href="#"
                                    class="block px-5 xl:px-4 py-2.5 text-sm font-normal text-gray-600 hover:bg-gray-50 hover:text-hijau transition-colors">Layanan
                                    2</a>
                                <a href="#"
                                    class="block px-5 xl:px-4 py-2.5 text-sm font-normal text-gray-600 hover:bg-gray-50 hover:text-hijau transition-colors">Layanan
                                    3</a>
                                <a href="#"
                                    class="block px-5 xl:px-4 py-2.5 text-sm font-normal text-gray-600 hover:bg-gray-50 hover:text-hijau transition-colors">Layanan
                                    4</a>
                            </div>
                        </li>

                        <li>
                            <a href="{{ route('portfolio') }}"
                                class="block py-3 px-5 xl:py-8 text-sm hover:text-hijau transition-colors">
                                Portofolio
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
                           transition-all duration-200 whitespace-nowrap shrink-0">
                    Contact Us
                </a>

                {{-- Hamburger — hanya di bawah xl --}}
                <button id="hamburger" name="hamburger" type="button" class="xl:hidden p-2 ml-2 cursor-pointer">
                    <span
                        class="hamburger-line block w-6 h-0.5 my-1.5 bg-gray-700 transition duration-300 ease-in-out origin-bottom-left"></span>
                    <span
                        class="hamburger-line block w-6 h-0.5 my-1.5 bg-gray-700 transition duration-300 ease-in-out"></span>
                    <span
                        class="hamburger-line block w-6 h-0.5 my-1.5 bg-gray-700 transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

            </div>

        </div>
    </div>
</header>
