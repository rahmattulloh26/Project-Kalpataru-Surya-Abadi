{{--
    resources/views/pages/contact.blade.php
    Halaman Kontak — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')


<x-slot:title> {{ $titlePage }} </x-slot:title>

@section('content')
    {{-- TODO: Isi konten halaman Kontak di sini --}}
    <section class="pt-16 pb-16 md:pt-20 lg:pt-24 px-6 md:px-10 xl:px-20 bg-white">
        {{-- Heading About US --}}
        <div class="about-us pt-5 font-bold">
            <h1 class=" font-bold leading-tight">
                <span class="text-grey text-3xl md:text-4xl lg:text-5xl"> CONTACT US </span>
                <br>
                <span class="text-hijau text-3xl md:text-4xl lg:text-5xl">PT KALPATARU SURYA ABADI </span>
            </h1>
        </div>
        {{-- Line  --}}
        <div class="w-1/2 md:w-1/4 h-1 mt-5 bg-green-500 "></div>
        </div>
        {{-- End Heading  --}}

        <br>
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-start ">
            <div class="bg-white shadow-xl border border-gray-100 rounded-2xl p-6 md:p-8 lg:p-10">
                <form action="#" method="POST">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-3 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-sm/6 font-light text-gray-900">First name</label>
                            <div class="mt-1">
                                <input id="first-name" type="text" name="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 " />
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm/6 font-light text-gray-900">Last name</label>
                            <div class="mt-1">
                                <input id="last-name" type="text" name="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300  0 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="subject" class="block text-sm/6 font-light text-gray-900">Subject</label>
                            <div class="mt-1">
                                <input id="subject" type="text" name="subject"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300  focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm/6 font-light text-gray-900">Email</label>
                            <div class="mt-1">
                                <input id="email" type="email" name="email" autocomplete="email"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300  focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number" class="block text-sm/6 font-light text-gray-900">Phone
                                number</label>
                            <div class="mt-1">
                                <div
                                    class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                                    <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                                        <select id="country" name="country" autocomplete="country" aria-label="Country"
                                            class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pr-7 pl-3.5 text-base text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option>US</option>
                                            <option>CA</option>
                                            <option>EU</option>
                                        </select>
                                        <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                            class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                                            <path
                                                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input id="phone-number" type="text" name="phone-number"
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 focus:outline-none sm:text-sm/6" />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm/6 font-light text-gray-900">Message</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
                            </div>
                        </div>
                        <div class="flex gap-x-4 sm:col-span-2">
                            <div class="flex h-6 items-center">
                                <div
                                    class="group relative inline-flex w-8 shrink-0 rounded-full bg-gray-200 p-px inset-ring inset-ring-gray-900/5 outline-offset-2 outline-indigo-600 transition-colors duration-200 ease-in-out has-checked:bg-indigo-600 has-focus-visible:outline-2">
                                    <span
                                        class="size-4 rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out group-has-checked:translate-x-3.5"></span>
                                    <input id="agree-to-policies" type="checkbox" name="agree-to-policies"
                                        aria-label="Agree to policies"
                                        class="absolute inset-0 size-full appearance-none focus:outline-hidden" />
                                </div>
                            </div>
                            <label for="agree-to-policies" class="text-sm/6 text-gray-600">
                                By selecting this, you agree to our
                                <a href="#" class="font-semibold whitespace-nowrap text-indigo-600">privacy
                                    policy</a>.
                            </label>
                        </div>
                    </div>

                    <div class="mt-10">
                        <button type="submit"
                            class="block  bg-oren px-3.5 py-2.5 md:px-10 text-center text-sm font-light text-white shadow-xs hover:bg-oren focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send
                            Message</button>
                    </div>
                </form>
            </div>


            <div class="flex flex-col justify-center ">
                <h1 class=" text-oren font-bold text-3xl md:text-4xl lg:text-5xl  leading-snug">
                    GET IN TOUCH
                    <br>
                    <span class="text-hijau">WERE HERE TO HELP YOU</span>
                </h1>
                <p class=" text-gray-600 text-sm md:text-lg leading-relaxed max-w-xl">We are ready to provide reliable
                    solutions, professional support, and
                    trusted services for your business needs.</p>
                <div class="w-1/2 h-1 mt-5 bg-green-500 "></div>

                {{-- For Detail Contact , Address and telphone --}}
                <div class="mt-10 space-y-6">
                    <div class="flex items-start gap-4 p-5 transition">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900">Office Address</h3>
                            <p class="text-gray-600 mt-1">
                                Vila Taman Teratai Blok E13 No. 19 RT.04/12, Kel. Bugel, Kec. Karawaci, Tangerang 15113
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 transition">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900">Email Address</h3>
                            <p class="text-gray-600 mt-1">
                                kalpataru.con@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 transition">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-green-600">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900">Telepon</h3>
                            <p class="text-gray-600 mt-1">
                                021-59584899
                            </p>
                        </div>
                    </div>


    </section>
    {{-- Untuk Section CTA  --}}
    <x-feature.cta></x-feature.cta>
@endsection
