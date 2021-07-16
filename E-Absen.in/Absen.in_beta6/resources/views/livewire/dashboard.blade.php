<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
    <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
        <div>
            <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                Jabatan
            </h6>
            <span class="text-xl font-semibold">{{$jabatan}}</span>
        </div>
        <div>
            <span>
                <svg class="w-12 h-12 text-gray-300 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
            </span>
        </div>
    </div>

    <!-- Users card -->
    <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
        <div>
            <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                Users
            </h6>
            <span class="text-xl font-semibold">{{$members}}</span>
        </div>
        <div>
            <span>
                <svg class="w-12 h-12 text-gray-300 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </span>
        </div>
    </div>

    <!-- Jadwal card -->
    <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
        <div>
            <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                Jadwal Absen
            </h6>
            <span class="text-xl font-semibold">
                @forelse($jamkerjas as $nomer => $row)
                {{ $row->start }} -
                {{ $row->finish }}

                @empty
                <tr>
                    <td class="border px-4 py-2 text-center" colspan="6">Tidak ada data</td>
                </tr>
                @endforelse
            </span>
        </div>
        <div>
            <span>
                <svg class="w-12 h-12 text-gray-300 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                </svg>
            </span>
        </div>
    </div>
</div>