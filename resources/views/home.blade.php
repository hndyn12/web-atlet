<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Hero Section -->

    <div class="relative">
        <div class="relative text-white"
            style="
                background: url('https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/653e6dd1-4ac6-4564-b765-f26a85d3692c.png') center center/cover no-repeat;
            ">
            <div class="absolute inset-0 bg-gradient-to-br from-red-700/80 to-red-200/60  transition-all duration-500"
                style="z-index:1;"></div>
            <div class="relative max-w-7xl mx-auto py-32 px-6 sm:py-40 sm:px-6 lg:px-10" style="z-index:2;">
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">Atlet Berprestasi
                        Kabupaten Blitar
                    </h1>
                    <p class="mt-6 text-2xl max-w-3xl mx-auto">Temukan profil lengkap atlet-atlet terbaik Indonesia dari
                        berbagai cabang olahraga dan prestasi mereka</p>
                </div>
            </div>
        </div>
    </div>
    <x-medal></x-medal>
    <x-count></x-count>

    <x-cabang-olahraga :sports="$sports">
        <x-button-link href="/cabang-olahraga">Lihat Semua Cabang Olahraga</x-button-link>
    </x-cabang-olahraga>

    <x-coach :sports="$coachs">
        <x-button-link href="/coacha">Lihat Semua Daftar Pelatih</x-button-link>
    </x-coach>

    <x-daftar-atlet :atlets="$atlets">
        <x-button-link href="/daftar-atlet">Lihat Semua Daftar Atlet</x-button-link>
    </x-daftar-atlet>

    <x-prestasi :achievements="$achievements">
        <x-button-link href="/prestasi">Lihat Semua Prestasi</x-button-link>
    </x-prestasi>

    <x-footer></x-footer>

</x-layout>
