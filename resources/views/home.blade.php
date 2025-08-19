<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Hero Section -->
    <div class="text-white" style="background: linear-gradient(135deg, #dd1515 0%, #d4a0a0 100%);">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">Atlet Berprestasi
                    Kabupaten Blitar
                </h1>
                <p class="mt-6 text-xl max-w-3xl mx-auto">Temukan profil lengkap atlet-atlet terbaik Indonesia dari
                    berbagai cabang olahraga dan prestasi mereka</p>
            </div>
        </div>
    </div>
    <x-cabang-olahraga :sports="$sports">
        <x-button-link href="/cabang-olahraga">Lihat Semua Cabang Olahraga</x-button-link>
    </x-cabang-olahraga>

    <x-daftar-atlet :atlets="$atlets">
        <x-button-link href="/daftar-atlet">Lihat Semua Daftar Atlet</x-button-link>
    </x-daftar-atlet>

    <x-prestasi :achievements="$achievements">
        <x-button-link href="/prestasi">Lihat Semua Prestasi</x-button-link>
    </x-prestasi>

    <x-footer></x-footer>

</x-layout>
