    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <img src="/image/logo.jpg" alt="Logo Atlet Indonesia" class="h-8 w-8">
                        <span class="ml-2 text-xl font-bold text-red-600">Atlet<span
                                class="text-gray-800">Blitar</span></span>
                    </div>
                    @php
                        $navItems = [
                            ['label' => 'Beranda', 'href' => '/', 'match' => request()->is('/')],
                            [
                                'label' => 'Cabang Olahraga',
                                'href' => '/cabang-olahraga',
                                'match' => request()->is('cabang-olahraga'),
                            ],
                            [
                                'label' => 'Daftar Pelatih',
                                'href' => '/coach',
                                'match' => request()->is('coach'),
                            ],
                            [
                                'label' => 'Daftar Atlet',
                                'href' => '/daftar-atlet',
                                'match' => request()->is('daftar-atlet'),
                            ],
                            ['label' => 'Prestasi', 'href' => '/prestasi', 'match' => request()->is('prestasi')],
                        ];
                    @endphp
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        @foreach ($navItems as $item)
                            <a href="{{ $item['href'] }}"
                                class="{{ $item['match'] ? 'border-red-500 text-gray-900 inline-flex' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex' }} items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="/admin"
                        class="ml-3 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all text-center">Masuk</a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500"
                        aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                @foreach ($navItems as $item)
                    <a href="{{ $item['href'] }}"
                        class="{{ $item['match'] ? 'bg-red-50 border-red-500 text-red-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} block px-3 py-2 rounded-md text-base font-medium">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="mt-3 space-y-1 px-2">
                        <a href="/admin"
                            class="w-full block px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 text-center">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Smooth scrolling untuk anchor link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                // Cek apakah href ada id yang valid di halaman
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Toggle mobile menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
            mobileMenu.classList.toggle('hidden');
        });

        // Tutup menu mobile saat klik link navigasi
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', false);
            });
        });
    </script>
