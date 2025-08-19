@props(['sports' => \App\Models\Sport::all()])
<section id="contact" class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">CABANG OLAHRAGA</h2>
            <div class="w-20 h-1 bg-red-400 mx-auto"></div>
        </div>
        <div id="cabang-olahraga" class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="max-w-2xl text-xl text-gray-500 mx-auto">
                        Berbagai cabang olahraga yang diikuti oleh atlet-atlet Kabupaten Blitar
                    </p>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4 lg:mt-12">
                    @foreach ($sports as $sport)
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group cursor-pointer flex flex-col">

                            <!-- Isi card -->
                            <div class="p-6 flex flex-col flex-grow text-center">
                                <div
                                    class="sport-icon mx-auto bg-red-100 text-red-600 group-hover:bg-red-600 group-hover:text-white transition-all duration-300 rounded-full p-2 w-10 h-10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.75 4.75C5.75 4.06 6.31 3.5 7 3.5h10c.69 0 1.25.56 1.25 1.25v16.5l-6.25-3.75-6.25 3.75V4.75z" />
                                    </svg>
                                </div>

                                <!-- Nama & Deskripsi -->
                                <div class="flex-grow flex flex-col items-center">
                                    <h3
                                        class="mt-4 text-lg font-medium text-gray-900 group-hover:text-red-600 transition-all duration-300">
                                        {{ $sport->name }}
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-400 text-center">
                                        {{ $sport->description }}
                                    </p>
                                </div>

                                <!-- Jumlah Atlet (selalu di bawah) -->
                                <div class="mt-4">
                                    <span
                                        class="text-gray-500 group-hover:text-red-500 transition-all duration-300 text-center block">
                                        {{ $sport->atlets()->count() }} Atlet
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $slot }}
        </div>
</section>
