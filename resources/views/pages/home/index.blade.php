@extends('layout.app')

@section('title', 'Home - Himpunan Mahasiswa Sistem Informasi')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-24 lg:py-32 bg-white">
        <div class="absolute inset-0 bg-[radial-gradient(45%_45%_at_50%_50%,rgba(59,130,246,0.05)_0%,rgba(255,255,255,0)_100%)]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-bold bg-blue-50 text-blue-600 mb-8 tracking-wide uppercase">
                    Welcome to Official Website
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-8">
                    Elevating <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Informatics</span> <br class="hidden md:block"> to the Next Level
                </h1>
                <p class="max-w-2xl mx-auto text-lg md:text-xl text-slate-500 mb-12 leading-relaxed">
                    HIMASIUM adalah wadah bagi seluruh mahasiswa Sistem Informasi Universitas Mandiri untuk berinovasi, berkolaborasi, dan mempersiapkan diri menghadapi era digital.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="/contact" class="w-full sm:w-auto px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold text-lg shadow-xl shadow-blue-500/25 transition-all hover:-translate-y-1 active:scale-95">Pengurus 2026</a>
                    <a href="/blog" class="w-full sm:w-auto px-8 py-4 bg-white border-2 border-slate-100 hover:border-slate-200 text-slate-700 rounded-2xl font-bold text-lg transition-all hover:bg-slate-50">Baca Artikel</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats / Featured Icons -->
    <section class="py-12 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-extrabold text-slate-900 mb-2">500+</div>
                    <div class="text-sm font-medium text-slate-500 uppercase tracking-widest">Active Members</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-extrabold text-slate-900 mb-2">20+</div>
                    <div class="text-sm font-medium text-slate-500 uppercase tracking-widest">Ongoing Projects</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-extrabold text-slate-900 mb-2">15+</div>
                    <div class="text-sm font-medium text-slate-500 uppercase tracking-widest">Partners</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-extrabold text-slate-900 mb-2">50+</div>
                    <div class="text-sm font-medium text-slate-500 uppercase tracking-widest">Events / Year</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="w-16 h-1 bg-blue-600 mb-8"></div>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-8">Tentang <span class="text-blue-600">HIMASIUM</span></h2>
                    <div class="space-y-6 text-lg text-slate-500 leading-relaxed">
                        <p>
                            Himpunan Mahasiswa Sistem Informasi Universitas Mandiri (HIMASIUM) didirikan sebagai organisasi yang menjembatani aspirasi mahasiswa dengan institusi serta dunia industri.
                        </p>
                        <p>
                            Kami berfokus pada pengembangan kompetensi teknis (hard skills) dan karakter (soft skills) melalui berbagai program kerja unggulan seperti Seminar Teknologi, Workshop, hingga Inkubasi Produk Digital.
                        </p>
                    </div>
                    <div class="mt-12">
                        <a href="/contact" class="text-blue-600 font-bold flex items-center gap-2 group">
                            Pelajari Selengkapnya 
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square bg-gradient-to-br from-blue-600 to-indigo-700 rounded-3xl overflow-hidden shadow-2xl rotate-3">
                        <div class="absolute inset-x-0 bottom-0 p-8 text-white bg-gradient-to-t from-black/60 to-transparent">
                            <p class="text-sm font-bold uppercase tracking-widest mb-2 text-blue-200">Our Community</p>
                            <p class="text-2xl font-bold">Membangun Masa Depan Teknologi Bersama Mahasiswa SI.</p>
                        </div>
                    </div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-12 bg-white p-4 rounded-2xl shadow-xl w-32 h-32 flex items-center justify-center border border-slate-100">
                         <img class="h-16 w-auto" src="{{ asset('assets/logo.svg') }}" alt="HIMASIUM Icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divisi Kami -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-3">Divisi Kami</p>
                <h2 class="text-3xl font-extrabold text-slate-900 sm:text-4xl leading-tight">Penjelasan Tugas dan Fungsi Setiap Divisi di<br>Himpunan Mahasiswa Informatika</h2>
            </div>
            
            <!-- Row 1: 3 cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-12 gap-y-14">
                <!-- Pendidikan -->
                <div class="text-center md:text-left">
                    <div class="flex items-center gap-4 mb-4 justify-center md:justify-start">
                        <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-blue-600/30">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900">Pendidikan</h3>
                    </div>
                    <p class="text-slate-500 leading-relaxed">Divisi Pendidikan bertanggung jawab dalam mengurus aspek yang berkaitan dengan akademis mahasiswa program studi Informatika.</p>
                </div>

                <!-- Inti -->
                <div class="text-center md:text-left">
                    <div class="flex items-center gap-4 mb-4 justify-center md:justify-start">
                        <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-blue-600/30">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900">Inti</h3>
                    </div>
                    <p class="text-slate-500 leading-relaxed">Inti bertanggung jawab untuk mengawasi dan mengarahkan seluruh aspek yang ada dalam Himpunan Mahasiswa Informatika.</p>
                </div>

                <!-- Minat dan Bakat -->
                <div class="text-center md:text-left">
                    <div class="flex items-center gap-4 mb-4 justify-center md:justify-start">
                        <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-blue-600/30">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900">Minat dan Bakat</h3>
                    </div>
                    <p class="text-slate-500 leading-relaxed">Divisi Minat dan Bakat bertanggung jawab dalam mewadahi minat dan bakat mahasiswa program studi Informatika.</p>
                </div>
            </div>

            <!-- Row 2: 2 cards centered -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-14 mt-14 max-w-4xl mx-auto">
                <!-- Kesejahteraan Mahasiswa -->
                <div class="text-center md:text-left">
                    <div class="flex items-center gap-4 mb-4 justify-center md:justify-start">
                        <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-blue-600/30">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900">Kesejahteraan Mahasiswa</h3>
                    </div>
                    <p class="text-slate-500 leading-relaxed">Divisi Kesejahteraan Mahasiswa bertanggung jawab untuk menjaga kesejahteraan mahasiswa dan lingkungan kampus program studi Informatika.</p>
                </div>

                <!-- Hubungan Masyarakat -->
                <div class="text-center md:text-left">
                    <div class="flex items-center gap-4 mb-4 justify-center md:justify-start">
                        <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-blue-600/30">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900">Hubungan Masyarakat</h3>
                    </div>
                    <p class="text-slate-500 leading-relaxed">Divisi Hubungan Masyarakat bertanggung jawab atas penyebaran dan penerimaan informasi serta pengabdian masyarakat program studi Informatika.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja Kami -->
    <section class="py-0 bg-white">
        <!-- Blue Header Banner -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 py-16 text-center">
            <p class="text-sm font-semibold text-blue-200 uppercase tracking-widest mb-3">Program Kerja Kami</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight">Kegiatan dan Aktivitas Kami di Himpunan<br>Mahasiswa Informatika</h2>
        </div>

        <!-- Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left Column: News Timeline -->
                <div class="lg:col-span-4">
                    <h3 class="text-2xl font-extrabold text-slate-900 mb-8">News</h3>
                    
                    <div class="space-y-8">
                        <!-- News Item 1 -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 rounded-full border-2 border-blue-600 flex flex-col items-center justify-center text-blue-600">
                                    <span class="text-sm font-extrabold leading-none">31</span>
                                    <span class="text-xs font-semibold leading-none mt-0.5">Jan</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-base font-extrabold text-slate-900 mb-2">SUPREMASI XIX</h4>
                                <p class="text-sm text-slate-500 leading-relaxed mb-3 text-justify">SUPREMASI (Suara Apresiasi Mahasiswa Informatika) SUPREMASI merupakan serangkaian kegiatan yang dilaksanakan untuk memeriahkan Hari Ulang Tahun...</p>
                                <a href="#" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors">Selengkapnya &rarr;</a>
                            </div>
                        </div>

                        <!-- News Item 2 -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 rounded-full border-2 border-blue-600 flex flex-col items-center justify-center text-blue-600">
                                    <span class="text-sm font-extrabold leading-none">13</span>
                                    <span class="text-xs font-semibold leading-none mt-0.5">Mar</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-base font-extrabold text-slate-900 mb-2">Webinar Nasional Informatika 2026</h4>
                                <p class="text-sm text-slate-500 leading-relaxed mb-3 text-justify">Webinar ini merupakan seminar yang diadakan secara online menggunakan platform Zoom Cloud Meetings dengan rentang...</p>
                                <a href="#" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors">Selengkapnya &rarr;</a>
                            </div>
                        </div>

                        <!-- News Item 3 -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 rounded-full border-2 border-blue-600 flex flex-col items-center justify-center text-blue-600">
                                    <span class="text-sm font-extrabold leading-none">22</span>
                                    <span class="text-xs font-semibold leading-none mt-0.5">Mar</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-base font-extrabold text-slate-900 mb-2">Informatika Mengajar 2026</h4>
                                <p class="text-sm text-slate-500 leading-relaxed mb-3 text-justify">Informatika Mengajar merupakan program kerja Divisi Hubungan Masyarakat HIMAIF dalam bidang Pengabdian Masyarakat yang dilatarbelakangi...</p>
                                <a href="#" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors">Selengkapnya &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Program Photo Grid -->
                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <!-- OPTIMUS -->
                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3]">
                            <img src="{{ asset('assets/programs/optimus.png') }}" alt="OPTIMUS" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-700/90 via-blue-700/30 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">OPTIMUS</h4>
                                <p class="text-sm text-blue-100 leading-relaxed">Pengenalan kehidupan lingkungan kampus, pengakraban, dan pelatihan programming untuk mahasiswa baru program studi Informatika.</p>
                            </div>
                        </div>

                        <!-- SURVEI MINAT BAKAT -->
                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3] bg-gradient-to-br from-slate-700 to-slate-900">
                            <div class="absolute inset-0 opacity-30 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.15%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-700/90 via-transparent to-transparent"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white/10">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">Survei Minat Bakat</h4>
                                <p class="text-sm text-blue-100 leading-relaxed">Kegiatan yang bertujuan untuk melakukan pendataan minat dan bakat mahasiswa baru di lingkungan Program Studi Informatika.</p>
                            </div>
                        </div>

                        <!-- INVENTION -->
                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3] bg-gradient-to-br from-blue-800 to-indigo-900">
                            <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2280%22%20height%3D%2280%22%20viewBox%3D%220%200%2080%2080%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.1%22%3E%3Cpath%20d%3D%22M50%2050c0-5.523%204.477-10%2010-10s10%204.477%2010%2010-4.477%2010-10%2010-10-4.477-10-10zM10%2010c0-5.523%204.477-10%2010-10s10%204.477%2010%2010-4.477%2010-10%2010S10%2015.523%2010%2010z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-800/95 via-blue-800/20 to-transparent"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white/10">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">INVENTION</h4>
                                <p class="text-sm text-blue-100 leading-relaxed">Informatics Festival and Competitions adalah perlombaan teknologi informasi tingkat nasional.</p>
                            </div>
                        </div>

                        <!-- Webinar Nasional Informatika -->
                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3] bg-gradient-to-br from-slate-800 to-slate-950">
                            <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.08%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/95 via-slate-900/30 to-transparent"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white/10">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">Webinar Nasional Informatika</h4>
                                <p class="text-sm text-blue-100 leading-relaxed">Seminar nasional yang membahas perkembangan teknologi informasi terkini.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
