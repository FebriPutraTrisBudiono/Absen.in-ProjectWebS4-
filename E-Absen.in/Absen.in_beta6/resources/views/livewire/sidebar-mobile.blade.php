<div x-data="{ isActive: true, open: true}">
  <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
  <x-jet-nav-link href="{{ route('dashboardku') }}" :active="request()->routeIs('dashboardku')" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
    <span aria-hidden="true">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
    </span>
    <span class="ml-2 text-sm"> {{ __('Dashboard') }} </span>
  </x-jet-nav-link>
</div>

@if (auth()->user()->hak_akses == "Admin")
<!-- Components links -->
<div x-data="{ isActive: false, open: false }">
  <!-- active classes 'bg-primary-100 dark:bg-primary' -->
  <x-jet-nav-link href="{{ route('jabatan') }}" :active="request()->routeIs('jabatan')" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
    <span aria-hidden="true">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
      </svg>
    </span>
    <span class="ml-2 text-sm"> {{ __('Jabatan') }} </span>
  </x-jet-nav-link>
</div>
@endif

@if (auth()->user()->hak_akses == "Admin")
<!-- Pages links -->
<div x-data="{ isActive: false, open: false }">
  <!-- active classes 'bg-primary-100 dark:bg-primary' -->
  <x-jet-nav-link href="{{ route('member') }}" :active="request()->routeIs('member')" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
    <span aria-hidden="true">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
      </svg>
    </span>
    <span class="ml-2 text-sm"> {{ __('Anggota') }} </span>
  </x-jet-nav-link>
</div>
@endif

@if (auth()->user()->hak_akses == "Karyawan")
<!-- Pages links -->
<div x-data="{ isActive: false, open: false }">
  <!-- active classes 'bg-primary-100 dark:bg-primary' -->
  <x-jet-nav-link href="{{ route('memberskaryawan') }}" :active="request()->routeIs('memberskaryawan')" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
    <span aria-hidden="true">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
      </svg>
    </span>
    <span class="ml-2 text-sm"> {{ __('Anggota') }} </span>
  </x-jet-nav-link>
</div>
@endif

<!-- Authentication links -->
<div x-data="{ isActive: false, open: false}">
  <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
  <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
    <span aria-hidden="true">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </span>
    <span class="ml-2 text-sm"> Absensi </span>
    <span aria-hidden="true" class="ml-auto">
      <!-- active class 'rotate-180' -->
      <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </span>
  </a>
  <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
    <a href="{{ route('absen') }}" role="menuitem" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
      Absen
    </a>
    <a href="{{ route('absenku') }}" role="menuitem" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
      Absenku
    </a>
    @if (auth()->user()->hak_akses == "Admin")
    <a href="{{ route('rekapabsenanggota') }}" role="menuitem" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
      Rekap Absen Anggota
    </a>
    @endif
    @if (auth()->user()->hak_akses == "Admin")
    <a href="{{ route('jamkerja') }}" role="menuitem" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
      Jam Kerja
    </a>
    @endif
  </div>
</div>

<!-- Layouts links -->
<!-- <div x-data="{ isActive: false, open: false}">
  <x-jet-nav-link href="{{ route('pengaturanlainnya') }}" :active="request()->routeIs('pengaturanlainnya')" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
    <span aria-hidden="true">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
      </svg>
    </span>
    <span class="ml-2 text-sm"> Pengaturan Lainnya </span>
  </x-jet-nav-link>
</div> -->