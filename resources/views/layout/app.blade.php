<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | HIMASIUM</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .mobile-menu-active { transform: translateY(0); opacity: 1; pointer-events: auto; }
        .mobile-menu-inactive { transform: translateY(-10px); opacity: 0; pointer-events: none; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased overflow-x-hidden">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center gap-3">
                        <img class="h-9 w-auto" src="{{ asset('assets/logo.svg') }}" alt="HIMASIUM Logo">
                        <span class="font-extrabold text-xl tracking-tight text-blue-800">HIMASIUM</span>
                    </a>
                </div>
                
                {{-- Desktop Menu --}}
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="/" class="{{ request()->is('/') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 px-3 py-2 text-sm font-semibold transition-colors">Home</a>
                    <a href="/blog" class="{{ request()->is('blog*') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 px-3 py-2 text-sm font-semibold transition-colors">Blog</a>
                    <a href="/product" class="{{ request()->is('product*') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 px-3 py-2 text-sm font-semibold transition-colors">Product</a>
                    <a href="/contact" class="{{ request()->is('contact*') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 px-3 py-2 text-sm font-semibold transition-colors">Contact</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-lg text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-all border border-transparent hover:border-blue-100">
                        <svg id="menu-icon" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu Container --}}
        <div id="mobile-menu" class="md:hidden mobile-menu-inactive absolute top-20 left-0 right-0 bg-white border-b border-slate-200 shadow-xl transition-all duration-300 z-40">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="/" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->is('/') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }} transition-colors">Home</a>
                <a href="/blog" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->is('blog*') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }} transition-colors">Blog</a>
                <a href="/product" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->is('product*') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }} transition-colors">Product</a>
                <a href="/contact" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->is('contact*') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }} transition-colors">Contact</a>
                <div class="pt-4 mt-4 border-t border-slate-100 px-4">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Connect with us</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-400 hover:text-blue-600 transition-colors">Instagram</a>
                        <a href="#" class="text-slate-400 hover:text-blue-600 transition-colors">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 pt-16 pb-8 mt-12 md:mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
                <div class="md:col-span-6 flex flex-col items-center md:items-start text-center md:text-left">
                    <div class="flex items-center gap-3 mb-6">
                        <img class="h-10 w-auto" src="{{ asset('assets/logo.svg') }}" alt="HIMASIUM Logo">
                        <span class="font-extrabold text-2xl tracking-tight text-slate-900 uppercase">HIMASIUM</span>
                    </div>
                    <p class="text-slate-500 max-w-sm leading-relaxed mb-8">
                        Himpunan Mahasiswa Sistem Informasi Universitas Mandiri. Wadah kreativitas, inovasi, dan pengembangan diri bagi mahasiswa Sistem Informasi.
                    </p>
                </div>
                
                <div class="md:col-span-3 text-center md:text-left">
                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-[0.2em] mb-6">Navigasi</h3>
                    <ul class="space-y-4 text-slate-500 text-sm font-medium">
                        <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                        <li><a href="/blog" class="hover:text-blue-600 transition-colors">Blog</a></li>
                        <li><a href="/product" class="hover:text-blue-600 transition-colors">Product</a></li>
                        <li><a href="/contact" class="hover:text-blue-600 transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div class="md:col-span-3 text-center md:text-left">
                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-[0.2em] mb-6">Sosial Media</h3>
                    <ul class="space-y-4 text-slate-500 text-sm font-medium">
                        <li><a href="#" class="hover:text-blue-600 transition-colors inline-flex items-center gap-2">Instagram</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition-colors inline-flex items-center gap-2">LinkedIn</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition-colors inline-flex items-center gap-2">YouTube</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition-colors inline-flex items-center gap-2">Email</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-100 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-400 text-xs font-semibold">
                    &copy; {{ date('Y') }} HIMASIUM Universitas Mandiri. Seluruh Hak Cipta Dilindungi.
                </p>
                <div class="flex gap-6 text-xs font-semibold text-slate-400">
                    <a href="#" class="hover:text-slate-600">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-600">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        menuBtn.addEventListener('click', () => {
            const isActive = mobileMenu.classList.contains('mobile-menu-active');
            
            if (isActive) {
                mobileMenu.classList.remove('mobile-menu-active');
                mobileMenu.classList.add('mobile-menu-inactive');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                mobileMenu.classList.add('mobile-menu-active');
                mobileMenu.classList.remove('mobile-menu-inactive');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>