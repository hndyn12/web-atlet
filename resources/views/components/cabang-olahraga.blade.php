@props(['sports' => \App\Models\Sport::all()])
<!-- Cabang Olahraga -->
<div id="cabang-olahraga" class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="max-w-2xl text-xl text-gray-500 mx-auto">Berbagai cabang olahraga yang diikuti oleh
                atlet-atlet Kabupaten Blitar</p>
        </div>

        <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4 lg:mt-12">
            @foreach ($sports as $sport)
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group cursor-pointer">
                    <div class="p-6 text-center">
                        <div
                            class="sport-icon mx-auto bg-red-100 text-red-600 group-hover:bg-red-600 group-hover:text-white transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                            </svg>
                        </div>
                        <h3
                            class="mt-4 text-lg font-medium text-gray-900 group-hover:text-red-600 transition-all duration-300">
                            {{ $sport->name }}</h3>
                        <p class=" mt-1 text-sm text-gray-400">{{ $sport->description }}</p>
                        <p class="mt-2 text-gray-500 group-hover:text-red-500 transition-all duration-300">
                            {{ $sport->atlets()->count() }} Atlet
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $slot }}
</div>
