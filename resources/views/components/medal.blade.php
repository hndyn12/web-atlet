@php
    use App\Models\Achievement;

    $emas = Achievement::where('medal', 'emas')->count();
    $perak = Achievement::where('medal', 'perak')->count();
    $perunggu = Achievement::where('medal', 'perunggu')->count();
@endphp

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">JUMLAH MEDALI</h2>
            <div class="w-20 h-1 bg-red-400 mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">
            <a href="{{ route('medals.show', 'emas') }}"
                class="flex flex-col items-center bg-yellow-50 rounded-2xl shadow-lg p-10 hover:shadow-2xl transition cursor-pointer">
                <img src="/image/gold.png" alt="Medali Emas" class="w-32 h-32 mb-6">
                <div class="text-5xl font-extrabold text-yellow-500 mb-4">{{ $emas }}</div>
                <div class="text-2xl font-semibold text-gray-700">Medali Emas</div>
            </a>

            <a href="{{ route('medals.show', 'perak') }}"
                class="flex flex-col items-center bg-gray-100 rounded-2xl shadow-lg p-10 hover:shadow-2xl transition cursor-pointer">
                <img src="/image/silver.png" alt="Medali Perak" class="w-32 h-32 mb-6">
                <div class="text-5xl font-extrabold text-gray-400 mb-4">{{ $perak }}</div>
                <div class="text-2xl font-semibold text-gray-700">Medali Perak</div>
            </a>

            <a href="{{ route('medals.show', 'perunggu') }}"
                class="flex flex-col items-center bg-orange-50 rounded-2xl shadow-lg p-10 hover:shadow-2xl transition cursor-pointer">
                <img src="/image/bronze.png" alt="Medali Perunggu" class="w-32 h-32 mb-6">
                <div class="text-5xl font-extrabold text-orange-500 mb-4">{{ $perunggu }}</div>
                <div class="text-2xl font-semibold text-gray-700">Medali Perunggu</div>
            </a>
        </div>
    </div>
</section>
