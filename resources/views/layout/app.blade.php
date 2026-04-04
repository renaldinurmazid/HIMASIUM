<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMASIUM | @yield('title', 'Himpunan Mahasiswa Sistem Informasi')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center gap-3">
                        <img class="h-10 w-auto" src="{{ asset('assets/logo.svg') }}" alt="HIMASIUM Logo">
                        <span class="font-extrabold text-xl tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">HIMASIUM</span>
                    </a>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="/" class="text-slate-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Home</a>
                    <a href="/blog" class="text-slate-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Blog</a>
                    <a href="/product" class="text-slate-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Product</a>
                    <a href="/contact" class="text-slate-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    <a href="/contact" class="bg-blue-600 text-white hover:bg-blue-700 px-5 py-2.5 rounded-full text-sm font-semibold transition-all shadow-lg shadow-blue-500/20 active:scale-95">Join Us</a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <img class="h-10 w-auto" src="{{ asset('assets/logo.svg') }}" alt="HIMASIUM Logo">
                        <span class="font-extrabold text-2xl tracking-tight text-slate-900">HIMASIUM</span>
                    </div>
                    <p class="text-slate-500 max-w-sm leading-relaxed">
                        Himpunan Mahasiswa Sistem Informasi Universitas Mandiri. Wadah kreativitas, inovasi, dan pengembangan diri bagi mahasiswa SI.
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-6">Navigation</h3>
                    <ul class="space-y-4 text-slate-500 text-sm">
                        <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                        <li><a href="/blog" class="hover:text-blue-600 transition-colors">Blog</a></li>
                        <li><a href="/product" class="hover:text-blue-600 transition-colors">Product</a></li>
                        <li><a href="/contact" class="hover:text-blue-600 transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-6">Connect</h3>
                    <ul class="space-y-4 text-slate-500 text-sm">
                        <li><a href="#" class="hover:text-blue-600 transition-colors">Instagram</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition-colors">LinkedIn</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition-colors">YouTube</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition-colors">Email Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-100 pt-8 text-center">
                <p class="text-slate-400 text-sm font-medium">
                    &copy; {{ date('Y') }} HIMASIUM Universitas Mandiri.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>