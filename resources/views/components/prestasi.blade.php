@props(['achievements' => \App\Models\Achievement::all()])
<!-- Prestasi Atlet -->
<div id="prestasi" class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="mb-10 max-w-2xl text-xl text-gray-500 mx-auto">Penghargaan dan pencapaian yang diraih oleh
                atlet-atlet Kabupaten Blitar</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($achievements as $achievement)
                <div class="bg-gray-50 rounded-xl p-6 md:p-8">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-100 text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">{{ $achievement->name }}</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        {{ $achievement->atlet->name ?? '-' }} - {{ $achievement->sport->name ?? '-' }}
                                    </p>
                                </div>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">{{ $achievement->level }}</span>
                            </div>
                            <div class="mt-3 text-sm text-gray-500">
                                <span>{{ $achievement->year }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    {{ $slot }}
</div>
