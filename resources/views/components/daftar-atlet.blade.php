@props(['atlets' => \App\Models\Atlet::all() ?? collect([])])
<!-- Daftar Atlet -->
<section id="atlet" class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">DAFTAR ATLET</h2>
            <div class="w-20 h-1 bg-red-400 mx-auto"></div>
        </div>
        <div id="daftar-atlet" class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="max-w-2xl text-xl text-gray-500 mx-auto">Profil singkat atlet-atlet terbaik
                        Kabupaten Blitar
                    </p>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach (is_iterable($atlets) ? $atlets : [] as $atlet)
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                            <div class="relative w-full h-64">
                                <img src="{{ asset('storage/' . $atlet->image) }}" alt=""
                                    class="w-full h-full object-cover object-center"
                                    style="width:100%;height:100%;max-height:16rem;">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900">{{ $atlet->name }}</h3>
                                        <p class="text-gray-600">{{ $atlet->sport->name }}</p>
                                    </div>
                                </div>

                                <div class="mt-4 flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $atlet->address }}
                                </div>

                                <div class="mt-3 flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $atlet->birth }}
                                </div>

                                <div class="mt-3 flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 100 8 4 4 0 000-8zm1 9h-2a5 5 0 00-5 5v1a1 1 0 001 1h10a1 1 0 001-1v-1a5 5 0 00-5-5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    @if ($atlet->gender == 'L')
                                        <span class="ml-1">Laki-laki</span>
                                    @elseif($atlet->gender == 'P')
                                        <span class="ml-1">Perempuan</span>
                                    @else
                                        <span class="ml-1">-</span>
                                    @endif
                                </div>

                                <div class="mt-3">
                                    <h4 class="text-sm font-medium text-gray-900">Prestasi:</h4>
                                    <ul class="mt-1 text-sm text-gray-500 space-y-1">
                                        @php
                                            // Ambil prestasi berdasarkan id atlet
                                            $prestasiAtlet = \App\Models\Achievement::where(
                                                'atlet_id',
                                                $atlet->id,
                                            )->get();
                                        @endphp
                                        @forelse ($prestasiAtlet as $achievement)
                                            <li>• {{ $achievement->name }}</li>
                                        @empty
                                            <li>Belum ada prestasi yang tercatat.</li>
                                        @endforelse
                                    </ul>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $slot }}
        </div>
</section>
