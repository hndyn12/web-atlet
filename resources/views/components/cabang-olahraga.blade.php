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
                        <a href="{{ route('atletsport.show', $sport->id) }}">
                            <div
                                class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group cursor-pointer flex flex-col">
                                <div class="p-6 flex flex-col flex-grow text-center">
                                    <div
                                        class="mx-auto bg-red-100 group-hover:bg-red-600 transition-all duration-300 rounded-lg p-4 w-24 h-24 flex items-center justify-center">
                                        <img src="{{ asset('storage/' . $sport->description) }}"
                                            alt="{{ $sport->name }}" class="w-20 h-20 object-contain rounded-lg"
                                            style="max-width:5rem;max-height:5rem;">
                                    </div>
                                    <div class="flex-grow flex flex-col items-center">
                                        <h3
                                            class="mt-4 text-lg font-medium text-gray-900 group-hover:text-red-600 transition-all duration-300">
                                            {{ $sport->name }}
                                        </h3>
                                    </div>
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
