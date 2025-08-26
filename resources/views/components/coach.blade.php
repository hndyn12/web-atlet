@props(['coachs' => \App\Models\Coach::all() ?? collect([])])
<!-- Daftar Atlet -->
<section id="atlet" class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">DAFTAR PELATIH</h2>
            <div class="w-20 h-1 bg-red-400 mx-auto"></div>
        </div>
        <div id="daftar-atlet" class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="max-w-2xl text-xl text-gray-500 mx-auto">Pelatih atlet terbaik Kabupaten Blitar</p>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($coachs as $coach)
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                            <div class="p-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-gray-600">{{ $coach->sport->name ?? '-' }}</p>
                                        <h3 class="text-xl font-bold text-gray-900">{{ $coach->name }}</h3>
                                        <p class="text-l font-bold text-gray-700">Lisensi : {{ $coach->lisensi }}</p>
                                    </div>
                                    @if ($coach->sertifikat)
                                        <div class="mt-4">
                                            <h4 class="text-sm font-medium text-gray-900">Sertifikat:</h4>
                                            @php
                                                $ext = pathinfo($coach->sertifikat, PATHINFO_EXTENSION);
                                                $isImage = in_array(strtolower($ext), [
                                                    'jpg',
                                                    'jpeg',
                                                    'png',
                                                    'gif',
                                                    'webp',
                                                ]);
                                            @endphp
                                            @if ($isImage)
                                                <a href="{{ $coach->sertifikat }}" target="_blank">
                                                    <img src="{{ $coach->sertifikat }}"
                                                        alt="Sertifikat {{ $coach->name }}"
                                                        class="w-32 h-auto mt-2 rounded shadow">
                                                </a>
                                            @else
                                                <a href="{{ $coach->sertifikat }}" target="_blank"
                                                    class="text-blue-600 underline mt-2 inline-block">
                                                    Lihat Sertifikat
                                                </a>
                                            @endif
                                        </div>
                                    @else
                                        <div class="mt-4 text-sm text-gray-500">Belum ada sertifikat yang diunggah.
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $slot }}
        </div>
</section>
