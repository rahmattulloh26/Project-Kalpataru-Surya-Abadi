{{--
    resources/views/components/filter-tabs.blade.php
    Komponen Filter Tab — dipakai di Portofolio, Service, dll.

    Props:
      - $filters : array associative [ 'key' => 'Label' ]

    Cara pakai:
      @php
          $filters = ['semua' => 'Semua', 'dokumen-lingkungan' => 'Dokumen Lingkungan', ...];
      @endphp
      <x-filter-tabs :filters="$filters" />
--}}

@props(['filters' => []])

<div class="bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-10 xl:px-16">

        {{-- Mobile: scroll horizontal 1 baris | Desktop: spread rata --}}
        <div class="overflow-x-auto scrollbar-hide -mx-1">
            <div class="flex min-w-max lg:min-w-0 lg:w-full">

                @foreach ($filters as $key => $label)
                    <button data-filter="{{ $key }}"
                        class="filter-btn shrink-0 lg:flex-1
                               py-3 px-4 lg:px-2 pb-2.5
                               text-[11px] sm:text-xs font-bold uppercase tracking-widest
                               whitespace-nowrap text-center
                               border-b-2 transition-colors duration-200
                               {{ $loop->first ? 'text-hijau border-hijau' : 'text-gray-800 border-transparent hover:text-hijau' }}">
                        {{ $label }}
                    </button>
                @endforeach

            </div>
        </div>

        {{-- Garis pemisah oren full-width --}}
        <div class="h-px bg-oren w-full -mt-px"></div>

    </div>
</div>
