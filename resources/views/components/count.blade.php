@php
    use App\Models\Atlet;
    use App\Models\Coach;

    $jumlahAtlet = Atlet::count();
    $jumlahPelatih = Coach::count();
@endphp

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">JUMLAH TIM</h2>
            <div class="w-20 h-1 bg-red-400 mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
            <a href="{{ url('/daftar-atlet') }}"
                class="flex flex-col items-center bg-blue-50 shadow-lg p-10 hover:shadow-2xl transition hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <img src="/image/atlet.png" alt="Atlet" class="w-32 h-32 mb-6 object-contain">
                <div class="text-5xl font-extrabold text-blue-500 mb-4">{{ $jumlahAtlet }}</div>
                <div class="text-2xl font-semibold text-gray-700">Atlet</div>
            </a>
            <a href="{{ url('/coach') }}"
                class="flex flex-col items-center bg-green-50 shadow-lg p-10 hover:shadow-2xl transition hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-400">
                <img src="/image/coach.png" alt="Pelatih" class="w-32 h-32 mb-6 object-contain">
                <div class="text-5xl font-extrabold text-green-500 mb-4">{{ $jumlahPelatih }}</div>
                <div class="text-2xl font-semibold text-gray-700">Pelatih</div>
            </a>
        </div>
    </div>
</section>
