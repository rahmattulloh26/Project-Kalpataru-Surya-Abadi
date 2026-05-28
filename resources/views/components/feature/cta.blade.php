 {{-- Section CTA — Ready to Start Your Project? --}}
 <section class="relative w-full overflow-hidden mt-8">

     <img src="{{ asset('src/img/bg-image.png') }}" alt="Ready to Start Your Project"
         class="absolute inset-0 w-full h-full object-cover object-center">

     <div class="absolute inset-0 bg-black/40"></div>

     <div
         class="relative z-10 flex items-center justify-center text-center
                    py-14 sm:py-18 md:py-22 lg:py-35
                    px-5 sm:px-8 md:px-12 lg:px-16">
         <div class="w-full max-w-xs sm:max-w-md md:max-w-2xl lg:max-w-4xl">

             <h2
                 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl
                           font-bold text-oren uppercase leading-tight tracking-widest mb-3 md:mb-5">
                 Ready To Start Your Project?
             </h2>

             <p
                 class="text-xs sm:text-sm md:text-base
                          text-white leading-relaxed mb-6 md:mb-8 tracking-widest">
                 We Are Ready To Assist You With Professional Environmental Consulting,
                 Engineering, And Licensing Services From Planning To Project Completion.
             </p>

             <a href="{{ route('contact') }}"
                 class="inline-flex items-center justify-center
                           px-6 sm:px-8 md:px-10 lg:px-12
                           py-2 sm:py-2.5 md:py-3
                           text-xs sm:text-sm font-semibold
                           border-2 border-hijau text-oren
                           hover:bg-hijau hover:text-white
                           focus:bg-hijau focus:text-white
                           active:bg-hijau active:text-white
                           transition-all duration-300">
                 Contact Us
             </a>

         </div>
     </div>

 </section>
