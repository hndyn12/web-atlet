@props(['achievements' => \App\Models\Achievement::all()])
<!-- Prestasi Atlet -->
<section id="contact" class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">PRESTASI</h2>
            <div class="w-20 h-1 bg-red-400 mx-auto"></div>
        </div>

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
                                    @php
                                        $medal = strtolower($achievement->medal);
                                        $medalImage = '';
                                        $medalAlt = '';
                                        if ($medal === 'emas') {
                                            $medalImage = '/image/gold.png';
                                            $medalAlt = 'Medali Emas';
                                        } elseif ($medal === 'perak') {
                                            $medalImage = '/image/silver.png';
                                            $medalAlt = 'Medali Perak';
                                        } elseif ($medal === 'perunggu') {
                                            $medalImage = '/image/bronze.png';
                                            $medalAlt = 'Medali Perunggu';
                                        } else {
                                            $medalImage = '/image/medal-default.png';
                                            $medalAlt = 'Medali';
                                        }
                                    @endphp
                                    <div
                                        class="flex items-center justify-center w-24 h-24 rounded-full bg-red-100 text-red-600">
                                        <img src="{{ $medalImage }}" alt="{{ $medalAlt }}"
                                            class="w-20 h-20 object-contain">
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-medium text-gray-900">{{ $achievement->name }}</h3>
                                            <h3 class="mt-1 text-sm text-gray-500">
                                                {{ $achievement->atlet->name ?? '-' }} -
                                                {{ $achievement->sport->name ?? '-' }}
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="mt-3 text-sm text-gray-500 flex items-center space-x-2">
                                        <span>{{ $achievement->year }}</span>
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 ml-2">{{ $achievement->level }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            {{ $slot }}
        </div>
</section>
